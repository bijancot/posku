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
            <li class="breadcrumb-current-item">Customer > Add New Customer</li>
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
                            <li class="active">
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
                  <div class="panel-heading">
                  </div>
                  <div class="panel-body pn">
                     <form method="post" action="model/input_cust.php" enctype="multipart/form-data" id="form-ui">
                        <!-- Basic -->
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Data Customer</h5>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <h6>kode lama</h6>
                              <label class="field prepend-icon">
                              <input type="text" name="code_lama" id="firstname" class="gui-input" placeholder="Kode Lama Kustomer">
                              <span class="field-icon">
                              <i class="fa fa-slack"></i>
                              </span>
                              </label>
                              <br/>
                              <br/>
                              <h6>Nama customer</h6>
                              <label class="field prepend-icon">
                              <input type="text" name="nama_cust" id="firstname" class="gui-input" placeholder="Nama Kustomer">
                              <span class="field-icon">
                              <i class="fa fa-user"></i>
                              </span>
                              </label>
                              <br/>
                              <br/>
                              <h6>Alamat Lengkap</h6>
                              <label class="field prepend-icon">
                              <textarea class="gui-textarea" id="comment" name="alamat_usaha" placeholder="Alamat Usaha"></textarea>
                              <span class="field-icon">
                              <i class="fa fa-list"></i>
                              </span>
                              </label>
                              <br/>
                              <br/>
                              <br/>
                              <?php
                                 // $lim = 5;
                                 
                                 // for($i=0;$i<$lim;$i++){
                                 // 	echo "<div class=\"row\">
                                                                  //     <div class=\"col-md-8\">
                                                                  //         <p><strong>Nama Produk</strong></p>
                                                                  //         <label class=\"field prepend-icon\">
                                                                  //             <input type=\"text\" name=\"nama_produk[]\" id=\"firstname\" class=\"gui-input\" placeholder=\"Nama Produk\">
                                                                  //             <span class=\"field-icon\">
                                 // 									<i class=\"fa fa-mobile\"></i>
                                 // 							</span>
                                                                  //         </label>
                                                                  //     </div>
                                                                  //     <div class=\"col-md-4\">
                                                                  //         <p><strong>QTY Produk</strong></p>
                                                                  //         <label class=\"field prepend-icon\">
                                                                  //             <input type=\"text\" name=\"qty[]\" class=\"gui-input\" placeholder=\"QTY\" title=\"jumlah barang\">
                                                                  //             <span class=\"field-icon\">
                                 // 									<i class=\"fa fa-slack\"></i>
                                 // 							</span>
                                                                  //         </label>
                                                                  //         <br/>
                                                                  //         <br/>
                                                                  //     </div>
                                                                  //     <div class=\"col-md-6\">
                                                                  //         <p><strong>foto Produk</strong></p>
                                                                  //         <input type=\"file\" name=\"foto_produk[]\" >
                                                                  //     </div>
                                                                  //     <br/>
                                                                  //     <br/>
                                                                  
                                                                  // </div>
                                                                  // <br/>
                                                                  // <br/>";
                                 
                                 // }
                                 
                                 ?>
                           </div>
                           <div class="col-md-6">
                              <h6>kota customer</h6>
                              <div class="row">
                                 <div class="col-xs-12">
                                    <label class="field select">
                                       <select class="form-control select2-single" name="code_cust3" id="kokab">
                                          <option value="" selected="selected">Kota/Kab</option>
                                          <?php
                                                $select = $db->prepare("SELECT cityorkab, citykabname FROM kode_area");
                                                $select->execute();
                                                $tampil = $select->fetchAll();
                                                     foreach($tampil as $value){
                                          ?>
                                             <option value="<?php echo $value['cityorkab']." ". $value['citykabname']?>"><?php echo $value['cityorkab']." ". $value['citykabname']?></option>
                                          <?php }?>
                                       </select>
                                       <i class="arrow"></i>
                                    </label>
                                 </div>
                              </div>
                              <br/>
                              <div class="row">
                                 <div class="col-md-6">
                                    <h6>No HP</h6>
                                    <label class="field prepend-icon">
                                    <input type="text" name="nohandphone_usaha" id="firstname" class="gui-input" placeholder="no. HP Usaha">
                                    <span class="field-icon">
                                    <i class="fa fa-mobile"></i>
                                    </span>
                                    </label>
                                    <br/>
                                    <br/>
                                 </div>
                                 <div class="col-md-6">
                                    <h6>No Telepon</h6>
                                    <label class="field prepend-icon">
                                    <input type="text" name="notelp_usaha" id="firstname" class="gui-input" placeholder="No Telp Usaha">
                                    <span class="field-icon">
                                    <i class="fa fa-phone"></i>
                                    </span>
                                    </label>
                                    <br/>
                                    <br/>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <h6>Jenis Bangunan</h6>
                                    <select class="select2-single form-control" name="jenis_bangunan">
                                       <option>Jenis Bangunan</option>
                                       <option value="Gerobak">Gerobak</option>
                                       <option value="RestoorCafe">Resto / Cafe</option>
                                       <option value="Warung">Warung</option>
                                       <option value="Toko">Toko</option>
                                       <option value="Gudang">Gudang</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <h6>Status Ijin Usaha</h6>
                                    <select class="select2-single form-control" name="status_ijin_usaha">
                                       <option>Status Ijin Usaha</option>
                                       <option value="Sub-Distributor">Sub-Distributor</option>
                                       <option value="Pengecer">Pengecer</option>
                                       <option value="PenjualLangsung">Penjual Langsung</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                              </div>
                           </div>
                           <div class="row">
                            <div class="col-md-12">
                                <h5>Dokumen Usaha</h5>
                            </div>
                        </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <h6>Data NPWP :</h6>
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>No. NPWP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="npwp_numb" id="firstname" class="gui-input" placeholder="No. NPWP">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto NPWP</strong></p>
                                       <input type="file" name="npwp_foto"/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>Tgl. Kadarluarsa Izin</strong></p>
                                       <input type="date" name="npwp_masa">
                                       <br/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <h6>Data SIUP :</h6>
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>No. SIUP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="siup_numb" id="firstname" class="gui-input" placeholder="No. SIUP">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto SIUP</strong></p>
                                       <input type="file" name="siup_foto"/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>Tgl. Kadarluarsa Izin</strong></p>
                                       <input type="date" name="siup_masa">
                                       <br/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <br/>
                                 <h6>Data SIUP-MB :</h6>
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>No. SIUP-MB</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="siupmb_numb" id="firstname" class="gui-input" placeholder="no. SIUPMB">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto SIUP-MB</strong></p>
                                       <input type="file" name="siupmb_foto"/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>Tgl. Kadarluarsa Izin</strong></p>
                                       <input type="date" name="siupmb_masa">
                                       <br/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <br/>
                                 <h6>Data SIUP Menengah :</h6>
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>No. SIUP Menengah</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="siupmenengah_numb" id="firstname" class="gui-input" placeholder="No. SIUP Menengah">
                                       <span class="field-icon">
                                       <i class="fa fa-phone"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto SIUP Menengah</strong></p>
                                       <input type="file" name="siupmenengah_foto"/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>Tgl. Kadarluarsa Izin</strong></p>
                                       <input type="date" name="siupmenengah_masa">
                                       <br/>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <br/>
                                 <h6>Data NPPBKC :</h6>
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>No. NPPBKC</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="nppbkc_numb" id="firstname" class="gui-input" placeholder="No. NPPBKC">
                                       <span class="field-icon">
                                       <i class="fa fa-phone"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto NPPBKC</strong></p>
                                       <input type="file" name="nppbkc_foto"/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>Tgl. Kadarluarsa Izin</strong></p>
                                       <input type="date" name="nppbkc_masa">
                                       <br/>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                               <br/><br/><br/>
                            <div class="col-md-12">
                                <h5>Data Penanggung Jawab</h5>
                            </div><br/><br/>
                        </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>Nama Penanggung jawab</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="nama_pj" class="gui-input" placeholder="Nama Penanggung Jawab">
                                       <span class="field-icon">
                                       <i class="fa fa-user"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>No KTP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="noktp_pj" class="gui-input" placeholder="No. KTP penanggung jawab">
                                       <span class="field-icon">
                                       <i class="fa fa-slack"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-12">
                                       <p><strong>Alamat Lengkap Penanggung Jawab</strong></p>
                                       <label class="field prepend-icon">
                                       <textarea class="gui-textarea" id="comment" name="alamat_pj" placeholder="Alamat Lengkap anda"></textarea>
                                       <span class="field-icon">
                                       <i class="fa fa-list"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-5">
                                       <p><strong>No. telp / No. handphone</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="notelp_pj" class="gui-input" placeholder="Kontak penanggungjawab">
                                       <span class="field-icon">
                                       <i class="fa fa-mobile"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-7">
                                       <p><strong>No. NPWP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="npwp_pj" class="gui-input" placeholder="No. NPWP Penanggung Jawab">
                                       <span class="field-icon">
                                       <i class="fa fa-mobile"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <br/>
                                    </div>
                                    <br/>
                                    <!-- <h6>Barang Yang dijual Saat ini :</h6> -->
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p><strong>Limit Kredit Dari distributor lain</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="limit_kredit_dist_lain" class="gui-input" placeholder="Limit Kredit Distributor Lain">
                                       <span class="field-icon">
                                       <i class="fa fa-dollar"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-6">
                                       <p><strong>Limit Kredit yang diajukan</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="limit_kredit" class="gui-input" placeholder="Limit Kredit yang Diajukan">
                                       <span class="field-icon">
                                       <i class="fa fa-dollar"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                 </div>
                                 <br/>
                                 <br/>
                                 <h6>Upload Foto Gedung</h6>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p><strong>Foto dari Jauh</strong></p>
                                       <input type="file" name="foto_gedung_jauh">
                                    </div>
                                    <div class="col-md-6">
                                       <p><strong>Foto dari Jauh</strong></p>
                                       <input type="file" name="foto_gedung_dekat">
                                    </div>
                                 </div>
                                 <br/><br/><br/><br/><br/><br/><br/>    
                                 <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button>
                              </div>
                           </div>
                        </div>
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

