<?php
require "../conn/koneksi.php";

 $code_lama = $_POST['code_lama'];
 $code_cust = $_POST['code_cust1']."/".$_POST['code_cust2']."/".$_POST['code_cust3'];
 $nama_cust = $_POST['nama_cust'];
 $alamat_usaha = $_POST['alamt_usaha'];
 $notelp_usaha = $_POST['notelp_usaha'];
 $nohandphone_usaha = $_POST['nohandphone_usaha'];
 $jenis_bangunan = $_POST['jenis_bangunan'];
 $status_ijin_usaha = $_POST['status_ijin_usaha'];


 $npwp_numb = $_POST['npwp_numb'];
 $npwp_foto = $_FILES['npwp_foto'];
 $npwp_masa = $_POST['npwp_masa'];
 $siup_numb = $_POST['siup_numb'];
 $siup_foto = $_FILES['siup_numb'];
 $siup_masa = $_POST['siup_masa'];
 $siupmb_numb = $_POST['siupmb_numb'];
 $siupmb_foto = $_FILES['siupmb_foto'];
 $siupmb_masa = $_POST['siupmb_masa'];
 $siupmenengah_numb = $_POST['siupmenengah_numb'];
 $siupmenengah_foto = $_FILES['siupmenengah_foto'];
 $siupmenengah_masa = $_POST['siupmenengah_masa'];
 $nppbkc_numb = $_POST['nppbkc_numb'];
 $nppbkc_foto = $_FILES['nppbkc_foto']['name'];
 $nppbkc_masa = $_POST['nppbkc_masa'];


 $nama_produk = $_POST['nama_produk'];

 var_dump($nama_produk);
?>