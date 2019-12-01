<?php
require "../conn/koneksi.php";

 $code_lama = $_POST['code_lama'];
 $code_cust3 = $_POST['code_cust3'];

 $kolo = explode(" ",$code_cust3);

 $kokab = $kolo[0];
 $nakokab = $kolo[1]." ".$kolo[2];

 $init = "sa";
 $qq = $db->prepare("SELECT * FROM master_counter where id!=:id");
 $qq->bindParam(":id",$init);
 $qq->execute();
 $haq = $qq->fetchAll();

foreach ($haq as $key) {
    $idazero = $key['cust_area_a']+1;
    
    if($idazero<=9){
        $ida="000".$idazero;
    }else if($idazero>9&&$idazero<=99){
        $ida="00".$idazero;
    }else if($idazero>99&&$idazero<=999){
        $ida="0".$idazero;
    }else if($idazero>999&&$idazero<=9999){
        $ida=$idazero;
    }

    $idozero = $key['cust_area_b']+1;

    if($idozero<=9){
        $ido="000".$idozero;
    }else if($idozero>9&&$idozero<=99){
        $ido="00".$idozero;
    }else if($idozero>99&&$idozero<=999){
        $ido="0".$idozero;
    }else if($idozero>999&&$idozero<=9999){
        $ido=$idozero;
    }
}
 $koloa="asd";
 $querykokab = $db->prepare("SELECT * FROM kode_area where cityorkab=:cityorkab and citykabname=:citykabname");
    $querykokab->bindParam(":cityorkab",$kokab);
    $querykokab->bindParam(":citykabname",$nakokab);
    $querykokab->execute();
    $hasol = $querykokab->fetchAll();
    foreach ($hasol as $key) {
        //echo $key['area'];
        if(strpos($key['area'],'JTG')===0||strpos($key['area'],'JTM')===0||strpos($key['area'],'LPT')===0){
            $code_cust="A".$key['kode_sub'].$key['kode_kokab'].$ida;
            $koloa="counter_a";
        }if(strpos($key['area'],'DKI')===0||strpos($key['area'],'JBR')===0||strpos($key['area'],'LPB')===0){

            $code_cust="B".$key['kode_sub'].$key['kode_kokab'].$ido;
            $koloa="counter_b";
        }
    }

    // echo $kolo;

 $nama_cust = $_POST['nama_cust'];


 $alamat_usaha = $_POST['alamat_usaha'];
 $notelp_usaha = $_POST['notelp_usaha'];
 $nohandphone_usaha = $_POST['nohandphone_usaha'];
 $jenis_bangunan = $_POST['jenis_bangunan'];
 $status_ijin_usaha = $_POST['status_ijin_usaha'];


 $npwp_numb = $_POST['npwp_numb'];
 $npwp_foto = $_FILES['npwp_foto']['name'];
 $npwp_foto_tmp = $_FILES['npwp_foto']['tmp_name'];
 $_FILES['npwp_foto'];
 $npwp_masa = $_POST['npwp_masa'];
 $siup_numb = $_POST['siup_numb'];
 $siup_foto = $_FILES['siup_foto']['name'];
 $siup_foto_tmp = $_FILES['siup_foto']['tmp_name'];
 $siup_masa = $_POST['siup_masa'];
 $siupmb_numb = $_POST['siupmb_numb'];
 $siupmb_foto = $_FILES['siupmb_foto']['name'];
 $siupmb_foto_tmp = $_FILES['siupmb_foto']['tmp_name'];
 $siupmb_masa = $_POST['siupmb_masa'];
 $siupmenengah_numb = $_POST['siupmenengah_numb'];
 $siupmenengah_foto = $_FILES['siupmenengah_foto']['name'];
 $siupmenengah_foto_tmp = $_FILES['siupmenengah_foto']['tmp_name'];
 $siupmenengah_masa = $_POST['siupmenengah_masa'];
 $nppbkc_numb = $_POST['nppbkc_numb'];
 $nppbkc_foto = $_FILES['nppbkc_foto']['name'];
 $nppbkc_foto_tmp = $_FILES['nppbkc_foto']['tmp_name'];
 $nppbkc_masa = $_POST['nppbkc_masa'];
 echo $kbli = $_POST['kbli'];
 echo $kbli_tahun = $_POST['kbli_tahun'];
 echo $kelurahan = $_POST['alamat_kelurahan'];
 echo $kecamatan = $_POST['alamat_kecamatan'];

$limit_kredit = $_POST['limit_kredit'];
$limit_kredit_dist_lain = $_POST['limit_kredit_dist_lain'];

