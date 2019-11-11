<?php
   require "conn/koneksi.php";
   require 'view/layout/header.php';
   require 'view/layout/sidebar.php';
   // require 'view/layout/main.php';

   $id = $_GET['ids'];
   ?>
    <!-- Main Wrapper -->
    <section id="content_wrapper">

        <!-- Topbar Menu Wrapper -->
        <div id="topbar-dropmenu-wrapper">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-danger">
                        <span class="fa fa-music"></span>
                        <span class="service-title">Audio</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-success">
                        <span class="fa fa-picture-o"></span>
                        <span class="service-title">Images</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-primary">
                        <span class="fa fa-video-camera"></span>
                        <span class="service-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-alert">
                        <span class="fa fa-envelope"></span>
                        <span class="service-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-system">
                        <span class="fa fa-cog"></span>
                        <span class="service-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="service-box bg-dark">
                        <span class="fa fa-user"></span>
                        <span class="service-title">Users</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Topbar Menu Wrapper -->

        <!-- Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-current-item">Manage Role User > Add New User Role</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->
        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->
                <div class="row">
                    <!-- AllCP Grid -->
                    <div class="allcp-form">
                        <div class="panel">
                        <h3>Detail Supplier</h3>
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body pn">
                                <div class="row">
                                    
                                    <?php
                                    $query = $db->prepare("SELECT b.supplier_nama as nama,a.name as bank,a.code as bank_code,b.supplier_norek as norek,b.supplier_notelp as notelp,c.name as kokab,d.name as prov,b.supplier_alamat as alamat,b.supplier_npwp as npwp FROM bank a join supplier b on a.code=b.supplier_bank join regencies c on b.supplier_kota=c.id join provinces d on c.province_id=d.id where b.id=:id");
                                    $query->bindParam(":id",$id);
                                    $query->execute();
                                    $hasil = $query->fetchAll();

                                    foreach ($hasil as $key) {?>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h6>Nama Customer</h6>
                                            <h6>No. Telp</h6>
                                            <h6>Kota</h6>
                                            <h6>Provinsi</h6>
                                            <h6>Alamat</h6>
                                            </div>
                                            <div class="col-md-6">
                                            <h6> : <?php echo $key['nama']?></h6>
                                            <h6> : <?php echo $key['notelp']?></h6>
                                            <h6> : <?php echo $key['kokab']?></h6>
                                            <h6> : <?php echo $key['prov']?></h6>
                                            <h6> : <?php echo $key['alamat']?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row">
                                            <div class="col-md-6">
                                            <h6>BANK</h6>
                                            <h6>No. Rek</h6>
                                            <h6>NPWP</h6>
                                            </div>
                                            <div class="col-md-6">
                                            <h6> : <?php echo $key['bank']?></h6>
                                            <h6> : <?php echo $key['bank_code']?> <?php echo $key['norek']?></h6>
                                            <h6> : <?php echo $key['npwp']?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /AllCP Grid -->
                </div>
            </div>
            <!-- /Column Center -->
        </section>
        <!-- /Content -->
    </section>
    <!-- /Main Wrapper -->
    <?php
   require 'view/layout/footer.php';
   ?>