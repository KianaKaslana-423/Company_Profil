<?php

namespace App\Controllers;

// WAJIB ADA: Tanpa baris ini, Controller tidak bisa memanggil database
use App\Models\PagesModel; 

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function services()
    {
        // 1. Inisialisasi Model
        $model = new PagesModel();
        
        // 2. Ambil data yang statusnya 'published' agar data 'draft' tidak muncul
        $data['pages'] = $model->where('status', 'published')->findAll();

        // 3. Kirim data ke view services.php
        return view('services', $data);
    }
}