$foto_gedung_jauh = $_FILES['foto_gedung_jauh']['name'];
$foto_gedung_jauh_tmp = $_FILES['foto_gedung_jauh']['tmp_name'];
$foto_gedung_dekat = $_FILES['foto_gedung_dekat']['name'];
$foto_gedung_dekat_tmp = $_FILES['foto_gedung_dekat']['tmp_name'];

 $nama_produk = $_POST['nama_produk'];
 $qty_produk = $_POST['qty'];
 $foto_produk = $_FILES['foto_produk']['name'];
 $foto_produk_tmp = $_FILES['foto_produk']['tmp_name'];


 $nama_pj = $_POST['nama_pj'];
 $noktp_pj = $_POST['noktp_pj'];
 $alamat_pj = $_POST['alamat_pj'];
 $notelp_pj = $_POST['notelp_pj'];
 $npwp_pj = $_POST['npwp_pj'];
 echo $kelurahan_pj = $_POST['alamat_pj_kelurahan'];
 echo $kecamatan_pj = $_POST['alamat_pj_kecamatan'];

 for($a=0; $a<sizeof($nama_produk);$a++){
    if($nama_produk[$a]==null || $foto_produk_tmp[$a]==null){
        continue;
    }else{
        $foto_produk_tmp[$a];
        $fotoProduk[$a] = "../images/produk/".$foto_produk[$a];
        $kolo[$a] = "../images/produk/".$foto_produk[$a];
        //var_dump(move_uploaded_file($foto_produk_tmp[$a],$fotoProduk[$a]));  
        if(move_uploaded_file($foto_produk_tmp[$a],$fotoProduk[$a])){
            $queryProduk = $db->prepare("INSERT INTO `produk_customer`(`foto`,`qty`,`nama`,`no_customer`) VALUES(:foto,:qty,:nama,:code_customer)");
            $queryProduk->bindParam(":foto",$kolo[$a]);
            $queryProduk->bindParam(":qty",$qty_produk[$a]);
            $queryProduk->bindParam(":nama",$nama_produk[$a]);
            $queryProduk->bindParam(":code_customer",$code_cust);
            $queryProduk->execute();
        }else{
            echo "error";
        }
    }
 }

 $queryPj = $db->prepare("INSERT INTO master_pj (nama,notelp,alamat,noktp,nonpwp,kelurahan,kecamatan) values(:nama,:notelp,:alamat,:noktp,:nonpwp,:kelurahan,:kecamatan)");
 
 $queryPj->bindParam(":nama",$nama_pj);
 $queryPj->bindParam(":notelp",$notelp_pj);
 $queryPj->bindParam(":alamat",$alamat_pj);
 $queryPj->bindParam(":noktp",$noktp_pj);
 $queryPj->bindParam(":nonpwp",$npwp_pj);
 $queryPj->bindParam(":kelurahan",$kelurahan_pj);
 $queryPj->bindParam(":kecamatan",$kecamatan_pj);
 
 $queryPj->execute();


 $fotoNpwp = "../images/npwp/".$npwp_foto;
move_uploaded_file($npwp_foto_tmp, $fotoNpwp);

$fotoSiup = "../images/siup/".$siup_foto;
move_uploaded_file($siup_foto_tmp, $fotoSiup);

$fotoSiupMb = "../images/siupmb/".$siupmb_foto;
move_uploaded_file($siupmb_foto_tmp, $fotoSiupMb);

$fotoSiupMenengah = "../images/siupmenengah/".$siupmenengah_foto;
move_uploaded_file($siupmenengah_foto_tmp, $fotoSiupMenengah);

$fotoNppbkc = "../images/nppbkc/".$nppbkc_foto;
move_uploaded_file($nppbkc_foto_tmp, $fotoNppbkc);

$fotoGedungJauh = "../images/jauh/".$foto_gedung_jauh;
move_uploaded_file($foto_gedung_jauh_tmp, $fotoGedungJauh);

$fotoGedungDekat = "../images/dekat/".$foto_gedung_dekat;
move_uploaded_file($foto_gedung_dekat_tmp, $fotoGedungDekat);

$querySekunder = $db->prepare("SELECT id_pj from master_pj where nama=:nama");
$querySekunder->bindParam(":nama",$nama_pj);
$querySekunder->execute();
$hasil = $querySekunder->fetchAll();

$id_pj="";

foreach ($hasil as $key) {
    $id_pj = $key['id_pj'];
}

