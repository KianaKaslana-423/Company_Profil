<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<section class="position-relative overflow-hidden" style="height: 80vh;">
    <img src="<?= base_url('assets/images/Honda6.jpg') ?>" class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; z-index: 1;" alt="Green Field">
    
    <div class="container position-relative h-100 d-flex align-items-center" style="z-index: 2;">
        <div class="col-lg-6">
            <p class="text-dark fw-bold text-uppercase mb-2" style="letter-spacing: 2px; font-size: 0.75rem;">THE GLOBAL VISION</p>
            <h1 class="display-3 fw-bold mb-4" style="letter-spacing: -2px; line-height: 1;">Blue Skies for<br><span class="text-danger fst-italic">Our Children</span></h1>
            <p class="text-muted mb-5" style="line-height: 1.7; font-size: 1.05rem; max-width: 90%;">Honda is dedicated to the realization of a society where everyone can enjoy the freedom of mobility and a sustainable lifestyle in a carbon-neutral world.</p>
            
            <div class="d-flex gap-3">
                <a href="#" class="btn text-white fw-bold px-4 py-3 rounded-0 shadow" style="background-color: #D00000; font-size: 0.85rem;">EXPLORE OUR ROADMAP</a>
                <a href="#" class="btn btn-link text-dark fw-bold text-decoration-none px-0" style="font-size: 0.85rem;">WATCH THE STORY <i class="fa-regular fa-circle-play ms-2 text-danger"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container my-5">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 450px;">
                    <img src="<?= base_url('assets/images/Honda7.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Hydrogen Tech">
                    <div class="position-absolute bottom-0 start-0 p-5 w-100" style="background: linear-gradient(to top, rgba(255,255,255,0.9) 20%, transparent 100%);">
                        <h3 class="fw-bold mb-3">Hydrogen Evolution</h3>
                        <p class="text-muted mb-4 w-75">Our fuel cell technology transforms hydrogen into clean energy, leaving only pure water as exhaust. The future of heavy-duty transport and power generation starts here.</p>
                        <a href="#" class="text-danger fw-bold text-decoration-none border-bottom border-danger pb-1" style="font-size: 0.8rem;">THE HYDROGEN ROADMAP <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-danger p-5 h-100 rounded-4 text-white d-flex flex-column justify-content-center position-relative overflow-hidden" style="background-color: #D00000 !important;">
                    <p class="fw-bold mb-2" style="letter-spacing: 2px; font-size: 0.7rem; opacity: 0.8;">TARGET ACHIEVEMENT</p>
                    <h1 class="display-1 fw-bold mb-4">2050</h1>
                    <p class="mb-5" style="line-height: 1.6; font-size: 0.95rem;">Carbon neutrality for all products and corporate activities by the year 2050.</p>
                    <div class="w-100 bg-white" style="height: 2px; opacity: 0.3;">
                        <div class="bg-white h-100" style="width: 75%;"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-light rounded-4 overflow-hidden border shadow-sm d-flex flex-column flex-md-row" style="min-height: 200px;">
                    <div class="p-4 flex-grow-1">
                        <h5 class="fw-bold mb-3">Next Gen EVs</h5>
                        <p class="text-muted small mb-4">Introducing the Honda 0 Series. A thin, light, and wise approach to electric mobility.</p>
                        <a href="#" class="btn btn-dark btn-sm rounded-0 px-3">DISCOVER 0 SERIES</a>
                    </div>
                    <img src="<?= base_url('assets/images/Honda3.jpg') ?>" style="width: 180px; object-fit: cover;" alt="EV Charger">
                </div>
            </div>

            <div class="col-md-6">
                <div class="rounded-4 overflow-hidden border shadow-sm d-flex flex-column flex-md-row" style="min-height: 200px; background-color: #007BFF;">
                    <div class="p-4 flex-grow-1 text-white">
                        <div class="mb-3"><i class="fa-solid fa-recycle fs-4"></i></div>
                        <h5 class="fw-bold mb-3">Resource Circularity</h5>
                        <p class="text-white-50 small mb-0">Developing a closed-loop system where materials are reused indefinitely, minimizing waste from factory to road.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container my-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 position-relative">
                <img src="<?= base_url('assets/images/Honda5.jpg') ?>" class="img-fluid rounded-4 shadow-lg" alt="EV Chassis">
                <div class="position-absolute top-0 end-0 m-4 bg-white p-3 shadow rounded-3 border" style="width: 180px; opacity: 0.9;">
                    <p class="text-muted fw-bold mb-1" style="font-size: 0.6rem; letter-spacing: 1px;">ENERGY OUTPUT</p>
                    <h6 class="fw-bold mb-0">Zero Emission</h6>
                    <hr class="my-2">
                    <p class="text-muted fw-bold mb-1" style="font-size: 0.6rem; letter-spacing: 1px;">MATERIAL ORIGIN</p>
                    <h6 class="fw-bold mb-0">98% Recyclable</h6>
                </div>
            </div>

            <div class="col-lg-7 ps-lg-5">
                <h2 class="display-6 fw-bold mb-4" style="letter-spacing: -1px;">Engineering for the<br><span class="text-danger fst-italic">Environment.</span></h2>
                <p class="text-muted mb-5" style="line-height: 1.8;">Innovation at Honda isn't just about speed—it's about the precision of impact. From the weight of the chassis to the chemistry of the batteries, every component is scrutinized for its environmental footprint.</p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-regular fa-circle-check text-danger mt-1 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Solid-State Batteries</h6>
                                <p class="text-muted small mb-0">Next-generation storage with higher density and faster charging cycles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <i class="fa-regular fa-circle-check text-danger mt-1 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-1">e-Axle Technology</h6>
                                <p class="text-muted small mb-0">Integrated motor, inverter, and gearbox for maximum efficiency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="bg-white p-5 rounded-4 border shadow-sm text-center position-relative overflow-hidden">
            <div class="position-absolute top-0 end-0 bg-light rounded-circle" style="width: 300px; height: 300px; margin-right: -150px; margin-top: -150px; opacity: 0.5;"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h3 class="fw-bold mb-3">Stay informed on our progress.</h3>
                <p class="text-muted mb-5 mx-auto" style="max-width: 500px;">Receive quarterly updates on our carbon neutrality milestones and new sustainable mobility releases.</p>
                
                <form class="row g-2 justify-content-center">
                    <div class="col-md-5">
                        <input type="email" class="form-control py-3 bg-light border-0" placeholder="Enter your email" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn text-white fw-bold w-100 py-3 rounded-0" style="background-color: #D00000;">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>