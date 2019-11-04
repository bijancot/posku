<?php
require "../conn/koneksi.php";

$param = $_GET['prov'];
$param1 = $param;
$area = $db->prepare("SELECT area FROM kode_area where provinsi=:param group by area");
$area->bindParam(":param",$param);
$area->execute();
$result = $area->fetchAll();

foreach ($result as $key) {
    echo "<option value=\"".$key['area']."\">".$key['area']."</option>";
}
?>