<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'HONDA | The Power of Dreams' ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F9FA;
            color: #333;
        }
        
        /* Navbar Styling */
        .navbar-custom {
            background-color: #FFFFFF;
            border-bottom: 1px solid #EAEAEA;
            padding: 15px 5%;
        }
        
        .navbar-brand {
            color: #D00000 !important; /* Honda Red */
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: -1px;
        }
        
        .nav-link {
            color: #555555;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0 10px;
            transition: color 0.3s;
        }
        
        /* DITAMBAHKAN !important DI SINI */
        .nav-link:hover, .nav-link.active {
            color: #D00000 !important;
        }
        
        /* User Icon */
        .user-icon {
            color: #333;
            font-size: 1.2rem;
        }

        .navbar-nav .dropdown-toggle::after {
            display: none;
        }

        .dropdown-toggle::after {
            display: none !important;
        }
        
        /* 1. Memicu Dropdown saat Hover (Desktop) */
        @media (min-width: 992px) {
            .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        /* 2. Menghilangkan Segitiga Bawaan Bootstrap */
        .dropdown-toggle::after {
            display: none !important;
        }

       /* 3. Pengaturan Dasar: Pastikan Nav-Link adalah jangkar untuk garis */
        .navbar-nav .nav-link {
            position: relative !important;
            display: inline-block !important;
            padding-bottom: 8px !important; /* Memberi ruang di bawah teks agar garis terlihat */
            background: transparent !important;
        }

        /* 4. Membuat Garis Merah */
        .navbar-nav .nav-link::after {
            content: '' !important;
            position: absolute;
            bottom: 0; /* Tempelkan di paling bawah padding nav-link */
            left: 15px; /* Sesuaikan dengan padding-left nav-link agar sejajar teks */
            right: 15px; /* Sesuaikan dengan padding-right */
            height: 3px; /* Sedikit lebih tebal agar jelas */
            background-color: #D00000 !important;
            transform: scaleX(0); /* Awalnya sembunyi */
            transition: transform 0.3s ease-in-out;
            transform-origin: bottom left;
            display: block !important;
            z-index: 999;
        }

        /* 5 & 6. Efek Hover dan Aktif */
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after,
        .navbar-nav .nav-item.dropdown:hover > .nav-link::after {
            transform: scaleX(1) !important; /* Munculkan garis */
        }

        /* Tambahan: Pastikan Navbar tidak memotong garis yang keluar sedikit */
        .navbar-custom, .navbar-collapse {
            overflow: visible !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">HONDA</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <?php $current_uri = uri_string(); ?>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_uri == '') ? 'active' : '' ?>" href="/">HOME</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3 <?= (in_array($current_uri, ['products', 'innovation'])) ? 'active' : '' ?>" 
                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <?php 
                            if ($current_uri == 'innovation') {
                                echo 'INNOVATION';
                            } else {
                                echo 'PRODUCTS';
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item <?= ($current_uri == 'products') ? 'active' : '' ?>" href="/products">PRODUCTS</a></li>
                        <li><a class="dropdown-item <?= ($current_uri == 'innovation') ? 'active' : '' ?>" href="/innovation">INNOVATION</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link <?= ($current_uri == 'sustainability') ? 'active' : '' ?>" href="/sustainability">SUSTAINABILITY</a></li>
                <li class="nav-item"><a class="nav-link <?= ($current_uri == 'services') ? 'active' : '' ?>" href="/services">SERVICES</a></li>
                <li class="nav-item"><a class="nav-link <?= ($current_uri == 'contact') ? 'active' : '' ?>" href="/contact">CONTACT</a></li>
            </ul>
        </div>
            
            <div class="d-none d-lg-block">
                <?php if (session()->get('isLoggedIn')): ?>
                    <div class="dropdown d-inline-block">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle hide-caret" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-wrapper position-relative">
                                <?php $foto = session()->get('foto_profil') ? session()->get('foto_profil') : 'default.png'; ?>
                                <img src="<?= base_url('assets/img/profile/' . $foto) ?>" 
                                    alt="User" width="33" height="33" 
                                    class="rounded-circle border border-2 border-dark shadow-sm" 
                                    style="object-fit: cover;">
                            </div>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 p-3" style="min-width: 250px; border-radius: 15px;">
                            <li class="text-center mb-3">
                                <form id="formGantiFoto" action="<?= base_url('profile/update-foto') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="position-relative d-inline-block">
                                        <img src="<?= base_url('assets/img/profile/' . $foto) ?>" 
                                            class="rounded-circle border border-3 border-light shadow-sm" 
                                            width="80" height="80" 
                                            style="object-fit: cover; cursor: pointer;" 
                                            onclick="document.getElementById('inputFoto').click();"
                                            title="Klik untuk ganti foto">
                                        
                                        <div class="camera-icon-overlay position-absolute bottom-0 end-0 bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" 
                                            style="width: 28px; height: 28px; cursor: pointer;"
                                            onclick="document.getElementById('inputFoto').click();">
                                            <i class="fas fa-camera text-muted" style="font-size: 14px;"></i>
                                        </div>
                                        
                                        <input type="file" name="foto_profil" id="inputFoto" style="display: none;" accept="image/*" onchange="this.form.submit();">
                                    </div>
                                </form>
                                
                                <h6 class="mb-0 mt-2 fw-bold"><?= session()->get('name'); ?></h6>
                                <small class="badge bg-light text-dark rounded-pill px-3"><?= strtoupper(session()->get('role')); ?></small>
                            </li>
                            
                            <li><hr class="dropdown-divider"></li>
                            
                            <?php if(session()->get('role') == 'admin') : ?>
                                <li>
                                    <a class="dropdown-item py-2 fw-bold text-danger" href="<?= base_url('admin/pages') ?>">
                                        <i class="fas fa-user-shield me-2"></i> Panel Admin
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                            <?php endif; ?>

                            <li><a class="dropdown-item py-2" href="<?= base_url('bantuan') ?>"><i class="fas fa-headset me-3 text-success"></i> Pusat Bantuan</a></li>
                            <li><a class="dropdown-item py-2 text-warning" href="<?= base_url('lapor') ?>"><i class="fas fa-bug me-3"></i> Laporan Masalah</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item py-2 text-danger" href="<?= base_url('logout') ?>" onclick="return confirm('Apakah Anda yakin ingin keluar dari akun Honda Anda?');">
                                    <i class="fas fa-sign-out-alt me-3"></i> Keluar
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="<?= base_url('login') ?>" class="user-icon text-dark fs-4 transition-hover">
                        <i class="fa-regular fa-circle-user"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="bg-white text-center py-4 mt-5" style="border-top: 1px solid #EAEAEA;">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="fw-bold" style="color: #333; letter-spacing: -1px;">HONDA</span>
            <div style="font-size: 0.75rem; color: #888;">
                <a href="#" class="text-decoration-none text-muted me-3">PRIVACY POLICY</a>
                <a href="#" class="text-decoration-none text-muted me-3">LEGAL</a>
                <a href="#" class="text-decoration-none text-muted">COOKIE SETTINGS</a>
            </div>
            <span style="font-size: 0.75rem; color: #888;">&copy; 2026 HONDA MOTOR CO. ALL RIGHTS RESERVED.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>