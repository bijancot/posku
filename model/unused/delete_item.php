<?php
$id = $_GET['id'];

$query = $db->prepare("DELETE FROM `mmo_item` WHERE idItem= :id");
$query->bindParam(":id", $id);
$query->execute();
// header('location:?mmopilot=manageitem');
echo "<script type=\"text/javascript\">alert(' Data berhasil dihapus');document.location='?mmopilot=manageitem';</script>"
?>