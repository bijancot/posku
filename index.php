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

                            </div>
                        </div>
                        <!-- first -->
                        <div id="first">
                        <h4>Data Customer</h4>
                        <div class="row">
                           <div class="col-md-6">
                           <p><strong>Kode Lama</strong></p>
                              <label class="field prepend-icon">
                              <input type="text" name="code_lama" id="firstname" class="gui-input" placeholder="Kode Lama Kustomer" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                              <span class="field-icon">
                              <i class="fa fa-slack"></i>
                              </span>
                              </label>
                              <br/>
                              <br/>
                           </div>
                           <div class="col-md-6">
                           <p><strong>Kota CUstomer</strong></p>
                                    <label class="field select">
                                       <select class="form-control select2-single" name="code_cust3" id="kokabhoo">
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
                                    </label>
                                    <div id="pilih">
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-12">
                                    <p><strong>Nama Customer</strong></p>
                                       <label class="field prepend-icon">
                                          <input type="text" name="nama_cust" id="firstname" class="gui-input" placeholder="Nama Kustomer" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                          <span class="field-icon">
                                          <i class="fa fa-user"></i>
                                          </span>
                                       </label>
                                    <br/>
                                    <br/>
                                    <p><strong>Alamat lengkap customer</strong></p>
                                    <div class="row">
                                          <div class="col-md-6">
                                          <p><strong>Alamat Kelurahan</strong></p>
                                             <label class="field prepend-icon">
                                                <input type="text" name="alamat_kelurahan" id="firstname" class="gui-input" placeholder="Alamat Kelurahan" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <span class="field-icon">
                                                <i class="fa fa-home"></i>
                                                </span>
                                             </label>
                                          </div>
                                          <div class="col-md-6">
                                          <p><strong>Alamat Kecamatan</strong></p>
                                             <label class="field prepend-icon">
                                                <input type="text" name="alamat_kecamatan" id="firstname" class="gui-input" placeholder="Alamat Kecamatan" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <span class="field-icon">
                                                <i class="fa fa-home"></i>
                                                </span>
                                             </label>
                                          </div>
                                          
                                       </div><br/><br/>
                                       <label class="field prepend-icon">
                                       <textarea class="gui-textarea" id="comment" name="alamat_usaha" placeholder="Alamat Usaha" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);"></textarea>
                                       <span class="field-icon">
                                       <i class="fa fa-list"></i>
                                       </span>
                                       </label>
                                    <br/>
                                    <br/>
                                    </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><strong>No. Telp</strong></p>
                                    <label class="field prepend-icon">
                                    <input type="text" name="notelp_usaha" id="firstname" class="gui-input" placeholder="No Telp Usaha" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    <span class="field-icon">
                                    <i class="fa fa-phone"></i>
                                    </span>
                                    </label>
                                    <br/>
                                    <br/>
                                    <p><strong>No. Hp</strong></p>
                                    <label class="field prepend-icon">
                                    <input type="text" name="nohandphone_usaha" id="firstname" class="gui-input" placeholder="no. HP Usaha" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    <span class="field-icon">
                                    <i class="fa fa-mobile"></i>
                                    </span>
                                    </label>
                                    <br/>
                                    <br/>
                                 </div>
                                 <div class="col-md-6">
                                 <p><strong>Jenis Bangunan</strong></p>
                                    <select class="select2-single form-control" name="jenis_bangunan" >
                                       <option>Jenis Bangunan</option>
                                       <option value="Gerobak">Gerobak</option>
                                       <option value="RestoorCafe">Resto / Cafe</option>
                                       <option value="Warung">Warung</option>
                                       <option value="Toko">Toko</option>
                                       <option value="Gudang">Gudang</option>
                                    </select>
                                    <br/><br/>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- first -->
                        <!-- second -->
                        <br/><br/><br/>
                        <div id="second">
                           <h4>Dokumen Perizinan Usaha</h4>
                           <div class="row">
                              <h6>Data NPWP : </h6><br/>
                              <div class="col-md-8">
                                       <p><strong>No. NPWP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" id="npwp" name="npwp_numb" id="firstname" class="gui-input npwp" placeholder="No. NPWP" maxlength="20">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto NPWP</strong></p>
                                       <input type="file" name="npwp_foto"/>
                                    </div>
                                    <div class="col-md-4">
                                       <p><strong>Status NPWP</strong></p>
                                       <!-- <input type="date" name="npwp_masa"> -->
                                          <h6><div class="row">
                                             <div class="col-md-12">
                                             <input type="radio" name="npwp_masa" value="AKTIF">Aktif</input>
                                       
                                             </div>
                                             <div class="col-md-12">
                                             <input type="radio" name="npwp_masa" value="TIDAK AKTIF">Tidak Aktif</input>
                                             </div>
                                          </div>
                                          </h6>
                                       <br/>
                                    </div>
                           </div>
                           <div class="row">
                              <br/><br/><h6>Data SIUP : </h6><br/>
                                    <div class="col-md-8">
                                       <p><strong>No. SIUP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="siup_numb" id="firstname" class="gui-input" placeholder="No. SIUP" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto SIUP</strong></p>
                                       <input type="file" name="siup_foto"/>
                                                <br/><br/>
                                       <div class="row">
                                          <div class="col-md-6">
                                          <p><strong>Kode Kbli</strong></p>
                                             <input type="text" name="kbli" maxlength="5" class="gui-input" placeholder="kode kbli">
                                          </div>
                                          <div class="col-md-6">
                                          <p><strong>Tahun Kbli</strong></p>
                                             <input type="text" name="kbli_tahun" class="gui-input" placeholder="tahun kbli">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <p><strong>Tgl. Terbit SIUP</strong></p>
                                       <input type="date" name="siup_masa">
                                       <br/><br/>
                                       <p><strong>Jenis SIUP</strong></p>
                                          <select class="select2-single form-control" name="jenis_siup" >
                                             <option>Jenis SIUP</option>
                                             <option value="KECIl">Kecil</option>
                                             <option value="MENENGAH">Menengah</option>
                                             <option value="BESAR">Besar</option>
                                          </select>
                                    <br/><br/>
                                    </div>
                           </div>
                           <div class="row">
                           <br/><br/><h6>Data SIUP-MB :</h6><br/>
                           <div class="col-md-8">
                                       <p><strong>No. SIUP-MB</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="siupmb_numb" id="firstname" class="gui-input" placeholder="no. SIUPMB" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-at"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto SIUP-MB</strong></p>
                                       <input type="file" name="siupmb_foto"/>
                                    </div>
                                    <div class="col-md-4">
                                       <p><strong>Tgl. Kadarluarsa SIUP-MB</strong></p>
                                       <input type="date" name="siupmb_masa">
                                       <br/><br/>
                                       <p><strong>Status Ijin usaha</strong></p>
                                    <select class="select2-single form-control" name="status_ijin_usaha">
                                       <option>Status Ijin Usaha</option>
                                       <option value="Sub-Distributor">Sub-Distributor</option>
                                       <option value="Pengecer">Pengecer</option>
                                       <option value="PenjualLangsung">Penjual Langsung</option>
                                    </select>
                                    </div>
                           </div>
                           <div class="row">
                           <br/><br/><h6>Data NPPBKC :</h6><br/>
                           <div class="col-md-8">
                                       <p><strong>No. NPPBKC</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="nppbkc_numb" id="firstname" class="gui-input" placeholder="No. NPPBKC" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-phone"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <p><strong>File foto NPPBKC</strong></p>
                                       <input type="file" name="nppbkc_foto"/>
                                    </div>
                                    <div class="col-md-4">
                                       <p><strong>Tgl. Kadarluarsa NPPBKC</strong></p>
                                       <input type="date" name="nppbkc_masa">
                                       <br/>
                                    </div>
                           </div>
                        </div>
                        <!-- second -->
                        <!-- third -->
                        <br/><br/><br/><br/>
                        <div id="third">
                           <h4>Data Penanggung Jawab Usaha</h4>
                           <br/>
                           <div class="row">
                                    <div class="col-md-7">
                                       <p><strong>Nama Penanggung jawab</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="nama_pj" class="gui-input" placeholder="Nama Penanggung Jawab" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
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
                                       <input type="text" name="noktp_pj" class="gui-input ktp" placeholder="No. KTP penanggung jawab">
                                       <span class="field-icon">
                                       <i class="fa fa-slack"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                        </div>
                        <div class="row">
                        <div class="col-md-5">
                                       <p><strong>No. telp / No. handphone</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="notelp_pj" class="gui-input" placeholder="Kontak penanggungjawab" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-mobile"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-6">
                                       <p><strong>No. NPWP</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="npwp_pj" class="form-control npwp" placeholder="No. NPWP Penanggung Jawab" maxlength="20">
                                       <span class="field-icon">
                                       <i class="fa fa-mobile"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                       <br/>
                                </div>
                                    </div>
                                    <div class="col-md-12">
                                    <p><strong>Alamat Lengkap Penanggung Jawab</strong></p>
                                    <div class="row">
                                          <div class="col-md-6">
                                          <p><strong>Alamat Kelurahan</strong></p>
                                             <label class="field prepend-icon">
                                                <input type="text" name="alamat_pj_kelurahan" id="firstname" class="gui-input" placeholder="Alamat Kelurahan" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <span class="field-icon">
                                                <i class="fa fa-home"></i>
                                                </span>
                                             </label>
                                          </div>
                                          <div class="col-md-6">
                                          <p><strong>Alamat Kecamatan</strong></p>
                                             <label class="field prepend-icon">
                                                <input type="text" name="alamat_pj_kecamatan" id="firstname" class="gui-input" placeholder="Alamat Kecamatan" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <span class="field-icon">
                                                <i class="fa fa-home"></i>
                                                </span>
                                             </label>
                                          </div>
                                          
                                       </div><br/><br/>
                                       <label class="field prepend-icon">
                                       <textarea class="gui-textarea" id="comment" name="alamat_pj" placeholder="Alamat Lengkap anda" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);"></textarea>
                                       <span class="field-icon">
                                       <i class="fa fa-list"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                       <p><strong>Limit Kredit Dari distributor lain</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="limit_kredit_dist_lain" class="gui-input" placeholder="Limit Kredit Distributor Lain" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-dollar"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-6">
                                       <h6>Foto gedung : </h6>
                                       <p><strong>Foto dari Jauh</strong></p>
                                       <input type="file" name="foto_gedung_jauh">
                                    </div>
                                 </div>
                                 <div class="row">
                                 <div class="col-md-6">
                                       <p><strong>Limit Kredit yang diajukan</strong></p>
                                       <label class="field prepend-icon">
                                       <input type="text" name="limit_kredit" class="gui-input" placeholder="Limit Kredit yang Diajukan" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                       <span class="field-icon">
                                       <i class="fa fa-dollar"></i>
                                       </span>
                                       </label>
                                       <br/>
                                       <br/>
                                    </div>
                                    <div class="col-md-6">
                                       <br/>
                                       <p><strong>Foto dari Dekat</strong></p>
                                       <input type="file" name="foto_gedung_dekat">
                                    </div><br/><br/><br/><br/><br/><br/><br/><br/>

                                 </div>
                        </div>
                        <!-- third -->
                        <!-- forth -->
                       <div id="forth">
                       <h4>Data Produk yang dijual saat ini</h4>
                       <?php
                        $lim = 5;
                                 
                                 for($i=0;$i<$lim;$i++){
                                 	echo "<div class=\"row\">
                                                                      <div class=\"col-md-8\">
                                                                          <p><strong>Nama Produk</strong></p>
                                                                          <label class=\"field prepend-icon\">
                                                                              <input type=\"text\" name=\"nama_produk[]\" id=\"firstname\" class=\"gui-input\" placeholder=\"Nama Produk\" oninput=\"let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);\">
                                                                              <span class=\"field-icon\">
                                 									<i class=\"fa fa-mobile\"></i>
                                 							</span>
                                                                          </label>
                                                                      </div>
                                                                      <div class=\"col-md-4\">
                                                                          <p><strong>QTY Produk</strong></p>
                                                                          <label class=\"field prepend-icon\">
                                                                              <input type=\"text\" name=\"qty[]\" class=\"gui-input\" placeholder=\"QTY\" title=\"jumlah barang\">
                                                                              <span class=\"field-icon\">
                                 									<i class=\"fa fa-slack\"></i>
                                 							</span>
                                                                          </label>
                                                                          <br/>
                                                                          <br/>
                                                                      </div>
                                                                      <div class=\"col-md-6\">
                                                                          <p><strong>foto Produk</strong></p>
                                                                          <input type=\"file\" name=\"foto_produk[]\" >
                                                                      </div>
                                                                      <br/>
                                                                      <br/>
                                                                  
                                                                  </div>
                                                                  <br/>
                                                                  <br/>";
                                 
                                 }
                        ?>
                       </div>
                       <button type="submit" class="btn btn-block btn-success" name="submit"><strong>Simpan Data</strong></button>
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

