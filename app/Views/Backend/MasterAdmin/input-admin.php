<!-- filepath: c:\xampp\htdocs\perpus_db1\app\Views\Backend\MasterAdmin\input-admin.php -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Admin</li>
            <li class="active">Edit Data Admin</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Edit Admin</h3>
                    <hr />
                    <form action="<?= base_url('admin/simpan-admin'); ?>" method="post">
                        <div class="form-group col-md-6">
                            <label>Nama Admin</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Admin" value="<?= $data_admin['nama_admin']; ?>" required="required">
                        </div>
                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Username Admin</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username Pengguna" value="<?= $data_admin['username_admin']; ?>" required="required">
                        </div>
                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Akses Level</label>
                            <select class="form-control" name="level" required="required">
                                <option value="">-- Pilih Level --</option>
                                <option value="2" <?= ($data_admin['akses_level'] == "2") ? "selected" : ""; ?>>Superadmin</option>
                                <option value="3" <?= ($data_admin['akses_level'] == "3") ? "selected" : ""; ?>>Admin</option>
                            </select>
                        </div>
                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('admin/master-data-admin'); ?>">
                                <button type="button" class="btn btn-danger">Batal</button>
                            </a>
                        </div>
                        <div style="clear:both;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>