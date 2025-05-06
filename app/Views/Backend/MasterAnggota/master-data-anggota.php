<!-- filepath: c:\xampp\htdocs\perpus_db1\app\Views\Backend\MasterAnggota\master-data-anggota.php -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Anggota</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Master Data Anggota</h3>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url('admin/input-data-anggota'); ?>" class="btn btn-primary">Tambah Anggota</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Anggota</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data_anggota)) : ?>
                                <?php $no = 1; foreach ($data_anggota as $anggota) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $anggota['nama_anggota']; ?></td>
                                        <td><?= $anggota['alamat_anggota']; ?></td>
                                        <td><?= $anggota['no_hp_anggota']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit-data-anggota/' . $anggota['id_anggota']); ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/hapus-data-anggota/' . $anggota['id_anggota']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data anggota</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>