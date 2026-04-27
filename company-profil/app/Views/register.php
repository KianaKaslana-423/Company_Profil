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
            
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card border-0 shadow-sm p-4" style="border-radius: 15px;">
                            <h3 class="fw-bold text-center mb-4">Register <span class="text-danger">Honda Account</span></h3>
                            <form action="<?= base_url('register/store') ?>" method="POST">
                                <div class="mb-3">
                                    <label class="small fw-bold text-muted">FULL NAME</label>
                                    <input type="text" name="name" class="form-control" required placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label class="small fw-bold text-muted">EMAIL ADDRESS</label>
                                    <input type="email" name="email" class="form-control" required placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label class="small fw-bold text-muted">PASSWORD</label>
                                    <input type="password" name="password" class="form-control" required placeholder="Min. 8 characters">
                                </div>
                                <button type="submit" class="btn btn-danger w-100 fw-bold py-2 mt-3">CREATE ACCOUNT</button>
                            </form>
                            <div class="text-center mt-4">
                                <span class="text-muted">Already have an account?</span> 
                                <a href="<?= base_url('login') ?>" class="text-danger text-decoration-none fw-bold">Login Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>