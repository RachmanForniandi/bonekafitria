<?php
//konek ke web server lokal
$myHost="localhost";
$myUser="root";
$myPass="";
$Db="toko_bonekadb";

$koneksi= mysql_connect($myHost,$myUser,$myPass);
if(! $koneksi){
	echo "Failed Connection !";
  }
//Memilih database di Mysql server
mysql_select_db($Db) or die("Database not found !");
	
?>