<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<style>
    :root {
        --honda-red: #cc0000;
        --honda-dark: #1a1a1a;
        --honda-grey: #f4f4f4;
    }

    /* Hero Section Styling */
    .help-hero {
    background: linear-gradient(135deg, rgba(204, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.9) 100%), 
                url('<?= base_url("assets/images/honda2.jpg") ?>');
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Opsional: untuk efek parallax */
    padding: 100px 0 120px;
    color: white;
    border-radius: 0 0 50px 50px;
    position: relative;
    }

    /* Card Styling */
    .help-card {
        border: none;
        border-radius: 24px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: white;
    }

    .help-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
    }

    /* Accordion Styling */
    .accordion-item {
        border: 1px solid #eee !important;
        margin-bottom: 15px;
        border-radius: 16px !important;
        overflow: hidden;
    }

    .accordion-button {
        font-weight: 600;
        padding: 20px;
    }

    .accordion-button:not(.collapsed) {
        background-color: #fff1f1;
        color: var(--honda-red);
        box-shadow: none;
    }

    /* Contact Button Premium */
    .btn-contact {
        padding: 15px;
        border-radius: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s;
        border: none;
        text-decoration: none;
    }

    .btn-whatsapp {
        background: #25d366;
        color: white;
    }

    .btn-whatsapp:hover {
        background: #1eb956;
        color: white;
        box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
    }

    .btn-gmail {
        background: var(--honda-dark);
        color: white;
    }

    .btn-gmail:hover {
        background: #000;
        color: white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .text-honda { color: var(--honda-red); }
    .bg-light-honda { background-color: var(--honda-grey); }
    
</style>

<section class="help-hero">
    <div class="container text-center">
        <h1 class="fw-bold display-4 mb-3">Pusat Bantuan <span class="text-honda">Honda</span></h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 600px;">
            Kami siap membantu memberikan solusi terbaik untuk kenyamanan berkendara Anda.
        </p>
    </div>
</section>

<div class="container pb-5">
    <div class="row g-4 justify-content-center">
        
        <div class="col-lg-7">
            <div class="card help-card shadow-sm p-4 p-md-5">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-honda p-3 rounded-4 me-3" style="background: var(--honda-red);">
                        <i class="fa-solid fa-lightbulb text-white fs-4"></i>
                    </div>
                    <h3 class="fw-bold m-0">FAQ <span class="text-muted fs-6 d-block fw-normal">Jawaban Cepat & Tepat</span></h3>
                </div>
                
                <div class="accordion accordion-flush" id="hondaFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                <i class="fa-solid fa-calendar-check me-3 text-honda"></i> Bagaimana cara booking service?
                            </button>
                        </h2>
                        <div id="q1" class="accordion-collapse collapse" data-bs-parent="#hondaFAQ">
                            <div class="accordion-body text-muted">
                                Anda dapat melakukan booking melalui menu <strong>Service</strong> atau aplikasi Honda e-Care untuk kepastian waktu pengerjaan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                <i class="fa-solid fa-gears me-3 text-honda"></i> Suku cadang asli beli di mana?
                            </button>
                        </h2>
                        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#hondaFAQ">
                            <div class="accordion-body text-muted">
                                Suku cadang asli tersedia di seluruh dealer resmi Honda (Honda Genuine Parts) untuk menjamin keamanan Anda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3">
                                <i class="fa-solid fa-shield-halved me-3 text-honda"></i> Bagaimana cara klaim garansi?
                            </button>
                        </h2>
                        <div id="q3" class="accordion-collapse collapse" data-bs-parent="#hondaFAQ">
                            <div class="accordion-body text-muted">
                                Silakan bawa buku servis dan STNK kendaraan Anda ke bengkel resmi Honda terdekat untuk verifikasi data.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card help-card shadow-sm p-4 h-100">
                <h4 class="fw-bold mb-4">Customer Care</h4>
                <p class="text-muted small mb-4">Butuh bantuan langsung? Hubungi tim kami yang berdedikasi tinggi.</p>
                
                <div class="mb-3">
                    <a href="https://wa.me/628123456789" target="_blank" class="btn-contact btn-whatsapp">
                        <i class="fa-brands fa-whatsapp fs-4"></i>
                        Live Chat WhatsApp
                    </a>
                </div>

                <div class="mb-4">
                    <a href="mailto:contact@honda-indonesia.com" class="btn-contact btn-gmail">
                        <i class="fa-solid fa-envelope fs-4"></i>
                        Kirim Email Gmail
                    </a>
                </div>

                <div class="p-4 rounded-4 bg-light-honda text-center mt-auto border border-white">
                    <p class="small text-muted mb-1 fw-bold">Hotline 24 Jam</p>
                    <h4 class="fw-bold text-honda mb-0">0-800-14-46632</h4>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>