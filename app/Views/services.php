<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<section class="bg-white position-relative overflow-hidden" style="min-height: 60vh;">
    <div class="container position-relative h-100">
        <div class="row align-items-center h-100" style="min-height: 60vh;">
            <div class="col-lg-6 py-5 z-2">
                <p class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px; font-size: 0.75rem;">Engineered for Reliability</p>
                <h1 class="display-3 fw-bold fst-italic mb-4" style="letter-spacing: -2px; line-height: 1;">HONDA <span class="text-danger">CARE.</span></h1>
                <p class="text-muted mb-4" style="line-height: 1.7; max-width: 85%; font-size: 1.05rem;">Precision maintenance and comprehensive protection plans designed to keep your Honda performing at its peak for years to come.</p>
                
                <div class="d-flex gap-3">
                    <a href="#" class="btn text-white fw-bold px-4 py-3 rounded-0 shadow-sm" style="background-color: #D00000; font-size: 0.85rem;">EXPLORE PLANS</a>
                    <a href="#" class="btn btn-light bg-light border fw-bold px-4 py-3 rounded-0 shadow-sm" style="font-size: 0.85rem;">SCHEDULE SERVICE</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="position-absolute top-0 end-0 h-100 w-50 d-none d-lg-block z-1">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, #FFFFFF 0%, rgba(255,255,255,0) 100%); z-index: 2;"></div>
        <img src="<?= base_url('assets/images/Nsx.jpg') ?>" class="w-100 h-100" style="object-fit: cover; object-position: right; opacity: 0.5;" alt="Service Bay">
    </div>
</section>

