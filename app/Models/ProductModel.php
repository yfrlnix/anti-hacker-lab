<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'name', 'slug', 'price', 'description', 'category', 'stock_quantity', 'image_url', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    protected $beforeInsert = ['generateSlug'];
    protected $beforeUpdate = ['generateSlug'];
    
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['name'])) {
            $data['data']['slug'] = url_title($data['data']['name'], '-', true);
        }
        return $data;
    }
    
    public function getProductsWithUser()
    {
        return $this->select('products.*, users.username, users.full_name')
                    ->join('users', 'users.id = products.user_id')
                    ->orderBy('products.created_at', 'DESC')
                    ->findAll();
    }

    public function searchProducts($keyword, $category = null, $limit = null, $offset = 0)
    {
        $builder = $this->select('products.*, users.username, users.full_name')
                        ->join('users', 'users.id = products.user_id');
        
        if (!empty($keyword)) {
            $builder->groupStart()
                    ->like('products.name', $keyword)
                    ->orLike('products.description', $keyword)
                    ->groupEnd();
        }
        
        if (!empty($category)) {
            $builder->where('products.category', $category);
        }
        
        if ($limit) {
            $builder->limit($limit, $offset);
        }
        
        return $builder->orderBy('products.created_at', 'DESC')->findAll();
    }
}