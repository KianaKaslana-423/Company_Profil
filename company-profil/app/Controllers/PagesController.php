<?php

namespace App\Controllers;

use App\Models\PagesModel;

class PagesController extends BaseController
{
    // Fungsi untuk menampilkan detail berdasarkan SLUG
   public function viewDetail($slug)
{
    $model = new \App\Models\PagesModel();
    
    // 1. Cari data berdasarkan slug di database
    $data['halaman'] = $model->where('slug', $slug)->first();

    // 2. Jika data tidak ada, tampilkan 404
    if (!$data['halaman']) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    // 3. INI KUNCINYA: Memanggil file pages_show.php untuk ditampilkan
    return view('admin/pages_show', $data); 
}

public function structure()
{
    // Ini akan memanggil file structur.php yang ada di folder views
    return view('structur'); 
}
}