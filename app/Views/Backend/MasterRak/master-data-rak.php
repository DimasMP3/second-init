<!-- filepath: c:\xampp\htdocs\perpus_db1\app\Views\Backend\MasterRak\master-data-rak.php -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Rak</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Master Data Rak</h3>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url('admin/input-data-rak'); ?>" class="btn btn-primary">Tambah Rak</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Rak</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rak</th>
                                <th>Lokasi Rak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data_rak)) : ?>
                                <?php $no = 1; foreach ($data_rak as $rak) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $rak['nama_rak']; ?></td>
                                        <td><?= $rak['lokasi_rak']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit-data-rak/' . $rak['id_rak']); ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/hapus-data-rak/' . $rak['id_rak']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data rak</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>