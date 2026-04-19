<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<style>
    /* Styling khusus Halaman Manage Pages */
    .stat-box {
        background-color: #F8F9FA;
        border-radius: 12px;
        padding: 25px;
        height: 100%;
        border: 1px solid #EAEAEA;
        position: relative;
        overflow: hidden;
    }
    
    .stat-box-red {
        background-color: #D00000;
        color: white;
        border: none;
    }

    .stat-title {
        font-size: 0.7rem;
        letter-spacing: 1px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #888;
    }
    
    .stat-box-red .stat-title {
        color: rgba(255, 255, 255, 0.8);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 0;
    }

    /* Tabel Styling */
    .page-table-container {
        background-color: #FFFFFF;
        border-radius: 16px;
        border: 1px solid #EAEAEA;
        padding: 20px 30px;
    }

    .table-custom th {
        font-size: 0.75rem;
        letter-spacing: 1.5px;
        color: #888;
        font-weight: 700;
        border-bottom: 2px solid #F0F0F0;
        padding-bottom: 15px;
        padding-top: 15px;
    }

    .table-custom td {
        vertical-align: middle;
        padding: 20px 0;
        border-bottom: 1px solid #F0F0F0;
    }

    .table-custom tr:last-child td {
        border-bottom: none;
    }

    .page-thumbnail {
        width: 60px;
        height: 40px;
        border-radius: 6px;
        object-fit: cover;
        background-color: #EAEAEA;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.6rem;
        color: #888;
        font-weight: bold;
    }

    .badge-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .badge-published {
        background-color: #E6F4EA;
        color: #1E8E3E;
    }

    .badge-draft {
        background-color: #F1F3F4;
        color: #5F6368;
    }

    .btn-action {
        background-color: #F8F9FA;
        border: 1px solid #EAEAEA;
        color: #333;
        font-weight: 600;
        font-size: 0.8rem;
        padding: 6px 16px;
        border-radius: 6px;
    }

    .btn-action:hover {
        background-color: #EAEAEA;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-5">
    <div>
        <h1 class="fw-bold mb-1" style="letter-spacing: -1.5px;">Manage Pages</h1>
        <p class="text-muted mb-0" style="font-size: 0.95rem;">Configure the digital silhouette of the HONDA ecosystem.</p>
    </div>
    <div class="d-flex gap-3">
        <div class="input-group" style="width: 250px;">
            <span class="input-group-text bg-light border-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
            <input type="text" class="form-control bg-light border-0" placeholder="Search pages...">
        </div>
        <button class="btn text-white fw-bold px-4" style="background-color: #1A1A1A;"><i class="fa-solid fa-plus me-2"></i> Create New Page</button>
    </div>
</div>

<div class="row g-4 mb-5">
    <div class="col-md-3">
        <div class="stat-box">
            <p class="stat-title text-uppercase">TOTAL PAGES</p>
            <p class="stat-number text-dark">42</p>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-box stat-box-red">
            <i class="fa-solid fa-globe position-absolute" style="font-size: 5rem; opacity: 0.1; right: -15px; bottom: -15px;"></i>
            <p class="stat-title text-uppercase">LIVE NOW</p>
            <p class="stat-number">38</p>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-box">
            <p class="stat-title text-uppercase">DRAFTS</p>
            <p class="stat-number text-dark">04</p>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-box">
            <p class="stat-title text-uppercase">AVG. HEALTH</p>
            <div class="d-flex justify-content-between align-items-end">
                <p class="stat-number text-dark">98%</p>
                <div style="width: 30px; height: 25px; border-bottom: 3px solid #D00000; border-left: 3px solid #D00000; border-right: 3px solid #D00000; border-radius: 0 0 4px 4px; margin-bottom: 8px;"></div>
            </div>
        </div>
    </div>
</div>

<div class="page-table-container">
    <table class="table table-borderless table-custom mb-0">
        <thead>
            <tr>
                <th style="width: 45%;">PAGE IDENTITY</th>
                <th style="width: 20%;">LAST MODIFIED</th>
                <th style="width: 15%;">STATUS</th>
                <th style="width: 20%; text-align: right;">INTERACTION</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <img src="<?= base_url('assets/images/Nsx.jpg') ?>" class="page-thumbnail" alt="Civic">
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Civic Type R - Heritage</h6>
                            <span class="text-muted" style="font-size: 0.75rem;">/innovation/heritage/civic-type-r</span>
                        </div>
                    </div>
                </td>
                <td><span class="text-muted fw-bold" style="font-size: 0.85rem;">Oct 12, 2024</span></td>
                <td><span class="badge-status badge-published">PUBLISHED</span></td>
                <td class="text-end">
                    <a href="#" class="text-muted me-3 fs-5 align-middle"><i class="fa-regular fa-eye"></i></a>
                    <button class="btn btn-action"><i class="fa-solid fa-pen me-2" style="font-size: 0.7rem;"></i> Edit</button>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <img src="<?= base_url('assets/images/Honda2.jpg') ?>" class="page-thumbnail" alt="VTEC">
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">VTEC Technology Deep-Dive</h6>
                            <span class="text-muted" style="font-size: 0.75rem;">/innovation/powertrain/vtec-evolution</span>
                        </div>
                    </div>
                </td>
                <td><span class="text-muted fw-bold" style="font-size: 0.85rem;">Oct 15, 2024</span></td>
                <td><span class="badge-status badge-draft">DRAFT</span></td>
                <td class="text-end">
                    <a href="#" class="text-muted me-3 fs-5 align-middle"><i class="fa-regular fa-eye"></i></a>
                    <button class="btn btn-action"><i class="fa-solid fa-pen me-2" style="font-size: 0.7rem;"></i> Edit</button>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <img src="<?= base_url('assets/images/Honda7.jpg') ?>" class="page-thumbnail" alt="Sustainability">
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Sustainable Mobility 2030</h6>
                            <span class="text-muted" style="font-size: 0.75rem;">/sustainability/future-roadmap</span>
                        </div>
                    </div>
                </td>
                <td><span class="text-muted fw-bold" style="font-size: 0.85rem;">Oct 08, 2024</span></td>
                <td><span class="badge-status badge-published">PUBLISHED</span></td>
                <td class="text-end">
                    <a href="#" class="text-muted me-3 fs-5 align-middle"><i class="fa-regular fa-eye"></i></a>
                    <button class="btn btn-action"><i class="fa-solid fa-pen me-2" style="font-size: 0.7rem;"></i> Edit</button>
                </td>
            </tr>

           <tr>
    <td>
        <div class="d-flex align-items-center gap-3">
            <img src="<?= base_url('assets/images/Honda3.jpg') ?>" class="page-thumbnail" alt="Winter">
            <div>
                <h6 class="fw-bold mb-0 text-dark">Winter Maintenance Guide</h6>
                <span class="text-muted" style="font-size: 0.75rem;">/services/owner-care/winter-guide</span>
            </div>
        </div>
             </td>
             <td><span class="text-muted fw-bold" style="font-size: 0.85rem;">Sep 30, 2024</span></td>
             <td><span class="badge-status badge-published">PUBLISHED</span></td>
             <td class="text-end">
        <a href="#" class="text-muted me-3 fs-5 align-middle"><i class="fa-regular fa-eye"></i></a>
        <button class="btn btn-action"><i class="fa-solid fa-pen me-2" style="font-size: 0.7rem;"></i> Edit</button>
         </td>
    </tr>

        </tbody>
    </table>
    
    <div class="d-flex justify-content-between align-items-center border-top pt-4 mt-2">
        <span class="text-muted fw-bold" style="font-size: 0.8rem;">Showing 1-4 of 42 entries</span>
        <div class="d-flex gap-2">
            <button class="btn btn-light border-0 px-3"><i class="fa-solid fa-chevron-left text-muted"></i></button>
            <button class="btn text-white fw-bold px-3" style="background-color: #D00000;">1</button>
            <button class="btn btn-light border-0 text-dark fw-bold px-3">2</button>
            <button class="btn btn-light border-0 text-dark fw-bold px-3">3</button>
            <button class="btn btn-light border-0 px-3"><i class="fa-solid fa-chevron-right text-muted"></i></button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>