<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            
            <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelAdmin->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/member'); ?>"><i class="fas fa-users fa-3x text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Data Services </div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?= $this->ModelService->getServices('name_service')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href=""><i class="fas fa-scissors fa-3x text-white"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Data Hair Artist</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?= $this->ModelHairArtist->getHairArtist('nama')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/hairartist'); ?>"><i class="fas fa-user fa-3x text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Data booking
                            </div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                            <?= $this->ModelBook->getBook('id')->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/book'); ?>"><i class="fas fa-shopping-cart fa-3x text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row ux-->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Data
                    User</span>
                <a class="text-danger" href="<?php echo base_url('admin/member'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= $a['role_id']; ?></td>
                        <td><?= $a['is_active']; ?></td>
                        <td><?= date('Y', $a['tanggal_input']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive table-bordered col-sm-5 ml-auto mrauto mt-2">
            <div class="page-header">
                <span class="fas fa-user     text-warning mt-2"> Data Hair Artist</span>
                <a href="<?= base_url('buku'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
            </div>
            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>No Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            foreach ($ha as $h) :
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $h['nama']; ?></td>
                            <td><?= $h['umur']; ?></td>
                            <td><?= $h['no_telp']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->