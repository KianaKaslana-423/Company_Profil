<?php 
// Validasi status admin
$isAdmin = (session()->get('isLoggedIn') && session()->get('role') === 'admin');

if ($isAdmin): 
    // JIKA ADMIN: Gunakan sistem Layout CI4
    echo $this->extend('layout/admin_layout'); 
    echo $this->section('content');
else: 
    // JIKA BUKAN ADMIN: Hapus semua sistem layout, ganti dengan CSS murni
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($halaman['title']) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
        .admin-footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #EAEAEA;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="public-page">
    <?= $this->extend('layout/frontend') ?>
    <?= $this->section('content') ?>

<?php endif; ?>

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">Page Details</h3>
            <p class="text-muted small">Previewing digital content for Honda ecosystem.</p>
        </div>
            <?php 
            // Tentukan link tujuan berdasarkan session
            $backLink = (session()->get('isLoggedIn') && session()->get('role') === 'admin') 
                        ? base_url('admin/pages') 
                        : base_url('services');
            
            // Tentukan teks tombol
            $backText = (session()->get('isLoggedIn') && session()->get('role') === 'admin') 
                        ? 'Back to Manage Pages' 
                        : 'Back to Services';
            ?>
        <a href="<?= $backLink ?>" class="btn btn-light fw-bold text-muted border">
            <i class="fa-solid fa-arrow-left me-2"></i><?= $backText ?>
        </a>
    </div>

    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                
                <img src="<?= base_url('assets/images/' . ($halaman['thumbnail_image'] ?: 'default.jpg')) ?>" 
                     class="card-img-top" 
                     style="height: 400px; object-fit: cover;" 
                     alt="<?= esc($halaman['title']) ?>">

                <div class="card-body p-5">
                    <?php if($halaman['status'] == 'published'): ?>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success px-3 py-2 mb-3 text-uppercase">
                            ● Published
                        </span>
                    <?php else: ?>
                        <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary px-3 py-2 mb-3 text-uppercase">
                            ● Draft
                        </span>
                    <?php endif; ?>

                    <h1 class="fw-bolder" style="color: #2D2D2D;"><?= esc($halaman['title']) ?></h1>
                    <p class="text-muted small mb-4">URL Slug: <span class="text-primary">/<?= esc($halaman['slug']) ?></span></p>
                    
                    <hr class="mb-4">

                    <div class="content-text fs-5 text-secondary" style="line-height: 1.8;">
                        <?= nl2br(esc($halaman['content'])) ?>
                    </div>
                </div>
                
                <?php if (session()->get('isLoggedIn') && session()->get('role') === 'admin'): ?>
                    <div class="card-footer bg-white p-4 text-end">
                        <a href="<?= base_url('admin/pages/edit/' . $halaman['id']) ?>" class="btn btn-danger fw-bold px-4 py-2" style="background-color: #D00000;">
                            <i class="fa-solid fa-pen-to-square me-2"></i> Edit This Page
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>