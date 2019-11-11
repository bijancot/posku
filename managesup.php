<?php
require "conn/koneksi.php";
require 'view/layout/header.php';
require 'view/layout/sidebar.php';
// require 'view/layout/main.php';
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
                    <li class="breadcrumb-current-item">Customer > Manage Customer</li>
                </ol>
            </div>
        </header>
        <!-- /Topbar -->

        <div class="greeting-field">
            Manage Customer
        </div>

        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

                <!-- AllCP Info -->

                    <div class="row mn">
                        <!-- AllCP Grid -->
                       
                    <div class="col-md-12">
                        <div class="panel panel-visible">
                            <div class="panel-heading">
                            <a href=<?php echo "../supplier.php";?>>
                                    <button type="button" class="btn btn-rounded btn-primary btn-block right" style="width: 200px;">+ Supplier Baru</button>
                                    </a>
                            </div>
                            <div class="panel-body pn">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th class="va-m">Nama Supplier</th>
                                            <th class="va-m">Alamat Supplier</th>
                                            <th class="va-m">No. Telp</th>
                                            <th class="va-m">Opsi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $kolo = "adasdsa";
                                            $ko = $db->prepare("select * from supplier where id!=:idrole");
                                            $ko->bindParam(":idrole",$kolo);
                                            $ko->execute();
                                            $hasil = $ko->fetchAll(PDO::FETCH_OBJ);

                                           foreach ($hasil as $key) {
                                            echo "<tr>
                                            <td>$key->supplier_nama</td>
                                            <td>$key->supplier_alamat</td>
                                            <td>(+62) $key->supplier_notelp</td>
                                            <td width=\"15%\">
                                            <table>
                                                <tr>
                                                    <td><a href=\"detail-sup.php?ids=$key->id\"><button type=\"button\" class=\"btn btn-rounded btn-info btn-block\" title=\"Detail\"><span class=\"fa fa-eye\"></span></button></a></td>
                                                </tr>
                                            </table>
                                        </td>
                                        </tr>";
                                        }
                                       ?>
                                        </tbody>
                                    </table>
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