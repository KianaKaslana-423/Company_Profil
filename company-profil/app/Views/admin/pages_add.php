<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="mb-5">
    <h1 class="fw-bold" style="letter-spacing: -1.5px;">Create New Page</h1>
    <p class="text-muted">Expand the digital garage with new engineering insights.</p>
</div>

<div class="card border-0 shadow-sm p-4" style="border-radius: 16px;">
    <form action="/admin/pages/store" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Page Title</label>
                    <input type="text" name="title" class="form-control py-2" placeholder="e.g. The Aerodynamics of NSX" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Content</label>
                    <textarea name="content" class="form-control" rows="10" placeholder="Write the future here..." required></textarea>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Status</label>
                    <select name="status" class="form-select">
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Thumbnail Image</label>
                    <input type="file" name="thumbnail_image" class="form-control">
                    <div class="form-text mt-2 small">Recommended: 1200x800px (JPG/PNG)</div>
                </div>
                <hr>
                <button type="submit" class="btn text-white w-100 py-2 fw-bold" style="background-color: #D00000;">
                    Authorize & Publish
                </button>
                <a href="/admin/pages" class="btn btn-light w-100 mt-2 py-2 fw-bold text-muted">Cancel</a>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>