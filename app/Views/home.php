<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<div class="position-relative" style="height: 85vh; background: url('<?= base_url('assets/images/Nsx.jpg') ?>') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);"></div>
    
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="col-md-7 text-white mt-5">
            <p class="text-uppercase mb-2 fw-bold" style="letter-spacing: 2px; font-size: 0.75rem;">Advancing Human Mobility</p>
            <h1 class="display-2 fw-bold mb-3" style="letter-spacing: -2px; line-height: 1.1;">The Power of<br>Dreams.</h1>
            <p class="lead mb-5" style="font-weight: 300; font-size: 1.1rem; max-width: 80%;">At Honda, we believe in the power of dreams to change the world. From the street to the sky, we innovate to advance humanity.</p>
            
            <a href="/products" class="btn btn-danger rounded-0 px-4 py-3 me-3 fw-bold" style="background-color: #D00000; border: none; font-size: 0.9rem;">Discover More</a>
            <a href="#" class="btn btn-outline-light rounded-0 px-4 py-3 fw-bold" style="font-size: 0.9rem;"><i class="fa-solid fa-play me-2"></i> Watch Video</a>
        </div>
    </div>
</div>

<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-5">
                <h2 class="display-5 fw-bold mb-4" style="letter-spacing: -1px;">Innovation Without<br>Compromise.</h2>
                <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7;">Our journey toward zero environmental impact is fueled by hydrogen fuel cell technology and the next generation of electric mobility. We aren't just building cars; we're designing sustainable ecosystems.</p>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-light p-3 rounded-circle me-3 text-danger"><i class="fa-solid fa-leaf"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Zero Emissions Target</h6>
                        <p class="text-muted small mb-0">Driving our operations toward carbon neutrality by 2050.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="bg-light p-3 rounded-circle me-3 text-primary"><i class="fa-solid fa-bolt"></i></div>
                    <div>
                        <h6 class="fw-bold mb-1">Solid-State Batteries</h6>
                        <p class="text-muted small mb-0">Revolutionizing EV range and charging times.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7">
                <div class="row g-3">
                    <div class="col-7">
                        <img src="<?= base_url('assets/images/Honda1.jpg') ?>" class="img-fluid rounded-4 shadow" alt="EV Charging" style="height: 400px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="col-5">
                        <img src="<?= base_url('assets/images/Honda2.jpg') ?>" class="img-fluid rounded-4 shadow mb-3" alt="EV Plug" style="height: 190px; object-fit: cover; width: 100%;">
                        <div class="p-4 rounded-4 bg-light" style="height: 195px;">
                            <h6 class="fw-bold text-danger">Next-Gen Mobility</h6>
                            <p class="small text-muted mb-0">The future of movement is electric, intelligent, and deeply connected.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <h2 class="display-5 fw-bold" style="letter-spacing: -1px;">Engineered for Every Path.</h2>
            <a href="/products" class="text-dark fw-bold text-decoration-none border-bottom border-dark pb-1" style="font-size: 0.85rem;">View Full Fleet <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
        
        <div class="row g-3">
            <div class="col-md-7">
                <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                    <img src="<?= base_url('assets/images/Honda3.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Automobiles">
                    <div class="position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                        <h3 class="text-white fw-bold mb-1">Automobiles</h3>
                        <p class="text-white-50 small mb-3">Precision engineering meets everyday utility.</p>
                        <div><a href="#" class="btn btn-light btn-sm fw-bold px-3 py-2 rounded-0">Explore Cars</a></div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                    <img src="<?= base_url('assets/images/Honda4.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Motorcycles">
                    <div class="position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-end" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                        <h3 class="text-white fw-bold mb-1">Motorcycles</h3>
                        <p class="text-white-50 small mb-3">The purest form of riding freedom.</p>
                        <div><a href="#" class="btn btn-light btn-sm fw-bold px-3 py-2 rounded-0">Explore Bikes</a></div>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 200px;">
                    <img src="<?= base_url('assets/images/Honda5.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Power Products">
                    <div class="position-absolute top-0 start-0 w-100 h-100 p-4 d-flex flex-column justify-content-center" style="background: linear-gradient(to right, rgba(0,0,0,0.8), transparent);">
                        <h3 class="text-white fw-bold mb-1">Power Products</h3>
                        <p class="text-white-50 small mb-0 w-50">Reliable power solutions for homes, businesses, and industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pe-md-5">
                <img src="<?= base_url('assets/images/Honda6.jpg') ?>" class="img-fluid rounded-4 shadow-lg mb-4" alt="Honda Legacy">
                <div class="d-flex gap-4">
                    <div>
                        <h6 class="fw-bold mb-0">Founding</h6>
                        <p class="small text-muted">Soichiro Honda established the company in Hamamatsu.</p>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Innovation</h6>
                        <p class="small text-muted">The creation of the revolutionary CVCC engine.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-md-5 mt-5 mt-md-0">
                <p class="text-danger fw-bold small text-uppercase tracking-wide mb-2">Our Heritage</p>
                <h2 class="display-5 fw-bold mb-4" style="letter-spacing: -1px;">The Precision of<br>Human Spirit.</h2>
                <p class="text-muted mb-5" style="line-height: 1.7;">Born from a dream of making high-quality mobility accessible to everyone, Honda has spent over seven decades perfecting the art of mechanical engineering. Our foundation is built on "Success is 99% failure" and we continue to drive our relentless pursuit of perfection.</p>
                
                <div class="row text-center">
                    <div class="col-6 border-end">
                        <h1 class="display-4 fw-bold text-dark mb-0">70+</h1>
                        <p class="small text-muted text-uppercase tracking-wide">Years of Engineering Excellence</p>
                    </div>
                    <div class="col-6">
                        <h1 class="display-4 fw-bold text-dark mb-0">100M+</h1>
                        <p class="small text-muted text-uppercase tracking-wide">Power Products Worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container my-5 text-center">
        <h3 class="fw-bold mb-3">A Global Presence</h3>
        <p class="text-muted mb-5 mx-auto" style="max-width: 600px;">Our network spans across the globe, bringing joy and mobility to communities in every corner of the world.</p>
        
        <div class="bg-white rounded-4 shadow-sm p-5 position-relative" style="background: url('<?= base_url('assets/images/Honda7.jpg') ?>') center/contain no-repeat white;">
            <div class="row justify-content-center pt-4">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="bg-white p-4 rounded-3 shadow-sm border">
                        <h2 class="fw-bold text-danger mb-0">454</h2>
                        <p class="small text-muted fw-bold mb-0">PRODUCTION FACILITIES</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="bg-white p-4 rounded-3 shadow-sm border">
                        <h2 class="fw-bold text-dark mb-0">200K+</h2>
                        <p class="small text-muted fw-bold mb-0">HUMAN ASSOCIATES</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white p-4 rounded-3 shadow-sm border">
                        <h2 class="fw-bold text-dark mb-0">150+</h2>
                        <p class="small text-muted fw-bold mb-0">MARKETS SERVED</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>