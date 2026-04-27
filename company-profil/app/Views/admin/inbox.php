<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<style>
    /* Kustomisasi khusus halaman Inbox */
    .inbox-card {
        background-color: #F8F9FA;
        border: 1px solid #EAEAEA;
        border-radius: 12px;
        padding: 20px;
        cursor: pointer;
        transition: all 0.2s;
        margin-bottom: 15px;
    }
    
    .inbox-card:hover {
        background-color: #F1F3F5;
    }
    
    /* Kartu Pesan Aktif (Merah) */
    .inbox-card.active {
        background-color: #D00000;
        border-color: #D00000;
        color: white;
    }
    
    .inbox-card.active .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
    
    .inbox-card.active .badge-tag {
        background-color: rgba(255,255,255,0.2);
        color: white;
    }

    .badge-tag {
        font-size: 0.6rem;
        letter-spacing: 1px;
        padding: 4px 8px;
        border-radius: 4px;
        font-weight: 700;
        text-transform: uppercase;
    }
    
    .badge-gray {
        background-color: #EAEAEA;
        color: #555;
    }
    
    /* Avatar Inisial */
    .avatar-circle {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.85rem;
    }
    
    .avatar-light { background-color: rgba(255,255,255,0.2); color: white; }
    .avatar-red { background-color: #FFE5E5; color: #D00000; width: 50px; height: 50px; font-size: 1.2rem; }

    /* Area Pesan Kanan */
    .message-detail-box {
        background-color: #FFFFFF;
        border-radius: 16px;
        border: 1px solid #EAEAEA;
        padding: 30px;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    }

    .msg-bubble {
        background-color: #F8F9FA;
        border-radius: 12px;
        padding: 25px;
        font-size: 0.95rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 30px;
    }

    .reply-box {
        background-color: #F8F9FA;
        border-radius: 12px;
        border: 1px solid #EAEAEA;
        padding: 20px;
    }
    
    .reply-input {
        background: transparent;
        border: none;
        width: 100%;
        resize: none;
        outline: none;
        font-size: 0.9rem;
        color: #333;
    }
    
    /* Kartu Statistik Bawah */
    .stat-card {
        background-color: #F8F9FA;
        border-radius: 12px;
        padding: 25px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #EAEAEA;
    }
</style>

<div class="d-flex justify-content-between align-items-end mb-4">
    <div>
        <p class="text-danger fw-bold mb-1" style="font-size: 0.75rem; letter-spacing: 2px;">COMMUNICATION CENTER</p>
        <h1 class="fw-bold mb-0" style="letter-spacing: -1.5px;">Precision Inbox</h1>
    </div>
    <div class="d-flex gap-2">
        <div class="input-group" style="width: 250px;">
            <span class="input-group-text bg-light border-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
            <input type="text" class="form-control bg-light border-0" placeholder="Search inquiries...">
        </div>
        <button class="btn btn-light border-0"><i class="fa-solid fa-sliders"></i></button>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-lg-5">
        
        <div class="inbox-card active">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge-tag">NEW INQUIRY</span>
                <span style="font-size: 0.7rem; font-weight: 600;">14:20 PM</span>
            </div>
            <h5 class="fw-bold mb-1">Alex Rivers</h5>
            <p class="mb-4" style="font-size: 0.85rem; color: rgba(255,255,255,0.8);">Interest in 2024 Civic Type R Customization</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="avatar-circle avatar-light">R</div>
                <i class="fa-solid fa-chevron-right fs-5"></i>
            </div>
        </div>

        <div class="inbox-card">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge-tag badge-gray text-muted">SERVICE REQUEST</span>
                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">Yesterday</span>
            </div>
            <h6 class="fw-bold mb-1 text-dark">Sarah Jenkins</h6>
            <p class="text-muted mb-0" style="font-size: 0.8rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Scheduling first maintenance for HR-V Hybrid...</p>
        </div>

        <div class="inbox-card">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge-tag badge-gray text-muted">PARTS INQUIRY</span>
                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">Oct 24</span>
            </div>
            <h6 class="fw-bold mb-1 text-dark">Marcus Thorne</h6>
            <p class="text-muted mb-0" style="font-size: 0.8rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Availability of OEM forged wheels for NSX...</p>
        </div>

        <div class="inbox-card">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span class="badge-tag badge-gray text-muted">TEST DRIVE</span>
                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">Oct 23</span>
            </div>
            <h6 class="fw-bold mb-1 text-dark">Elena Rodriguez</h6>
            <p class="text-muted mb-0" style="font-size: 0.8rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Confirming appointment for Accord test drive tomorrow...</p>
        </div>

    </div>

    <div class="col-lg-7">
        <div class="message-detail-box d-flex flex-column">
            
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                <div class="d-flex align-items-center gap-3">
                    <div class="avatar-circle avatar-red">AR</div>
                    <div>
                        <h4 class="fw-bold mb-0">Alex Rivers</h4>
                        <p class="text-muted mb-0" style="font-size: 0.85rem;">alex.rivers@design.com</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <a href="#" class="text-dark fs-5"><i class="fa-solid fa-box-archive"></i></a>
                    <a href="#" class="text-dark fs-5"><i class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="text-danger fw-bold mb-0" style="font-size: 0.75rem; letter-spacing: 1px;">INQUIRY DETAILS</p>
                <span class="badge-tag badge-gray text-muted">ID: #HK-99281</span>
            </div>

            <div class="msg-bubble flex-grow-1">
                "Hello Honda Team, I'm reaching out because I'm looking to customize my new 2024 Civic Type R with some HPD performance parts. Specifically, I'm interested in the carbon fiber rear wing and the interior illumination package. Do you have these in stock for immediate installation?"
            </div>

            <div class="reply-box">
                <textarea class="reply-input" rows="3" placeholder="Type your precision response here..."></textarea>
                <div class="d-flex justify-content-end gap-3 mb-3">
                    <a href="#" class="text-muted"><i class="fa-solid fa-paperclip"></i></a>
                    <a href="#" class="text-muted"><i class="fa-regular fa-face-smile"></i></a>
                </div>
                
                <div class="d-flex justify-content-between align-items-center border-top pt-3">
                    <div class="d-flex gap-2">
                        <button class="btn btn-light fw-bold px-3 py-2" style="font-size: 0.8rem;">Save Draft</button>
                        <button class="btn btn-light fw-bold px-3 py-2" style="font-size: 0.8rem;">Templates</button>
                    </div>
                    <button class="btn text-white fw-bold px-4 py-2" style="background-color: #D00000; font-size: 0.85rem;">Send Reply</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row g-4 mt-1">
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <p class="text-muted fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">OPEN TICKETS</p>
                <h2 class="fw-bold mb-0">24</h2>
            </div>
            <i class="fa-solid fa-clipboard-list text-danger fs-4" style="opacity: 0.5;"></i>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <p class="text-muted fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">RESPONSE TIME</p>
                <h2 class="fw-bold mb-0">1.2h</h2>
            </div>
            <i class="fa-solid fa-stopwatch text-danger fs-4" style="opacity: 0.5;"></i>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <p class="text-muted fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">SATISFACTION</p>
                <h2 class="fw-bold mb-0">98%</h2>
            </div>
            <i class="fa-regular fa-star text-danger fs-4" style="opacity: 0.5;"></i>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card">
            <div>
                <p class="text-muted fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 1px;">TOTAL INQUIRIES</p>
                <h2 class="fw-bold mb-0">1.4k</h2>
            </div>
            <i class="fa-regular fa-comments text-danger fs-4" style="opacity: 0.5;"></i>
        </div>
    </div>
</div>

<?= $this->endSection() ?>