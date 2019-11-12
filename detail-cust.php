<?php
   require "conn/koneksi.php";
   require 'view/layout/header.php';
   require 'view/layout/sidebar.php';
   // require 'view/layout/main.php';

    echo $id = $_GET['ido'];
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
            <li class="breadcrumb-current-item">Customer > Detail Customer</li>
         </ol>
         
      </div>
<!--       
   <div class="topbar-left greeting-field">
      Add New Customer
   </div> -->
   </header>
   <!-- /Topbar -->
   <!-- Content -->
   <section id="content" class="table-layout animated fadeIn">
      <!-- Column Center -->
      <aside class="chute chute-left chute290 chute-icon-style bg-info" data-chute-height="match">
                <div class="chute-icon"></div>
                <div class="chute-container">
                    <div id="nav-spy">
                        <ul class="nav chute-nav" data-smoothscroll="-70" data-spy="affix" data-offset-top="200">
                            <li>
                                <a href="#first">
                                    Data pokok customer</a>
                            </li>
                            <li>
                                <a href="#second">
                                    Perizinan Customer</a>
                            </li>
                            <li>
                                <a href="#third">
                                    Penanggung Jawab Usaha</a>
                            </li>
                            <li>
                                <a href="#forth">
                                    Produk yang dijual saat ini</a>
                            </li>
                            <li>
                                <a href="#fifth">
                                    Foto Lokasi Gedung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
      <div class="chute chute-center">
         <!-- AllCP Info -->
         <div class="row">
            <!-- AllCP Grid -->
            <div class="allcp-form">
               <div class="panel">
                  <div class="panel-heading heading-right">
                  <?php
                    $query = $db->prepare("SELECT * from master_customer where id=:id");
                    $query->bindParam(":id",$id);
                    $query->execute();
                    $hasil = $query->fetchAll();
                  ?>
                  <?php foreach ($hasil as $key) {?>
                  <div class="row">
                  <?php
                  $kode_sub=$key['code_cust'][1].$key['code_cust'][2];
                  $kode_kokab = $key['code_cust'][3].$key['code_cust'][4].$key['code_cust'][5];
                  
                    $query2 = $db->prepare("SELECT * from kode_area where kode_kokab=:kokab and kode_sub=:sub");
                    $query2->bindParam(":kokab",$kode_kokab);
                    $query2->bindParam(":sub",$kode_sub);
                    $query2->execute();
                    $hasil2 = $query2->fetchAll();

                    foreach ($hasil2 as $key1) {?>
                    <div class="col-md-6"><h2 style="text-align:left">Detail Customer</h2></div>
                    <div class="col-md-6"> <h6 style="text-align:right">kode area : <?php echo $key1['area'];?></h6>
                    <h6 style="text-align:right">Kota/Kabupaten : <?php echo $key1['cityorkab']." ".$key1['citykabname']; }?></h6></div>
                  </div>
                  </div>
                  <div class="panel-body pn">
                    <!-- first -->
                    <div id="first">
                        <div class="row">
                        <h5>Data Pokok</h5>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h6>No Customer  </h6>
                                    <h6>Nama Customer</h6>
                                    <h6>Alamat Usaha</h6>
                                    <h6>Jenis Bangunan</h6>
                                    <h6>Status Izin Usaha</h6>
                                    </div>
                                    <div class="col-md-6">
                                    <h6>: <?php echo $key['code_lama']?> / <?php echo $key['code_cust']?></h6>
                                    <h6>: <?php echo $key['nama_cust']?></h6>           
                                    <h6>: <?php echo $key['alamat_usaha']?></h6> 
                                    <h6>: <?php echo $key['jenis_bangunan']?></h6>      
                                    <h6>: <?php echo $key['status_ijin_usaha']?></h6>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h6>No.Telp  </h6>
                                    <h6>No.handphone  </h6>
                                    <h6>Limit Kredit lain  </h6>
                                    <h6>Limit Kredit</h6>
                                    </div>
                                    <div class="col-md-6">
                                    <h6>: <?php echo $key['notelp_usaha']?></h6>
                                    <h6>: <?php echo $key['nohandphone_usaha']?></h6>          
                                    <h6>: <?php echo $key['limit_kredit_dist_lain']?></h6>
                                    <h6>: <?php echo $key['limit_kredit']?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- first -->
                    <br/><br/>
                    <!-- second -->
                    <div id="second">
                        <h5>Perizinan Usaha</h5>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>No. NPWP<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['npwp_numb']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6>Masa Berlaku NPWP<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['npwp_masa']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <h6>No. SIUP<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siup_numb']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6>Masa Berlaku SIUP<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siup_masa']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <h6>No. SIUPMB<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siupmb_numb']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6>Masa Berlaku SIUPMB<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siupmb_masa']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <h6>No. SIUPMenengah<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siupmenengah_numb']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6>Masa Berlaku SIUPMenengah<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['siupmenengah_masa']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <h6>No. NPPBKC<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['nppbkc_numb']?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h6>Masa Berlaku NPPBKC<h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php echo $key['nppbkc_masa']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- second -->
                    <br/><br/><br/>
                    <!-- third -->
                    <div id="third">
                    <?php //echo $id;?>
                        <?php
                        $query2= $db->prepare("SELECT a.nama as nama,a.alamat as alamat,a.noktp as noktp,a.nonpwp as nonpwp,a.notelp as notelp FROM master_pj a join master_customer b on a.id_pj=b.id_pj where b.id=:id");
                        $query2->bindParam(":id",$id);
                        $query2->execute();
                        $hasil2 = $query2->fetchAll();

                        foreach ($hasil2 as $key2) {?>
                            <div class="row">
                                <h5>Data Pribadi Penanggung Jawab</h5>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <h6>Nama  </h6>
                                        <h6>No Telp  </h6>
                                        <h6>Alamat  </h6>
                                        </div>
                                        <div class="col-md-6">
                                        <h6> : <?php echo $key2['nama']?></h6>
                                        <h6> : <?php echo $key2['notelp']?></h6>
                                        <h6> : <?php echo $key2['alamat']?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <p><strong>No. NPWP : </strong></p>
                                        <h6><?php echo $key2['nonpwp']?></h6>
                                        <p><strong>No. KTP : </strong></p>
                                        <h6><?php echo $key2['noktp']?></h6>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- third -->
                    <br/><br/><br/>
                    <!-- forth -->
                    <div id="forth">
                            <div class="row">
                                <h5>Produk Yang dijual Saat ini<h5>
                        <?php
                            $query3= $db->prepare("SELECT a.nama as nama,a.foto as foto,a.qty as qty from produk_customer a join master_customer b on a.no_customer=b.code_cust where b.id=:id");
                            $query3->bindParam(":id",$id);
                            $query3->execute();
                            $hasil3 = $query3->fetchAll();

                            foreach ($hasil3 as $key3) {?>

                                    <div class="col-md-4">
                                    <h6> Nama Produk : <?php echo $key3['nama']?></h6>
                                    <img src="<?php echo $key3['foto']?>" height="60px" width="110px">
                                    <h6>Qty : <?php echo $key3['qty']?> </h6>
                                    </div>
                            
                                <?php } ?>
                            </div>
                    </div>
                    <!-- forth -->
                    <br/><br/><br/>
                    <!-- fifth -->
                    <div id="fifth">
                        <div class="row">
                            <h5>Foto Lokasi<h5>
                            <?php
                            $query = $db->prepare("SELECT * from master_customer where id=:id");
                            $query->bindParam(":id",$id);
                            $query->execute();
                            $hasil = $query->fetchAll();
        
                            foreach ($hasil as $key) {?>
                                <div class="col-md-6">
                                        <h6> Foto jarak Jauh Gedung </h6>
                                        <img src="<?php echo $key['foto_gedung_jauh']?>" height="60px" width="110px">
                                </div>
                                <div class="col-md-6">
                                        <h6> Foto jarak Dekat Gedung </h6>
                                        <img src="<?php echo $key['foto_gedung_dekat']?>" height="60px" width="110px">
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <!-- fifth -->
                  </div>
               </div>
            </div>
         </div>
      <!-- /AllCP Grid -->
      </div>
      <!-- /Column Center -->
   </section>
   <!-- /Content -->
</section>
<!-- /Main Wrapper -->
<?php
   require 'view/layout/footer.php';
   ?>

