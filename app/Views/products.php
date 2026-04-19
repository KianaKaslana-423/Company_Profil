<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<section class="py-5 mt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pe-lg-5 mb-5 mb-lg-0">
                <p class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px; font-size: 0.75rem;">Engineered for Emotion</p>
                <h1 class="display-3 fw-bold fst-italic mb-4" style="letter-spacing: -2px; line-height: 1;">THE NEXT<br><span class="text-danger">VELOCITY.</span></h1>
                <p class="text-muted mb-4" style="line-height: 1.7; font-size: 0.95rem;">Experience the synergy of high-performance engineering and sustainable innovation across our latest fleet of automobiles and motorcycles.</p>
                
                <div class="d-flex gap-3">
                    <a href="#" class="btn text-white fw-bold px-4 py-2 rounded-0" style="background-color: #D00000; font-size: 0.85rem;">Explore Models <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    <a href="#" class="btn btn-light border fw-bold px-4 py-2 rounded-0" style="font-size: 0.85rem;">Book Test Drive</a>
                </div>
            </div>
            
            <div class="col-lg-7 position-relative">
                <img src="<?= base_url('assets/images/Nsx.jpg') ?>" class="img-fluid rounded-4 shadow" alt="Honda NSX" style="width: 100%; object-fit: cover; height: 400px;">
                
                <div class="position-absolute bottom-0 start-0 bg-white p-3 shadow-lg ms-4 mb-4 rounded-3 d-flex gap-4" style="z-index: 2;">
                    <div>
                        <p class="text-muted fw-bold mb-0" style="font-size: 0.65rem; letter-spacing: 1px;">MAX OUTPUT</p>
                        <h4 class="text-danger fw-bold mb-0">600 HP</h4>
                    </div>
                    <div class="border-start ps-4">
                        <p class="text-muted fw-bold mb-0" style="font-size: 0.65rem; letter-spacing: 1px;">0-60 MPH</p>
                        <h4 class="text-danger fw-bold mb-0">2.9s</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-5">
            <h2 class="fw-bold mb-3 mb-md-0" style="letter-spacing: -1px;">Our Fleet</h2>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn text-white fw-bold px-3 py-1 rounded-pill" style="background-color: #D00000; font-size: 0.75rem;">All Products</button>
                <button class="btn btn-light text-muted fw-bold px-3 py-1 rounded-pill border" style="font-size: 0.75rem;">Automobiles</button>
                <button class="btn btn-light text-muted fw-bold px-3 py-1 rounded-pill border" style="font-size: 0.75rem;">Motorcycles</button>
                <button class="btn btn-light text-muted fw-bold px-3 py-1 rounded-pill border" style="font-size: 0.75rem;">Power Products</button>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-6">
                <div class="bg-light rounded-4 p-4 h-100 position-relative overflow-hidden d-flex flex-column justify-content-between border" style="min-height: 450px;">
                    <div style="z-index: 2;">
                        <p class="text-danger fw-bold text-uppercase mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">FLAGSHIP SUV</p>
                        <h2 class="fw-bold fst-italic mb-3">PILOT ELITE</h2>
                        <p class="text-muted small w-75">The ultimate family adventure vehicle with intelligent all-wheel drive and premium leather interior.</p>
                        <a href="#" class="btn btn-dark rounded-0 px-4 py-2 mt-2 fw-bold" style="font-size: 0.75rem;">View Details <i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
                    </div>
                    <img src="<?= base_url('assets/images/RAAFI.jpg') ?>" class="position-absolute bottom-0 end-0" style="width: 85%; object-fit: contain;" alt="Pilot Elite">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-light rounded-4 p-4 h-100 d-flex flex-column border">
                    <p class="text-danger fw-bold text-uppercase mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">TWO WHEELS</p>
                    <h2 class="fw-bold fst-italic mb-3">CBR1000RR-R</h2>
                    <div class="d-flex gap-2 mb-3">
                        <span class="badge bg-white text-dark border px-2 py-1">TRACK READY</span>
                        <span class="badge bg-white text-dark border px-2 py-1">AERODYNAMIC</span>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center justify-content-center py-4">
                        <img src="<?= base_url('assets/images/Honda7.jpg') ?>" class="img-fluid" alt="CBR1000RR-R" style="max-height: 220px;">
                    </div>
                    <button class="btn btn-outline-dark rounded-0 w-100 fw-bold py-2 mt-auto" style="font-size: 0.8rem;">Configure Bike</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded-4 p-4 h-100 border">
                    <img src="<?= base_url('assets/images/Honda2.jpg') ?>" class="img-fluid mb-4 w-100 rounded shadow-sm" alt="Civic Type R" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold fst-italic mb-3">CIVIC TYPE R</h5>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">DRIVETRAIN</p>
                            <p class="fw-bold small mb-0">FWD + LSD</p>
                        </div>
                        <div class="col-6 border-start">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">TRANSMISSION</p>
                            <p class="fw-bold small mb-0">6-Speed MT</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded-4 p-4 h-100 border">
                    <img src="<?= base_url('assets/images/Honda3.jpg') ?>" class="img-fluid mb-4 w-100 rounded shadow-sm" alt="Accord Hybrid" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold fst-italic mb-3">ACCORD HYBRID</h5>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">FUEL EFFICIENCY</p>
                            <p class="fw-bold small mb-0">48 Combined MPG</p>
                        </div>
                        <div class="col-6 border-start">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">TECH</p>
                            <p class="fw-bold small mb-0">Google Built-in</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded-4 p-4 h-100 border">
                    <img src="<?= base_url('assets/images/Honda4.jpg') ?>" class="img-fluid mb-4 w-100 rounded shadow-sm" alt="EU2200i Inverter" style="height: 180px; object-fit: cover;">
                    <h5 class="fw-bold fst-italic mb-3">EU2200i INVERTER</h5>
                    <div class="row">
                        <div class="col-6">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">RUN TIME</p>
                            <p class="fw-bold small mb-0">Up to 8.1 hrs</p>
                        </div>
                        <div class="col-6 border-start">
                            <p class="text-muted mb-0" style="font-size: 0.6rem; font-weight: 700; letter-spacing: 1px;">WEIGHT</p>
                            <p class="fw-bold small mb-0">47.4 lbs</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 mb-5">
    <div class="container">
        <div class="position-relative rounded-4 overflow-hidden d-flex flex-column justify-content-center align-items-center text-center p-5 shadow-lg" style="height: 350px; background: url('<?= base_url('assets/images/Honda5.jpg') ?>') center/cover no-repeat;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6);"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h1 class="display-4 fw-bold text-white fst-italic mb-3" style="letter-spacing: -1px;">POWERING THE DREAMS<br>OF TOMORROW.</h1>
                <p class="text-white-50 mx-auto mb-4" style="max-width: 600px; font-size: 0.95rem;">Our commitment to zero environmental impact by 2050 drives every line of code and every mechanical stroke.</p>
                <a href="/sustainability" class="btn fw-bold text-white px-5 py-3 rounded-0 shadow" style="background-color: #D00000; font-size: 0.9rem;">Explore Our Vision</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>