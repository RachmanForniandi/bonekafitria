<?php 
if(empty($_SESSION['SES_ADMIN'])){
	echo "<center>";
	echo "<br><br><b>Maaf Akses anda ditolak !</b><br> Silahkan masukan data login anda dengan benar untuk mengakses halaman ini.";
	echo "</center>";
	include_once "login.php";
	exit;
	}
?>