<?php
require("../conn/koneksi.php");

    $nama = $_POST['supnama'];
    echo $npwp = $_POST['npwp'];
    echo $kode_bank= $_POST['bank'];
    echo $norek = $_POST['norek'];
    echo $notelp = $_POST['notelp'];
    echo $provinsi = $_POST['prov'];
    echo $kokab = $_POST['kokab'];
    echo $alamat = $_POST['alamat'];

    $query = $db->prepare("INSERT INTO supplier (supplier_nama,supplier_npwp,supplier_bank,supplier_norek,supplier_notelp,supplier_provinsi,supplier_kota,supplier_alamat)
                            VALUES(:nama,:npwp,:kode_bank,:norek,:notelp,:provinsi,:kokab,:alamat)");
    
    $query->bindParam(":nama",$nama);
    $query->bindParam(":npwp",$npwp);
    $query->bindParam(":kode_bank",$kode_bank);
    $query->bindParam(":norek",$norek);
    $query->bindParam(":notelp",$notelp);
    $query->bindParam(":provinsi",$provinsi);
    $query->bindParam(":kokab",$kokab);
    $query->bindParam(":alamat",$alamat);
    $query->execute();
    header('location:../managesup.php');

?>