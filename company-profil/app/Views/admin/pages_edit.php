<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="mb-5">
    <h1 class="fw-bold" style="letter-spacing: -1.5px;">Edit Page</h1>
    <p class="text-muted">Expand the digital garage with new engineering insights.</p>
</div>

<div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
    <form action="<?= base_url('admin/pages/update/' . $halaman['id']) ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3">
                <label class="form-label fw-bold small text-uppercase">Page Title</label>
                <input type="text" name="title" class="form-control py-2" value="<?= $halaman['title'] ?>" placeholder="e.g. The Aerodynamics of NSX" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold small text-uppercase">Content</label>
                <textarea name="content" class="form-control" rows="10" placeholder="Write the future here..." required><?= $halaman['content'] ?></textarea>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label fw-bold small text-uppercase">Status</label>
                <select name="status" class="form-select">
                    <option value="published" <?= $halaman['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                    <option value="draft" <?= $halaman['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold small text-uppercase">Current Thumbnail</label>
                <div class="mb-2">
                    <img src="<?= base_url('assets/images/' . ($halaman['thumbnail_image'] ?: 'default.jpg')) ?>" class="img-thumbnail w-100" style="max-height: 200px; object-fit: cover;">
                </div>
                <label class="form-label fw-bold small text-uppercase">Upload New Image</label>
                <input type="file" name="thumbnail_image" class="form-control">
                <div class="form-text mt-2 small">Recommended: 1200x800px (JPG/PNG). Leave blank if you don't want to change the image.</div>
            </div>
            
            <hr>
            
            <button type="submit" class="btn text-white w-100 py-2 fw-bold" style="background-color: #D00000;">
                Update & Authorize
            </button>
            
            <a href="<?= base_url('admin/pages') ?>" class="btn btn-light w-100 mt-2 py-2 fw-bold text-muted">Cancel</a>
        </div>
    </div>
</form>
</div>

<?= $this->endSection() ?>