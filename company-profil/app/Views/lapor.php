<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<style>
    :root {
        --honda-red: #cc0000;
        --honda-dark: #1a1a1a;
    }

    /* Hero & Background */
    .report-hero {
        background: linear-gradient(135deg, rgba(204, 0, 0, 0.85) 0%, rgba(26, 26, 26, 0.9) 100%), 
                    url('<?= base_url("assets/images/honda2.jpg") ?>');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 100px 0 150px;
        color: white;
        border-radius: 0 0 50px 50px;
        margin-bottom: -100px;
    }

    /* Card Glassmorphism */
    .report-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 30px;
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        overflow: hidden;
    }

    .report-header {
        background: var(--honda-dark);
        color: white;
        padding: 30px;
        text-align: center;
        border-bottom: 5px solid var(--honda-red);
    }

    /* Form Styling */
    .form-control, .form-select {
        border: 2px solid #eee;
        padding: 12px 20px;
        border-radius: 15px;
        transition: all 0.3s;
        background-color: #f8f9fa;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--honda-red);
        box-shadow: 0 0 0 0.25 margin-bottom rgba(204, 0, 0, 0.1);
        background-color: white;
    }

    .label-modern {
        font-weight: 700;
        color: var(--honda-dark);
        margin-bottom: 8px;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* File Upload Custom */
    .file-upload-wrapper {
        border: 2px dashed #ccc;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s;
        cursor: pointer;
        background: #fff;
    }

    .file-upload-wrapper:hover {
        border-color: var(--honda-red);
        background: #fff1f1;
    }

    /* Button Honda */
    .btn-honda {
        background: var(--honda-red);
        color: white;
        border-radius: 50px;
        padding: 15px 30px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        transition: all 0.3s;
    }

    .btn-honda:hover {
        background: #a80000;
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(204, 0, 0, 0.3);
        color: white;
    }

    .icon-box {
        width: 50px;
        height: 50px;
        background: rgba(204, 0, 0, 0.1);
        color: var(--honda-red);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }
</style>

<section class="report-hero">
    <div class="container text-center">
        <h1 class="fw-bold display-5">Technical Support</h1>
        <p class="opacity-75">Laporkan kendala teknis Anda, tim ahli kami akan segera menanganinya.</p>
    </div>
</section>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card report-card border-0">
                <div class="report-header">
                    <h3 class="fw-bold m-0 text-white">Formulir Laporan Kendala</h3>
                    <p class="small opacity-75 mb-0">Informasi detail membantu kami bekerja lebih cepat</p>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <form action="<?= base_url('profile/proses-lapor') ?>" method="POST" enctype="multipart/form-data">
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="label-modern"><i class="fa-solid fa-tag me-2"></i> Kategori Masalah</label>
                                <select name="jenis_kendala" class="form-select" required>
                                    <option value="" selected disabled>Pilih kategori...</option>
                                    <option value="Sistem">Error Sistem / Bug</option>
                                    <option value="Akun">Masalah Login & Akun</option>
                                    <option value="Data">Kesalahan Data Kendaraan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="label-modern"><i class="fa-solid fa-triangle-exclamation me-2"></i> Tingkat Urgensi</label>
                                <select name="prioritas" class="form-select" required>
                                    <option value="Normal">Normal (Biasa)</option>
                                    <option value="Penting">Penting (Mengganggu Aktivitas)</option>
                                    <option value="Mendesak">Mendesak (Sistem Tidak Jalan)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="label-modern"><i class="fa-solid fa-pen-nib me-2"></i> Deskripsi Masalah</label>
                                <textarea name="deskripsi" class="form-control" rows="5" placeholder="Jelaskan secara detail langkah-langkah terjadinya error..." required></textarea>
                            </div>

                            <div class="col-12">
                                <label class="label-modern"><i class="fa-solid fa-image me-2"></i> Screenshot / Bukti (Opsional)</label>
                                <div class="file-upload-wrapper" onclick="document.getElementById('foto_bukti').click();">
                                    <i class="fa-solid fa-cloud-arrow-up fs-1 text-muted mb-2"></i>
                                    <h6 class="fw-bold mb-1">Klik untuk unggah gambar</h6>
                                    <p class="small text-muted mb-0">Format JPG atau PNG (Maksimal 2MB)</p>
                                    <input type="file" name="foto_bukti" id="foto_bukti" class="d-none" accept="image/*">
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-honda w-100 shadow-sm">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Kirim Laporan Sekarang
                                </button>
                            </div>
                        </div>

                    </form>

                    <div class="text-center mt-4">
                        <a href="<?= base_url('bantuan') ?>" class="text-decoration-none small fw-bold text-muted">
                            <i class="fa-solid fa-chevron-left me-1"></i> Kembali ke Pusat Bantuan
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-4 p-4 rounded-4 bg-white shadow-sm border-start border-4 border-danger">
                <div class="d-flex">
                    <i class="fa-solid fa-shield-halved text-danger fs-4 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Keamanan Data Anda Terjamin</h6>
                        <p class="small text-muted mb-0">Laporan ini akan langsung masuk ke sistem internal Honda Support. Data Anda tidak akan dibagikan kepada pihak ketiga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>