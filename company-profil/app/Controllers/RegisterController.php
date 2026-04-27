<?php
namespace App\Controllers;
use App\Models\UsersModel;

class RegisterController extends BaseController {
    public function index() {
        return view('register');
    }

    public function store() {
        $model = new UsersModel();
        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            // Password di-hash agar aman dan tidak error saat login
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user' // Otomatis sebagai user biasa, bukan admin
        ];
        $model->insert($data);
        return redirect()->to('/login')->with('msg', 'Registration Successful! Please Login.');
    }
}