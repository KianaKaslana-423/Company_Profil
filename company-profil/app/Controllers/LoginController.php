<?php

namespace App\Controllers;

use App\Models\UsersModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
{
    $session = session();
    $users = new \App\Models\UsersModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $user = $users->where('email', $email)->first();

    if ($user && password_verify($password, $user['password'])) {
        // Jika Berhasil
        $session->set([
            'user_id'    => $user['id'],
            'email'      => $user['email'],
            'name'       => $user['name'],
            'role'       => $user['role'],
            'foto_profil' => $user['foto_profil'],
            'isLoggedIn' => true
        ]);

        return ($user['role'] == 'admin') 
            ? redirect()->to('/') 
            : redirect()->to('/');
    } else {
        // Jika Gagal
        return redirect()->back()->with('msg', 'Email atau Password salah!');
    }
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}