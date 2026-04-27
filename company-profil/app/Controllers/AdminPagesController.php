<?php

namespace App\Controllers;

// Jangan lupa panggil Modelnya di sini
use App\Models\PagesModel; 

class AdminPagesController extends BaseController
{
    // Fungsi index untuk menampilkan daftar (yang sudah kita bahas sebelumnya)
    public function index()
    {
        $model = new PagesModel();
        $data['pages'] = $model->findAll();
        return view('admin/pages_list', $data);
    }

    public function delete($id = null)
{
    $model = new \App\Models\PagesModel(); // Ganti dengan nama model kamu
    
    // 1. Cek apakah data ada
    $data = $model->find($id);
    
    if ($data) {
        // 2. Hapus data
        $model->delete($id);
        
        // 3. Set pesan sukses
        session()->setFlashdata('success', 'Data berhasil dihapus.');
    } else {
        session()->setFlashdata('error', 'Data tidak ditemukan.');
    }

    // 4. Kembalikan ke halaman daftar
    return redirect()->to(base_url('admin/pages'));
}

public function edit($id)
{
    $model = new \App\Models\PagesModel();
    $data['halaman'] = $model->find($id);

    if (!$data['halaman']) {
        return redirect()->to('/admin/pages')->with('error', 'Data tidak ditemukan');
    }
    return view('admin/pages_edit', $data);
}

public function update($id)
{
    $model = new \App\Models\PagesModel();
    
    $data = [
        // 'title' adalah nama kolom di database
        // getPost('title') harus sama dengan name="title" di HTML kamu
        'title'   => $this->request->getPost('title'), 
        'content' => $this->request->getPost('content'),
        'status'  => $this->request->getPost('status'),
    ];

    // Cek foto (sesuaikan name="thumbnail_image" dari HTML kamu)
    $file = $this->request->getFile('thumbnail_image');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move('assets/images/', $newName);
        $data['thumbnail_image'] = $newName;
    }

    $model->update($id, $data);
    return redirect()->to('/admin/pages')->with('success', 'Data updated!');
}

public function show($id)
{
    $model = new \App\Models\PagesModel();
    
    // Cari data berdasarkan ID
    $data['halaman'] = $model->find($id);

    // Jika data tidak ada (misal URL diketik manual dan salah ID)
    if (!$data['halaman']) {
        return redirect()->to('/admin/pages')->with('error', 'Halaman tidak ditemukan.');
    }

    // Tampilkan ke 1 file view bernama 'pages_show'
    return view('admin/pages_show', $data);
}

    // --- TEMPATKAN KODE KAMU DI SINI ---

    public function add()
    {
        return view('admin/pages_add'); 
    }

    public function store()
    {
        $model = new PagesModel();

        $file = $this->request->getFile('thumbnail_image');
        $fileName = 'default.jpg';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('assets/images/', $fileName);
        }

        $data = [
            'title'           => $this->request->getPost('title'),
            'slug'            => url_title($this->request->getPost('title'), '-', true),
            'content'         => $this->request->getPost('content'),
            'thumbnail_image' => $fileName,
            'status'          => $this->request->getPost('status'),
        ];

        $model->insert($data);
        return redirect()->to('/admin/pages')->with('msg', 'Halaman baru berhasil ditambahkan!');
    }
}