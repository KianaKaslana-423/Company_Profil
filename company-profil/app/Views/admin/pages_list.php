<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-5">
    <div>
        <h1 class="fw-bold mb-1" style="letter-spacing: -1.5px;">Manage Pages</h1>
        <p class="text-muted mb-0" style="font-size: 0.95rem;">Configure the digital silhouette of the HONDA ecosystem.</p>
    </div>
    <div class="d-flex gap-3">
        <a href="<?= base_url('admin/pages/add') ?>" class="btn text-white fw-bold px-4" style="background-color: #1A1A1A;">
            <i class="fa-solid fa-plus me-2"></i> Create New Page
        </a>
    </div>
</div>

<div class="page-table-container shadow-sm p-4 bg-white" style="border-radius: 16px; border: 1px solid #EAEAEA;">
    <table class="table table-borderless mb-0">
        <thead class="border-bottom">
            <tr>
                <th class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;">Page Identity</th>
                <th class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;">Last Modified</th>
                <th class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px;">Status</th>
                <th class="text-muted small fw-bold text-uppercase text-end" style="letter-spacing: 1px;">Interaction</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($pages) && is_array($pages)): ?>
                <?php foreach($pages as $page): ?>
                <tr class="border-bottom">
                    <td class="py-3">
                        <div class="d-flex align-items-center gap-3">
                            <?php $img = !empty($page['thumbnail_image']) ? $page['thumbnail_image'] : 'default.jpg'; ?>
                            <img src="<?= base_url('assets/images/' . $img) ?>" alt="thumb" style="width: 60px; height: 40px; object-fit: cover; border-radius: 6px; background: #eee;">
                            <div>
                                <h6 class="fw-bold mb-0 text-dark"><?= esc($page['title']) ?></h6>
                                <span class="text-muted small">/<?= esc($page['slug']) ?></span>
                            </div>
                        </div>
                    </td>
                    <td class="py-3 align-middle text-muted fw-bold small">
                        <?= date('M d, Y', strtotime($page['created_at'] ?? 'now')) ?>
                    </td>
                    <td class="py-3 align-middle">
                        <?php if($page['status'] == 'published'): ?>
                            <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 small fw-bold">PUBLISHED</span>
                        <?php else: ?>
                            <span class="badge rounded-pill bg-light text-muted px-3 py-2 small fw-bold border">DRAFT</span>
                        <?php endif; ?>
                    </td>
                    <td class="py-3 align-middle text-end">
                        <a href="<?= base_url($page['slug']) ?>" target="_blank" class="text-muted me-3 fs-5"><i class="fa-regular fa-eye"></i></a>
                        <a href="<?= base_url('admin/pages/edit/' . $page['id']) ?>" class="btn btn-sm btn-light border fw-bold px-3">Edit</a>
                        <a href="<?= base_url('admin/pages/delete/' . $page['id']) ?>" class="btn btn-sm btn-outline-danger fw-bold px-3" onclick="return confirm('Hapus halaman ini?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center py-5">
                        <i class="fa-regular fa-folder-open fs-1 text-muted opacity-25 mb-3"></i>
                        <p class="text-muted">Belum ada halaman yang dibuat.</p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>