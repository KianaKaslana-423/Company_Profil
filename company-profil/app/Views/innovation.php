<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<div class="position-relative" style="height: 85vh; background: url('<?= base_url('assets/images/Jet.jpg') ?>') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));"></div>
    
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="col-lg-8 mt-5">
            <p class="text-white fw-bold mb-2" style="letter-spacing: 3px; font-size: 0.8rem;">THE POWER OF DREAMS</p>
            <h1 class="display-2 fw-bold text-white fst-italic mb-3" style="letter-spacing: -2px; line-height: 1;">BEYOND THE<br><span class="text-danger">HORIZON.</span></h1>
            
            <div class="d-flex align-items-center gap-4 mt-4">
                <a href="#" class="btn text-white fw-bold px-4 py-2 rounded-0" style="background-color: #D00000; font-size: 0.85rem;">EXPLORE OUR LEGACY</a>
                <span class="text-white-50 fw-bold" style="font-size: 0.8rem; letter-spacing: 1px;">ADVANCING HUMAN MOBILITY</span>
            </div>
        </div>
    </div>

    <div class="position-absolute bottom-0 end-0 mb-5 me-5 d-none d-md-block">
        <div class="bg-white p-3 shadow-lg d-flex gap-4">
            <div>
                <p class="text-muted fw-bold mb-0" style="font-size: 0.6rem; letter-spacing: 1px;">CRUISING SPEED</p>
                <h4 class="text-danger fw-bold mb-0">422 <span class="text-dark fs-6">KTAS</span></h4>
            </div>
            <div class="border-start ps-4">
                <p class="text-muted fw-bold mb-0" style="font-size: 0.6rem; letter-spacing: 1px;">MAX ALTITUDE</p>
                <h4 class="text-danger fw-bold mb-0">43k <span class="text-dark fs-6">FT</span></h4>
            </div>
        </div>
    </div>
</div>

<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 pe-lg-4">
                <p class="text-danger fw-bold mb-2" style="letter-spacing: 2px; font-size: 0.7rem;">PRECISION ENGINEERED</p>
                <h2 class="display-6 fw-bold fst-italic mb-4" style="letter-spacing: -1px; line-height: 1.1;">THE GENESIS OF<br>AUTONOMY.</h2>
                <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7;">From the first steps of E0 in 1986 to the world-renowned ASIMO, Honda R&D has pushed the boundaries of humanoid robotics to assist and inspire humanity.</p>
                <a href="#" class="btn btn-outline-danger fw-bold rounded-0 px-4 py-2" style="font-size: 0.8rem;">VIEW THE TIMELINE</a>
            </div>
            
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img src="<?= base_url('assets/images/Robot.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Avatar Robot">
                            <span class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 fw-bold" style="font-size: 0.7rem; letter-spacing: 1px;">SENSOR FUSION VISION</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/Honda5.jpg') ?>" class="w-100 h-100" style="object-fit: cover; min-height: 200px;" alt="Robotic Joint">
                    </div>
                    <div class="col-md-6">
                        <div class="w-100 h-100 p-4 d-flex flex-column justify-content-end text-white" style="background-color: #D00000; min-height: 200px;">
                            <i class="fa-solid fa-robot fs-2 mb-3"></i>
                            <h5 class="fw-bold mb-0">Predictive Mobility AI</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #1A1A1A;">
    <div class="container my-5">
        <h2 class="display-5 text-white fw-bold fst-italic mb-3" style="letter-spacing: -1px;">SHAPING THE<br>NEXT CENTURY.</h2>
        <p class="text-white-50 mb-5 w-50" style="font-size: 0.95rem; line-height: 1.6;">Our innovation is driven by the philosophy of "The Power of Dreams" — solving tomorrow's challenges through relentless curiosity.</p>
        
        <div class="row g-5 mt-4">
            <div class="col-md-4 border-start border-danger border-2 ps-4">
                <p class="text-danger fw-bold mb-2" style="font-size: 0.7rem;">01</p>
                <h4 class="text-white fw-normal mb-3">Honda eVTOL</h4>
                <p class="text-white-50 small mb-4">Electric Vertical Take-off and Landing aircraft designed for urban air mobility ecosystems.</p>
                <a href="#" class="text-danger text-decoration-none fw-bold" style="font-size: 0.8rem;">VIEW TECH SPECS <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>
            <div class="col-md-4 border-start border-danger border-2 ps-4">
                <p class="text-danger fw-bold mb-2" style="font-size: 0.7rem;">02</p>
                <h4 class="text-white fw-normal mb-3">Avatar Robot</h4>
                <p class="text-white-50 small mb-4">A multi-fingered hand and AI-supported remote control system for delicate tasks from afar.</p>
                <a href="#" class="text-danger text-decoration-none fw-bold" style="font-size: 0.8rem;">LEARN MORE <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>
            <div class="col-md-4 border-start border-danger border-2 ps-4">
                <p class="text-danger fw-bold mb-2" style="font-size: 0.7rem;">03</p>
                <h4 class="text-white fw-normal mb-3">Space Exploration</h4>
                <p class="text-white-50 small mb-4">Circulative Renewable Energy Systems to enable sustained life in lunar environments.</p>
                <a href="#" class="text-danger text-decoration-none fw-bold" style="font-size: 0.8rem;">WHAT WE'RE DOING <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pe-lg-5 mb-5 mb-lg-0">
                <p class="text-danger fw-bold fst-italic text-uppercase mb-0" style="letter-spacing: 5px; font-size: 1.5rem; opacity: 0.2; margin-bottom: -15px !important;">JET</p>
                <h2 class="display-6 fw-bold mb-5" style="letter-spacing: -1px;">THE HONDAJET <span class="fst-italic text-danger">ELITE II.</span></h2>
                
                <div class="d-flex align-items-start mb-4">
                    <i class="fa-solid fa-plane-departure text-danger mt-1 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-1" style="font-size: 0.85rem; letter-spacing: 1px;">OVER-THE-WING ENGINE MOUNT</h6>
                        <p class="text-muted small mb-0">Breakthrough design maximizing cabin space and reducing noise.</p>
                    </div>
                </div>
                
                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-leaf text-danger mt-1 me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-1" style="font-size: 0.85rem; letter-spacing: 1px;">FUEL EFFICIENCY MASTER</h6>
                        <p class="text-muted small mb-0">Unmatched efficiency in the light jet class through aerodynamic perfection.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <img src="<?= base_url('assets/images/Nsx.jpg') ?>" class="img-fluid w-100 shadow-lg" alt="HondaJet Engine" style="height: 350px; object-fit: cover;">
            </div>
        </div>
        
        <div class="text-center mt-5 pt-5 border-top">
            <h3 class="fw-bold mb-3">WANT TO CO-CREATE THE FUTURE?</h3>
            <p class="text-muted mx-auto mb-4" style="max-width: 600px; font-size: 0.9rem;">Join our global network of engineers, designers, and dreamers working on the next generation of human mobility.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="btn text-white fw-bold px-4 py-2 rounded-0" style="background-color: #D00000; font-size: 0.8rem;">CAREER OPPORTUNITIES</a>
                <a href="#" class="btn btn-outline-dark fw-bold px-4 py-2 rounded-0" style="font-size: 0.8rem;">PARTNERSHIP INQUIRY</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>