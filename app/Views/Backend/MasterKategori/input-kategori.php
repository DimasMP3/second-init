<form action="<?= base_url('admin/simpan-kategori'); ?>" method="post">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label>Deskripsi Kategori</label>
        <textarea class="form-control" name="deskripsi" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>