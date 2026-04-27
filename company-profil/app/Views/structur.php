<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi - Honda Precision</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* =========================================
           GLOBAL & HONDA THEME VARIABLES
           ========================================= */
        :root {
            --bg-color: #0a0a0a;
            --honda-red: #cc0000; /* Merah Khas Honda */
            --honda-red-glow: rgba(204, 0, 0, 0.6);
            --honda-white: #ffffff;
            --honda-silver: #a0a0a0;
            --glass-bg: rgba(15, 15, 15, 0.85);
            --glass-border: rgba(204, 0, 0, 0.3);
            --line-color: #cc0000;
        }

        body {
            /* Menggabungkan gradient transparant dengan gambar NSX */
            background-image: 
                linear-gradient(to bottom, rgba(10, 10, 10, 0.85), rgba(204, 0, 0, 0.45)),
                url('<?= base_url('assets/images/nsx.jpg') ?>');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-color: var(--bg-color); /* Sebagai fallback/cadangan */
            font-family: 'Roboto', sans-serif;
            min-height: 100vh; /* Gunakan min-height agar background tidak terpotong jika konten panjang */
        }

        /* Tombol Kembali */
        .btn-back {
            position: absolute;
            top: 30px;
            left: 30px;
            background: transparent;
            color: var(--honda-white);
            border: 1px solid var(--honda-red);
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .btn-back:hover {
            background: var(--honda-red);
            color: #fff;
            box-shadow: 0 0 15px var(--honda-red-glow);
        }

        h1.title-honda {
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            font-weight: 900;
            font-size: 2.8rem;
            margin-top: 20px;
            margin-bottom: 60px;
            text-transform: uppercase;
            color: var(--honda-white);
            letter-spacing: 4px;
            text-shadow: 2px 2px 0px var(--honda-red), 0 0 20px rgba(255,255,255,0.2);
        }

        /* =========================================
           TREE STRUCTURE CSS (Sirkuit Penghubung)
           ========================================= */
        .org-tree {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-bottom: 100px;
        }

        .org-tree ul {
            padding-top: 30px;
            position: relative;
            transition: all 0.5s;
            display: flex;
            padding-left: 0;
            justify-content: center;
        }

        .org-tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 30px 10px 0 10px;
            transition: all 0.5s;
        }

        .org-tree li::before, .org-tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid var(--line-color);
            width: 50%;
            height: 30px;
            box-shadow: 0 -2px 5px var(--honda-red-glow);
            z-index: -1;
        }

        .org-tree li::after {
            right: auto;
            left: 50%;
            border-left: 2px solid var(--line-color);
            box-shadow: -2px 0 5px var(--honda-red-glow);
        }

        .org-tree li:only-child::after, .org-tree li:only-child::before { display: none; }
        .org-tree li:only-child { padding-top: 0; }
        .org-tree li:first-child::before, .org-tree li:last-child::after { border: 0 none; }
        
        .org-tree li:last-child::before {
            border-right: 2px solid var(--line-color);
            border-radius: 0 5px 0 0;
        }
        .org-tree li:first-child::after { border-radius: 5px 0 0 0; }

        .org-tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid var(--line-color);
            width: 0;
            height: 30px;
            transform: translateX(-1px);
            z-index: -1;
        }

        /* =========================================
           NODE CARDS (Karakter & Profil)
           ========================================= */
        .node-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-bottom: 4px solid var(--honda-red);
            border-radius: 8px;
            padding: 20px;
            min-width: 220px;
            display: inline-block;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0; 
            transform: translateY(30px);
        }

        .node-card:hover {
            transform: translateY(-5px);
            border-color: var(--honda-red);
            box-shadow: 0 15px 30px rgba(204, 0, 0, 0.2), inset 0 0 10px rgba(204, 0, 0, 0.1);
        }

        /* Gambar Profil dari Unsplash */
        .avatar-ring {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px auto;
            border-radius: 50%;
            background: #111;
            border: 3px solid var(--honda-white);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .node-card:hover .avatar-ring {
            border-color: var(--honda-red);
            box-shadow: 0 0 20px var(--honda-red-glow);
        }

        .avatar-ring img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .job-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: var(--honda-white);
            text-transform: uppercase;
        }

        .person-name {
            font-size: 0.95rem;
            color: var(--honda-silver);
            font-weight: 500;
        }

        .honda-badge {
            display: inline-block;
            margin-top: 10px;
            padding: 4px 12px;
            font-size: 0.7rem;
            font-family: 'Orbitron', sans-serif;
            background: var(--honda-red);
            color: #fff;
            border-radius: 3px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* =========================================
           ROBOT ANIMASI (Maskot Pojok Kanan Bawah)
           ========================================= */
        .mascot-container {
            position: fixed;
            bottom: -10px;
            right: 30px;
            width: 150px;
            text-align: center;
            z-index: 1000;
            pointer-events: none;
        }

        .mascot-robot {
            font-size: 4rem;
            color: var(--honda-white);
            text-shadow: 0 0 10px rgba(255,255,255,0.3);
            position: relative;
            display: inline-block;
            animation: floatRobot 4s ease-in-out infinite;
        }

        .mascot-arm {
            position: absolute;
            top: 10px;
            right: -25px;
            font-size: 2.5rem;
            color: var(--honda-red);
            transform-origin: bottom left;
            animation: waveArm 2.5s infinite;
            filter: drop-shadow(0 0 5px var(--honda-red-glow));
        }

        .mascot-dialog {
            background: var(--honda-white);
            color: var(--bg-color);
            padding: 8px 15px;
            border-radius: 15px 15px 0 15px;
            font-weight: bold;
            font-size: 0.8rem;
            position: absolute;
            top: -40px;
            right: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            border: 2px solid var(--honda-red);
            white-space: nowrap;
            opacity: 0;
            animation: fadeInDialog 1s forwards 2s;
        }

        /* =========================================
           ANIMASI KEYFRAMES
           ========================================= */
        @keyframes waveArm {
            0% { transform: rotate(0deg); }
            10% { transform: rotate(30deg); }
            20% { transform: rotate(-10deg); }
            30% { transform: rotate(30deg); }
            40% { transform: rotate(-10deg); }
            50% { transform: rotate(10deg); }
            60%, 100% { transform: rotate(0deg); }
        }

        @keyframes floatRobot {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeInDialog {
            to { opacity: 1; transform: translateY(-5px); }
        }

        .is-loaded {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        @media (max-width: 992px) {
            .btn-back { position: relative; top: 0; left: 0; display: inline-block; margin-bottom: 20px; }
            h1.title-honda { font-size: 1.8rem; margin-top: 0; }
            .mascot-container { width: 100px; right: 10px; bottom: 0; }
            .mascot-robot { font-size: 3rem; }
            .mascot-arm { font-size: 2rem; right: -15px; }
            .mascot-dialog { display: none; }
        }
    </style>
</head>
<body>

    <a href="/contact" class="btn-back"><i class="fas fa-arrow-left me-2"></i> Back to Contact</a>

    <div class="container-fluid">
        <h1 class="title-honda">HONDA COMMAND STRUCTURE</h1>
        
        <div class="org-tree">
            <ul>
                <li>
                    <div class="node-card">
                        <div class="avatar-ring">
                            <img src="assets/images/Firman3.jpeg" alt="President">
                        </div>
                        <div class="job-title">CEO</div>
                        <div class="person-name">Dr. Ahmad Firmansyah, A.Md.Kom</div>
                        <div class="honda-badge">PIMPINAN TERTINGGI</div>
                    </div>
                    
                    <ul>
                        <li>
                            <div class="node-card">
                                <div class="avatar-ring">
                                    <img src="assets/images/RAAFI1.jpg" alt="VP Ops">
                                </div>
                                <div class="job-title">President Director</div>
                                <div class="person-name">Dr. Raafi Rifani, A.Md.Kom</div>
                                <div class="honda-badge">PIMPINAN DIREKSI</div>
                            </div>
                            
                            <ul>
                                <li>
                                    <div class="node-card">
                                        <div class="avatar-ring">
                                            <img src="assets/images/rafi.jpg" alt="Engineering">
                                        </div>
                                        <div class="job-title">Director Engineer</div>
                                        <div class="person-name">Dr. Rafi Dzakwan Maulana, A.Md.Kom</div>
                                        <div class="honda-badge">DIREKTUR IT VIP</div>
                                    </div>
                                    
                                    <ul>
                                        <li>
                                            <div class="node-card">
                                                <div class="avatar-ring"><img src="assets/images/rendi.jpg" alt="Mechanic"></div>
                                                <div class="job-title">Senior Mechanic</div>
                                                <div class="person-name">Dr. Rendi Syaputra, A.Md.Kom</div>
                                                <div class="honda-badge">Manager IT</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="node-card">
                                                <div class="avatar-ring"><img src="assets/images/rendi1.png" alt="Software"></div>
                                                <div class="job-title">Software Systems</div>
                                                <div class="person-name">Ir. Rendi Syaputra, A.Md.Kom</div>
                                                <div class="honda-badge">MANAGER Engineer</div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="node-card">
                                        <div class="avatar-ring">
                                            <img src="assets/images/dimas.jpg" alt="Sales">
                                        </div>
                                        <div class="job-title">Director Sales</div>
                                        <div class="person-name">Ir. Dimas Setiawan, A.Md.Kom</div>
                                        <div class="honda-badge">MANAGER FINANCE</div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="node-card">
                                                <div class="avatar-ring"><img src="assets/images/aan.jpg" alt="Agent 1"></div>
                                                <div class="job-title">Sales Agent</div>
                                                <div class="person-name">Ir. Bara Obama, A.Md.Kom</div>
                                                <div class="honda-badge">PRESIDENT AMERICA</div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="mascot-container">
        <div class="mascot-dialog">System Ready!</div>
        <div class="mascot-robot">
            <i class="fas fa-robot"></i>
            <div class="mascot-arm">
                <i class="fas fa-hand-paper"></i>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const nodes = document.querySelectorAll('.node-card');
            
            // Animasi kemunculan (Fade In + Slide Up)
            nodes.forEach((node, index) => {
                setTimeout(() => {
                    node.classList.add('is-loaded');
                }, index * 120); // Delay sedikit dipercepat untuk nuansa "Racing"
            });

            // Interaksi klik untuk Expand/Collapse
            nodes.forEach(node => {
                node.addEventListener('click', function(e) {
                    e.stopPropagation(); 
                    
                    const children = this.nextElementSibling;
                    
                    if (children && children.tagName.toLowerCase() === 'ul') {
                        if (children.style.display === 'none') {
                            children.style.display = 'flex';
                            this.style.boxShadow = '0 0 25px rgba(204, 0, 0, 0.6)'; 
                            
                            const childNodes = children.querySelectorAll('.node-card');
                            childNodes.forEach(child => {
                                child.style.opacity = '0';
                                setTimeout(() => child.classList.add('is-loaded'), 50);
                            });
                        } else {
                            children.style.display = 'none';
                            this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.5)'; 
                        }
                    } else {
                        // Efek "Bumper" jika diklik tapi tidak punya bawahan
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = 'translateY(-5px)';
                        }, 150);
                    }
                });
            });
        });
    </script>
</body>
</html>