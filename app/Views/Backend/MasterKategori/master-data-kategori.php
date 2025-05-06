<!-- filepath: c:\xampp\htdocs\perpus_db1\app\Views\Backend\MasterKategori\master-data-kategori.php -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Master Data Kategori</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Master Data Kategori</h3>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url('admin/input-data-kategori'); ?>" class="btn btn-primary">Tambah Kategori</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Kategori</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data_kategori)) : ?>
                                <?php $no = 1; foreach ($data_kategori as $kategori) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $kategori['nama_kategori']; ?></td>
                                        <td><?= $kategori['deskripsi_kategori']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit-data-kategori/' . sha1($kategori['id_kategori'])); ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('admin/hapus-data-kategori/' . sha1($kategori['id_kategori'])); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data kategori</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>