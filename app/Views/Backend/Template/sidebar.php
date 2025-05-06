<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="<?= base_url('admin/dashboard-admin'); ?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li class="parent">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> Master Data <span data-toggle="collapse" href="#sub-item-master" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-master">
                <li>
                    <a href="<?= base_url('admin/master-data-admin'); ?>">
                        <span class="glyphicon glyphicon-share-alt"></span> Data Admin
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/master-data-anggota'); ?>">
                        <span class="glyphicon glyphicon-share-alt"></span> Data Anggota
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/master-data-kategori'); ?>">
                        <span class="glyphicon glyphicon-share-alt"></span> Data Kategori
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/master-data-rak'); ?>">
                        <span class="glyphicon glyphicon-share-alt"></span> Data Rak
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/master-data-buku'); ?>">
                        <span class="glyphicon glyphicon-share-alt"></span> Data Buku
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="<?= base_url('admin/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
</div><!--/.sidebar-->