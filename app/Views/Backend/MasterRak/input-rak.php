<!-- filepath: c:\xampp\htdocs\perpus_db1\app\Views\Backend\MasterRak\input-rak.php -->
<form action="<?= base_url('admin/simpan-rak'); ?>" method="post">
    <div class="form-group">
        <label>Nama Rak</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label>Lokasi Rak</label>
        <input type="text" class="form-control" name="lokasi" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>