<?php
 error_reporting(0);
	$host="149.129.248.246"; //host laptop bisa pakai 127.0.0.1 atau localhost
	$dbname="admin_pnj"; // nama database
	$user="admin_pnj"; // nama user dalam my sql
	$password="1sampaipnj"; // password user, jika kosong beri string kosong
	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
	  	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		if (!$db){
			echo "Koneksi Error";
		}else{
			//echo "Koneksi Berhasil";
		}
	}

	catch(PDOException $STH){
	  echo "<br>".$STH->getMessage();
	}
<<<<<<< HEAD
=======
$base_url = "http://demo.panjibaskoro.web.id/posku/";
>>>>>>> 04357639df83f3e81cbf5bd61efabeaf3bd94eef
ini_set('display_errors',0); 
?>
