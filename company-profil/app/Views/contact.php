<?= $this->extend('layout/frontend') ?>

<?= $this->section('content') ?>

<div class="position-relative" style="height: 45vh; background: url('<?= base_url('assets/images/Honda5.jpg') ?>') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.4) 100%);"></div>
    
    <div class="container position-relative h-100 d-flex align-items-center">
        <div class="col-md-6 pt-5">
            <p class="text-danger fw-bold mb-2" style="letter-spacing: 2px; font-size: 0.8rem;">CONTACT US</p>
            <h1 class="display-4 fw-bold text-dark" style="letter-spacing: -1.5px; line-height: 1;">HOW CAN WE<br><span class="text-danger fst-italic">ASSIST YOU?</span></h1>
        </div>
    </div>
</div>

<section class="py-5" style="margin-top: -60px; z-index: 10; position: relative;">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4">
                <div class="bg-white p-4 mb-4 shadow-sm" style="border-left: 4px solid #D00000;">
                    <i class="fa-solid fa-headset text-danger mb-3 fs-3"></i>
                    <h5 class="fw-bold">Customer Service</h5>
                    <p class="text-muted small mb-4">Dedicated assistance for vehicle owners, maintenance inquiries, and warranty details.</p>
                    <h3 class="fw-normal mb-1">1-800-999-1009</h3>
                    <p class="text-muted fw-bold" style="font-size: 0.65rem; letter-spacing: 1px;">MON-FRI: 6AM-5PM PT</p>
                </div>
                
                <div class="bg-light p-4 mb-4 rounded-3">
                    <i class="fa-regular fa-building text-secondary mb-3 fs-3"></i>
                    <h5 class="fw-bold">Corporate</h5>
                    <p class="text-muted small mb-4">Media inquiries, partnership opportunities, and global corporate headquarters information.</p>
                    <a href="<?= base_url('structure') ?>" class="text-danger fw-bold text-decoration-none" style="font-size: 0.85rem;">Inquiry Portal <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>

                <div class="bg-light p-4 rounded-3">
                    <i class="fa-regular fa-map text-danger mb-3 fs-3"></i>
                    <h5 class="fw-bold">Global Locations</h5>
                    <p class="text-muted small mb-4">Locate Honda regional offices and manufacturing plants worldwide.</p>
                    <div class="d-flex align-items-start mb-2 text-muted small">
                        <i class="fa-solid fa-location-dot mt-1 me-2 text-dark"></i> Torrance, California, USA
                    </div>
                    <div class="d-flex align-items-start text-muted small">
                        <i class="fa-solid fa-location-dot mt-1 me-2 text-dark"></i> Tokyo, Minato City, Japan
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 shadow-lg rounded-4 h-100 border">
                    <h3 class="fw-normal mb-2">Send us a message</h3>
                    <p class="text-muted small mb-5">Fill out the form below and our specialized team will contact you within 24 business hours.</p>

                    <form action="/contact/send" method="POST">
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">FIRST NAME</label>
                                <input type="text" name="name" class="form-control bg-light border-0 py-3" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">LAST NAME</label>
                                <input type="text" class="form-control bg-light border-0 py-3" placeholder="Enter your surname" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">EMAIL ADDRESS</label>
                            <input type="email" name="email" class="form-control bg-light border-0 py-3" placeholder="email@example.com" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">INQUIRY TYPE</label>
                            <select class="form-select bg-light border-0 py-3 text-muted">
                                <option>Vehicle Service & Maintenance</option>
                                <option>Sales Inquiry</option>
                                <option>Corporate Information</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="form-label text-muted fw-bold mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">MESSAGE</label>
                            <textarea name="message" class="form-control bg-light border-0 py-3" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="btn text-white px-5 py-3 fw-bold" style="background-color: #D00000; font-size: 0.9rem;">SEND MESSAGE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 mb-5">
    <div class="container">
        <div class="position-relative rounded-4 overflow-hidden" style="height: 400px; background: url('<?= base_url('assets/images/Honda2.jpg') ?>') center/cover no-repeat; background-color: #A0A0A0;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.4) 0%, transparent 100%);"></div>
            
            <div class="position-absolute top-50 start-0 translate-middle-y ms-md-5 ms-3">
                <div class="bg-white p-4 rounded-4 shadow-lg" style="width: 320px;">
                    <h5 class="fw-bold mb-2">Find a Dealer</h5>
                    <p class="text-muted mb-4" style="font-size: 0.8rem;">Enter your location to find the closest certified Honda service center or showroom near you.</p>
                    
                    <div class="input-group mb-3 shadow-sm border rounded">
                        <span class="input-group-text bg-white border-0"><i class="fa-solid fa-magnifying-glass text-danger"></i></span>
                        <input type="text" class="form-control border-0 ps-0" placeholder="Zip code or City" style="font-size: 0.9rem;">
                    </div>
                    <button class="btn w-100 text-white fw-bold py-2 mt-2" style="background-color: #D00000; font-size: 0.85rem;">SEARCH LOCATION</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>