<section class="container position-relative z-3" style="margin-top: -30px; margin-bottom: 40px;">
    <div class="row g-3">
        <div class="col-6 col-md-3">
            <div class="bg-white p-4 text-center rounded-3 shadow-sm border h-100 transition-hover">
                <i class="fa-solid fa-user-gear text-danger fs-3 mb-3"></i>
                <h6 class="fw-bold mb-0 text-muted" style="font-size: 0.75rem; letter-spacing: 1px;">MAINTENANCE</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white p-4 text-center rounded-3 shadow-sm border h-100 transition-hover">
                <i class="fa-solid fa-shield-halved text-danger fs-3 mb-3"></i>
                <h6 class="fw-bold mb-0 text-muted" style="font-size: 0.75rem; letter-spacing: 1px;">HONDA CARE</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white p-4 text-center rounded-3 shadow-sm border h-100 transition-hover">
                <i class="fa-solid fa-money-bill-transfer text-danger fs-3 mb-3"></i>
                <h6 class="fw-bold mb-0 text-muted" style="font-size: 0.75rem; letter-spacing: 1px;">FINANCIAL</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="bg-white p-4 text-center rounded-3 shadow-sm border h-100 transition-hover">
                <i class="fa-solid fa-truck-fast text-danger fs-3 mb-3"></i>
                <h6 class="fw-bold mb-0 text-muted" style="font-size: 0.75rem; letter-spacing: 1px;">ROADSIDE</h6>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        
        <div class="row g-4 mb-4">
            <div class="col-lg-7 d-flex flex-column gap-4">
                
                <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 380px;">
                    <img src="<?= base_url('assets/images/Honda2.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Smart Maintenance">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 p-md-5" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);">
                        <h3 class="text-white fw-bold fst-italic mb-2">SMART MAINTENANCE</h3>
                        <p class="text-white-50 small mb-4 w-100 w-md-75" style="line-height: 1.6;">Real-time diagnostics and scheduled care tailored to your specific driving habits. Keep the heart of your Honda beating perfectly.</p>
                        <a href="#" class="text-white fw-bold text-decoration-none border-bottom pb-1" style="font-size: 0.8rem; letter-spacing: 1px;">LEARN MORE</a>
                    </div>
                </div>

                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                    <h5 class="fw-bold mb-2">Financial Services</h5>
                    <p class="text-muted small mb-4">Flexible leasing and financing options tailored to your lifestyle and budget.</p>
                    <div class="list-group list-group-flush border-top">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-3 text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 1px;">
                            PAYMENT CALCULATOR <i class="fa-solid fa-chevron-right text-danger"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-0 py-3 text-muted fw-bold border-bottom" style="font-size: 0.75rem; letter-spacing: 1px;">
                            APPLY FOR CREDIT <i class="fa-solid fa-chevron-right text-danger"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-lg-5 d-flex flex-column gap-4">
                
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm" style="border-top: 5px solid #D00000;">
                    <div class="bg-light d-inline-block p-3 rounded-3 mb-4">
                        <i class="fa-solid fa-shield-halved text-danger fs-4"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Honda Care®</h4>
                    <p class="text-muted small mb-4" style="line-height: 1.6;">Vehicle Service Contracts that go beyond the factory warranty for total peace of mind.</p>
                    
                    <ul class="list-unstyled mb-5">
                        <li class="mb-3 text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="fa-regular fa-circle-check text-danger me-2 fs-6 align-middle"></i> COMPONENT COVERAGE
                        </li>
                        <li class="mb-3 text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="fa-regular fa-circle-check text-danger me-2 fs-6 align-middle"></i> RENTAL CAR REIMBURSEMENT
                        </li>
                        <li class="mb-3 text-muted fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            <i class="fa-regular fa-circle-check text-danger me-2 fs-6 align-middle"></i> TRANSFERABLE PLANS
                        </li>
                    </ul>
                    
                    <a href="#" class="btn w-100 text-white fw-bold py-3 rounded-0 shadow-sm" style="background-color: #D00000; font-size: 0.85rem;">GET A QUOTE</a>
                </div>

                <div class="position-relative rounded-4 overflow-hidden shadow-sm flex-grow-1" style="min-height: 250px;">
                    <img src="<?= base_url('assets/images/Honda7.jpg') ?>" class="w-100 h-100" style="object-fit: cover;" alt="Roadside Assistance">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);"></div>
                    
                    <div class="position-absolute top-50 start-50 translate-middle w-100 px-4 text-center z-2">
                        <h4 class="text-white fw-bold fst-italic mb-3" style="letter-spacing: -1px;">ALWAYS BY YOUR SIDE</h4>
                        <p class="text-white-50 small mb-4 mx-auto" style="max-width: 90%;">24/7 Roadside Assistance available across the country. Towing, flat tire changes, and lockout services just a call away.</p>
                        <a href="#" class="btn btn-light fw-bold px-4 py-2 rounded-pill shadow" style="font-size: 0.85rem;">
                            <i class="fa-solid fa-phone me-2 text-danger"></i> 1-800-426-8239
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row g-4 mt-2 mb-5">
            <div class="col-lg-5">
                <div class="position-relative h-100 min-vh-50">
                    <img src="<?= base_url('assets/images/Honda5.jpg') ?>" class="w-100 h-100 rounded-4 shadow-sm" style="object-fit: cover; min-height: 350px;" alt="Digital Dashboard">
                    
                    <div class="position-absolute bottom-0 end-0 bg-white p-4 shadow-lg rounded-3 m-3 m-md-4" style="width: 260px; z-index: 2;">
                        <p class="text-danger fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">TECH INNOVATION</p>
                        <h6 class="fw-bold mb-2">HondaLink®</h6>
                        <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.5;">Connect to your vehicle via smartphone for remote start, security alerts, and health reports.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7 d-flex flex-column justify-content-center px-lg-5 py-4 py-lg-0">
                <h2 class="display-6 fw-bold fst-italic mb-5" style="letter-spacing: -1px;">PRECISION<br>IN EVERY <span class="text-danger">DETAIL.</span></h2>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-white p-3 rounded-3 shadow-sm me-4 text-danger border"><i class="fa-solid fa-clock-rotate-left fs-5"></i></div>
                    <div>
                        <h6 class="fw-bold mb-2">Service History</h6>
                        <p class="text-muted small mb-0 w-75" style="line-height: 1.6;">Keep a digital log of every oil change, tire rotation, and inspection ever performed.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-white p-3 rounded-3 shadow-sm me-4 text-danger border"><i class="fa-solid fa-triangle-exclamation fs-5"></i></div>
                    <div>
                        <h6 class="fw-bold mb-2">Recall Alerts</h6>
                        <p class="text-muted small mb-0 w-75" style="line-height: 1.6;">Stay informed with instant notifications regarding safety recalls or product updates.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="bg-white p-3 rounded-3 shadow-sm me-4 text-danger border"><i class="fa-regular fa-calendar-check fs-5"></i></div>
                    <div>
                        <h6 class="fw-bold mb-2">Online Booking</h6>
                        <p class="text-muted small mb-0 w-75" style="line-height: 1.6;">Seamlessly book your next appointment with your preferred dealer in seconds.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>