<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SecurityLab extends Controller
{
    public function index()
    {
        return view('security_form');
    }

    public function submit()
    {
        $name = $this->request->getPost('name');

        return view('security_form', [
            'name' => $name
        ]);
    }
}

