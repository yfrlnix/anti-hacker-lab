<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiTokenModel extends Model
{
    protected $table = 'api_tokens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'token', 'name', 'expires_at'];
    protected $useTimestamps = false; 
    
    protected $beforeInsert = ['generateToken'];
    
    protected function generateToken(array $data)
    {
        if (empty($data['data']['token'])) {
            $data['data']['token'] = bin2hex(random_bytes(32));
        }
        return $data;
    }
    
    public function validateToken($token)
    {
        $tokenData = $this->where('token', $token)->first();
        
        if (!$tokenData) {
            return null;
        }
        
        if ($tokenData['expires_at'] && strtotime($tokenData['expires_at']) < time()) {
            return null;
        }
        
        return $tokenData;
    }
    
    public function generateNewToken($userId, $name = null, $expiryDays = 30)
    {
        $expiryDate = date('Y-m-d H:i:s', strtotime("+{$expiryDays} days"));
        
        $data = [
            'user_id' => $userId,
            'name' => $name ?: 'API Token',
            'expires_at' => $expiryDate,
            'token' => bin2hex(random_bytes(32))
        ];
        
        $this->insert($data);
        
        return $this->getInsertID();
    }
}