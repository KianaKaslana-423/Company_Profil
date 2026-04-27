<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel | HONDA' ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F9F9F9; /* Warna abu-abu terang sesuai desain */
            margin: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        
        /* SIDEBAR KIRI */
        .sidebar {
            width: 260px;
            background-color: #FFFFFF;
            border-right: 1px solid #EAEAEA;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            z-index: 10;
        }
        
        .sidebar-header {
            padding: 30px 25px;
        }
        
        .brand-honda {
            color: #D00000;
            font-weight: 800;
            font-size: 1.5rem;
            font-style: italic;
            letter-spacing: -1px;
            margin-bottom: 0;
        }
        
        .brand-sub {
            font-size: 0.65rem;
            color: #888;
            letter-spacing: 2px;
            font-weight: 600;
        }
        
        /* Menu Navigasi */
        .nav-section {
            padding: 0 15px;
        }
        
        .nav-label {
            font-size: 0.65rem;
            color: #A0A0A0;
            letter-spacing: 1.5px;
            margin-left: 10px;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            color: #555;
            padding: 12px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
            transition: all 0.2s;
        }
        
        .sidebar-link i {
            width: 25px;
            font-size: 1.1rem;
            color: #888;
        }
        
        .sidebar-link:hover {
            background-color: #F4F6F8;
            color: #D00000;
        }
        
        .sidebar-link:hover i {
            color: #D00000;
        }
        
        /* Indikator Active (Garis Merah di Kiri) */
        .sidebar-link.active {
            background-color: #F4F6F8;
            color: #D00000;
            border-left: 4px solid #D00000;
            border-radius: 0 8px 8px 0;
        }
        
        .sidebar-link.active i {
            color: #D00000;
            margin-left: -4px; /* Kompensasi border */
        }
        
        /* PROFIL BAWAH */
        .sidebar-footer {
            margin-top: auto;
            padding: 25px 20px;
            border-top: 1px solid #EAEAEA;
        }
        
        .profile-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .profile-card img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 12px;
        }
        
        .profile-info h6 {
            margin: 0;
            font-weight: 700;
            font-size: 0.85rem;
            color: #333;
        }
        
        .profile-info p {
            margin: 0;
            font-size: 0.7rem;
            color: #888;
        }
        
        /* AREA KONTEN KANAN */
        .main-content {
            flex-grow: 1;
            overflow-y: auto;
        }
        
        .content-wrapper {
            padding: 40px 50px;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        /* Footer Admin Global */
        .admin-footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #EAEAEA;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand-honda">HONDA</h3>
            <div class="brand-sub">PRECISION CONTROL</div>
        </div>

        <?php $current_uri = uri_string(); ?>
        
        <div class="nav-section mt-2">
            <div class="nav-label">NAVIGATION</div>
            
            <a href="/admin/inbox" class="sidebar-link <?= (strpos($current_uri, 'admin/inbox') !== false) ? 'active' : '' ?>">
                <i class="fa-regular fa-envelope"></i> Inbox
            </a>
            
            <a href="/admin/pages" class="sidebar-link <?= (strpos($current_uri, 'admin/pages') !== false) ? 'active' : '' ?>">
                <i class="fa-solid fa-gear"></i> Manage Pages
            </a>
        </div>

        <div class="sidebar-footer">
            <div class="profile-card">
                <img src="<?= base_url('assets/images/FIRMAN.jpg') ?>" alt="Admin Profile">
                <div class="profile-info">
                    <h6>Admin Profile</h6>
                    <p>System Root</p>
                </div>
            </div>
            
            <a href="/" target="_blank" class="btn text-white w-100 fw-bold shadow-sm py-2" style="background-color: #D00000; font-size: 0.85rem;">
                View Site <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i>
            </a>
        </div>
    </aside>

    <main class="main-content">
        <div class="content-wrapper">
            
            <?= $this->renderSection('content') ?>
            
            <footer class="admin-footer">
                <div class="d-flex align-items-center">
                    <h5 class="fw-bold mb-0 me-3" style="letter-spacing: -1px;">HONDA</h5>
                    <span class="text-muted" style="font-size: 0.7rem; letter-spacing: 1px;">ADMINISTRATION CONSOLE</span>
                </div>
                <div class="d-flex gap-4">
                    <span style="font-size: 0.7rem; color: #888;">&copy; 2026 HONDA MOTOR CO. ALL RIGHTS RESERVED.</span>
                    <div style="font-size: 0.7rem; color: #888;">
                        <a href="#" class="text-decoration-none text-muted me-3">PRIVACY POLICY</a>
                        <a href="#" class="text-decoration-none text-muted me-3">LEGAL</a>
                        <a href="#" class="text-decoration-none text-muted">COOKIE SETTINGS</a>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>