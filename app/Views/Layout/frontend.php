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
                    <li class="nav-item"><a class="nav-link <?= ($current_uri == 'products') ? 'active' : '' ?>" href="/products">PRODUCTS</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_uri == 'innovation') ? 'active' : '' ?>" href="/innovation">INNOVATION</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_uri == 'sustainability') ? 'active' : '' ?>" href="/sustainability">SUSTAINABILITY</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_uri == 'services') ? 'active' : '' ?>" href="/services">SERVICES</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($current_uri == 'contact') ? 'active' : '' ?>" href="/contact">CONTACT</a></li>
                </ul>
                
            </div>
            
            <div class="d-none d-lg-block">
                <a href="/login" class="user-icon"><i class="fa-regular fa-circle-user"></i></a>
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