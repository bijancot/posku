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
                        <h3>Data Supplier</h3>
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body pn">
                            
                                <form method="post" action="model/input_supplier.php" id="form-ui">
                                    <!-- Basic -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Nama Supplier</strong></p>
                                            <label class="field prepend-icon">
                                                <input type="text" name="supnama" class="gui-input" placeholder="Nama Supplier" required oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <span class="field-icon">
                                                    <i class="fa fa-slack"></i>
                                                </span>
                                            </label><br/><br/>
                                            <div class="row">
                                                <br/>
                                                <div class="col-md-6">
                                                    <p><strong>Provinsi</strong></p>
                                                    <label class="field select">
                                                        <select class="form-control select2-single" name="prov" id="prov" required>
                                                            <?php
                                                        $quer = $db->prepare("SELECT * FROM provinces");
                                                        $quer->execute();
                                                        $hasil = $quer->fetchAll();
                                                            foreach ($hasil as $key) {
                                                                echo "<option value=\"".$key['id'];
                                                                echo "\">".$key['name']."</option>";
                                                            }
                                                        ?>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-xs-6">
                                                <p><strong>Kota / Kabupaten</strong></p>
                                                    <label class="field select">
                                                        <select class="form-control select2-single" name="kokab" id="kokab" required>
                                                            <?php
                                                        $quer1 = $db->prepare("SELECT a.id as id_kota,a.name as name_kota FROM regencies a join provinces b on a.province_id=b.id");
                                                        $quer1->execute();
                                                        $hasil1 = $quer1->fetchAll();
                                                            foreach ($hasil1 as $key1) {
                                                                echo "<option value=\"".$key1['id_kota'];
                                                                echo "\">".$key1['name_kota']."</option>";
                                                            }
                                                        ?>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-12"><br/>
                                                <p><strong>Alamat Lengkap</strong></p>
                                                    <label class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="comment" name="alamat" placeholder="Text area" required oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);"></textarea>
                                                    <span class="field-icon">
                                                        <i class="fa fa-list"></i>
                                                    </span>
                                                    </label>
                                                </div>
                                            </div><br/>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                        <p><strong>No. Telp</strong></p>
                                            <label class="field prepend-icon">
                                                <input type="text" name="notelp" class="gui-input" placeholder="82334059230" required>
                                                <span class="field-icon">
                                                    <strong>+62</strong>
                                                </span>
                                            </label><br/><br/>
                                            <br/>
                                        <p><strong>No. NPWP</strong></p>
                                            <label class="field prepend-icon">
                                                <input type="text" name="npwp" id="npwp" class="gui-input npwp" placeholder="No. NPWP" required maxlength="20">
                                                <span class="field-icon">
                                                <i class="fa fa-at"></i>
                                                </span>
                                            </label><br/><br/>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <p><strong>BANK</strong></p>
                                                    <label class="field select">
                                                        <select class="form-control select2-single" name="bank" id="area">
                                                            <?php
                                                        $quer = $db->prepare("SELECT name,code FROM bank");
                                                        $quer->execute();
                                                        $hasil = $quer->fetchAll();
                                                            foreach ($hasil as $key) {
                                                                echo "<option value=\"".$key['code'];
                                                                echo "\">".$key['name']."</option>";
                                                            }
                                                        ?>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <p><strong>No. Rek</strong></p>
                                                    <label class="field prepend-icon">
                                                        <input type="text" name="norek" class="gui-input" placeholder="No. Rekening" required>
                                                        <span class="field-icon">
                                                    <i class="fa fa-dollar"></i>
                                                </span>
                                                    </label><br/><br/>
                                                </div>
                                            </div><br/><br/><br/>
                                            <button type="submit" class="btn btn-block btn-success"><strong>Simpan Data</strong></button>
                                        </div>
                                    </div>
                                </form>
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