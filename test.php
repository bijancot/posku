<?php
require "conn/koneksi.php";

$select = $_POST['selected'];

$kolo = explode(" ",$select);

$kokab = $kolo[0];
$kokabname = $kolo[1]." ".$kolo[2];

$query = $db->prepare("SELECT * from kode_area where cityorkab=:cityorkab and citykabname=:citykabname");
$query->bindParam(":cityorkab",$kokab);
$query->bindParam(":citykabname",$kokabname);
$query->execute();

$hasil = $query->fetchAll();

foreach ($hasil as $key) {
    echo "<h5>Area yang dipilih : ".$key['area']."</h5>";
}

?>