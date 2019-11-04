<?php
require "../conn/koneksi.php";

$param = $_GET['kode'];
$area = $db->prepare("SELECT cityorkab,citykabname from kode_area where area=:area");;
$area->bindParam(":area",$param);
$area->execute();
$result = $area->fetchAll();

foreach ($result as $key) {
    echo "<option value=\"".$key['cityorkab']." ".$key['citykabname']."\">".$key['cityorkab']." ".$key['citykabname']."</option>";
}
?>