$mainQuery = $db->prepare("INSERT INTO master_customer(code_lama,
                            code_cust,
                            nama_cust,
                            alamat_usaha,
                            notelp_usaha,
                            nohandphone_usaha,
                            npwp_numb,npwp_foto,npwp_masa,
                            siup_numb,siup_foto,siup_masa,
                            siupmb_numb,siupmb_foto,siupmb_masa,
                            siupmenengah_numb,siupmenengah_foto,siupmenengah_masa,
                            nppbkc_numb,nppbkc_foto,nppbkc_masa,
                            jenis_bangunan,status_ijin_usaha,
                            id_pj,
                            limit_kredit,limit_kredit_dist_lain,
                            foto_gedung_jauh,foto_gedung_dekat,kode_kbli,tahun_kbli,kelurahan,kecamatan) VALUES(
                            :code_lama,
                            :code_cust,
                            :nama_cust,
                            :alamat_usaha,
                            :notelp_usaha,
                            :nohandphone_usaha,
                            :npwp_numb,:npwp_foto,:npwp_masa,
                            :siup_numb,:siup_foto,:siup_masa,
                            :siupmb_numb,:siupmb_foto,:siupmb_masa,
                            :siupmenengah_numb,:siupmenengah_foto,:siupmenengah_masa,
                            :nppbkc_numb,:nppbkc_foto,:nppbkc_masa,
                            :jenis_bangunan,:status_ijin_usaha,
                            :id_pj,
                            :limit_kredit,:limit_kredit_dist_lain,
                            :foto_gedung_jauh,:foto_gedung_dekat,:kode_kbli,:tahun_kbli,:kelurahan,:kecamatan)");


$mainQuery->bindParam(":code_lama",$code_lama);
$mainQuery->bindParam(":code_cust",$code_cust);
$mainQuery->bindParam(":nama_cust",$nama_cust);
$mainQuery->bindParam(":alamat_usaha",$alamat_usaha);
$mainQuery->bindParam(":notelp_usaha",$notelp_usaha);
$mainQuery->bindParam(":nohandphone_usaha",$nohandphone_usaha);
$mainQuery->bindParam(":npwp_numb",$npwp_numb);
$mainQuery->bindParam(":npwp_foto",$fotoNpwp);
$mainQuery->bindParam(":npwp_masa",$npwp_masa);
$mainQuery->bindParam(":siup_numb",$siup_numb);
$mainQuery->bindParam(":siup_foto",$fotoSiup);
$mainQuery->bindParam(":siup_masa",$siup_masa);
$mainQuery->bindParam(":siupmb_numb",$siupmb_numb);
$mainQuery->bindParam(":siupmb_foto",$fotoSiupMb);
$mainQuery->bindParam(":siupmb_masa",$siupmb_masa);
$mainQuery->bindParam(":siupmenengah_numb",$siupmenengah_numb);
$mainQuery->bindParam(":siupmenengah_foto",$fotoSiupMenengah);
$mainQuery->bindParam(":siupmenengah_masa",$siupmenengah_masa);
$mainQuery->bindParam(":nppbkc_numb",$nppbkc_numb);
$mainQuery->bindParam(":nppbkc_foto",$fotoNppbkc);
$mainQuery->bindParam(":nppbkc_masa",$nppbkc_masa);
$mainQuery->bindParam(":jenis_bangunan",$jenis_bangunan);
$mainQuery->bindParam(":status_ijin_usaha",$status_ijin_usaha);
$mainQuery->bindParam(":id_pj",$id_pj);
$mainQuery->bindParam(":limit_kredit",$limit_kredit);
$mainQuery->bindParam(":limit_kredit_dist_lain",$limit_kredit_dist_lain);
$mainQuery->bindParam(":foto_gedung_jauh",$fotoGedungJauh);
$mainQuery->bindParam(":foto_gedung_dekat",$fotoGedungDekat);
$mainQuery->bindParam(":kode_kbli",$kbli);
$mainQuery->bindParam(":tahun_kbli",$kbli_tahun);
$mainQuery->bindParam(":kelurahan",$kelurahan);
$mainQuery->bindParam(":kecamatan",$kecamatan);

$mainQuery->execute();

echo $koloa; 
$inito ="1";
if($koloa=="counter_a"){
    $upcounter1 = $db->prepare("UPDATE master_counter set cust_area_a=:ida where id=:id");
    $upcounter1->bindParam(":id",$inito);
    $upcounter1->bindParam(":ida",$ida);
    $upcounter1->execute();
}elseif($koloa=="counter_b"){
    $upcounter = $db->prepare("UPDATE master_counter set cust_area_b=:ido where id=:id");
    $upcounter->bindParam(":id",$inito);
    $upcounter->bindParam(":ido",$ido);
    $upcounter->execute();
}

header('location:../manage.php');

?>
