<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precision Access | HONDA</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap');

        body {
            /* PENTING: Sesuaikan nama file gambar dengan yang kamu simpan */
            background: url('<?= base_url('assets/images/nsx.jpg') ?>') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        /* Efek Kaca (Glassmorphism) untuk Form Login */
        .glass-card {
            background: rgba(240, 240, 240, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 8px;
            padding: 3rem;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .text-honda-red { color: #D00000; }
        .bg-honda-red { background-color: #D00000; color: white; border: none;}
        .bg-honda-red:hover { background-color: #A00000; color: white; }
        
        .form-control-custom {
            background-color: rgba(255, 255, 255, 0.6);
            border: 1px solid transparent;
            font-size: 0.9rem;
        }
        .form-control-custom:focus {
            background-color: white;
            border-color: #D00000;
            box-shadow: none;
        }

        .btn-external {
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.8);
            font-size: 0.8rem;
            font-weight: 600;
        }
        .btn-external:hover { background-color: rgba(255, 255, 255, 0.9); }

        /* Footer link styling */
        .footer-auth a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }
        .footer-auth a:hover { color: white; }
    </style>
</head>
<body>

    <div class="container-fluid h-100 position-relative">
        <div class="row h-100">
            
            <div class="col-md-5 d-flex align-items-center justify-content-center p-4 p-md-5" style="z-index: 2;">
                <div class="glass-card">
                    <h4 class="text-honda-red fw-bold fst-italic mb-4" style="letter-spacing: -1px;">HONDA</h4>
                    <h2 class="fw-normal mb-1">Precision Access</h2>
                    <p class="text-muted small mb-4">Enter your credentials to access the digital garage.</p>

                    <form action="/login-submit" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted" style="font-size: 0.7rem; font-weight: 700; letter-spacing: 1px;">EMAIL ADDRESS</label>
                            <input type="email" class="form-control form-control-custom py-2" placeholder="name@honda-cloud.com" required>
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label text-muted mb-0" style="font-size: 0.7rem; font-weight: 700; letter-spacing: 1px;">PASSWORD</label>
                                <a href="#" class="text-honda-red text-decoration-none" style="font-size: 0.75rem; font-weight: 600;">Forgot?</a>
                            </div>
                            <input type="password" class="form-control form-control-custom py-2 mt-2" placeholder="••••••••" required>
                        </div>

                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="stayAuth">
                            <label class="form-check-label text-muted" for="stayAuth" style="font-size: 0.85rem;">Stay authenticated</label>
                        </div>

                        <button type="submit" class="btn bg-honda-red w-100 py-2 fw-bold mb-4">
                            Authorize Access <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </form>

                    <div class="text-center mb-3">
                        <span class="text-muted" style="font-size: 0.65rem; font-weight: 700; letter-spacing: 2px;">EXTERNAL AUTH</span>
                    </div>

                    <div class="row g-2 mb-4">
                        <div class="col-6">
                            <button class="btn btn-external w-100 py-2"><i class="fa-solid fa-cloud me-2"></i> Corporate</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-external w-100 py-2"><i class="fa-regular fa-address-card me-2"></i> Partner</button>
                        </div>
                    </div>

                    <div class="text-center" style="font-size: 0.8rem;">
                        <span class="text-muted">New to the portal?</span> <a href="#" class="text-honda-red text-decoration-none fw-bold">Apply for access</a>
                    </div>
                </div>
            </div>

            <div class="col-md-7 d-none d-md-flex flex-column justify-content-center p-5" style="z-index: 1;">
                <div style="padding-left: 10%;">
                    <div style="width: 60px; height: 4px; background-color: #D00000; margin-bottom: 20px;"></div>
                    <h1 class="text-white fw-bold fst-italic" style="font-size: 4.5rem; line-height: 1.1; text-shadow: 2px 4px 15px rgba(0,0,0,0.5);">
                        Engineering<br>the future of<br>mobility.
                    </h1>
                    <div class="d-flex align-items-center mt-4">
                        <i class="fa-solid fa-shield-halved text-white fs-5 me-2" style="filter: drop-shadow(1px 2px 5px rgba(0,0,0,0.5));"></i>
                        <span class="text-white fw-bold" style="font-size: 0.85rem; letter-spacing: 1.5px; text-shadow: 1px 2px 5px rgba(0,0,0,0.5);">SECURED BY HONDA PRECISION SYSTEMS</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="position-absolute bottom-0 start-0 p-4 footer-auth d-flex gap-4 d-none d-md-flex" style="z-index: 2;">
            <a href="#">PRIVACY PROTOCOL</a>
            <a href="#">LEGAL NOTICE</a>
            <span style="color: rgba(255, 255, 255, 0.4); font-size: 0.7rem; font-weight: 600; letter-spacing: 1.5px;">&copy; 2026 HONDA MOTOR CO.</span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>