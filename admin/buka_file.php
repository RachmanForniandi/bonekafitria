<?php
if($_GET){
	switch($_GET['open']){
	case '':
		if(!file_exists("main.php")) die("Sorry,Empty Main Page !");
		include "main.php";
	break;
	case 'Login':
		if(!file_exists("login.php")) die("Sorry,Empty Main Page !");
		include "login.php";
	break;
	case 'Login-Validasi':
		if(!file_exists("login_validasi.php")) die("Sorry,Empty Main Page !");
		include "login_validasi.php";
	break;
	case 'Logout':
		if(!file_exists("logout.php")) die("Sorry,Empty Main Page !");
		include "logout.php";
	break;
	case 'Halaman Utama':
		if(!file_exists("main.php")) die("Sorry,Empty Main Page !");
		include "main.php";
	break;
	
	#Data-Password
	case 'Password-Admin':
		if(!file_exists("password_admin.php")) die("Sorry,Empty Main Page !");
		include "password_admin.php";
	break;
	
	#Data_Provinsi
	case 'Provinsi-Data':
		if(!file_exists("provinsi_data.php"))die("Empty Page!");
		include "provinsi_data.php";
	break;
	case 'Provinsi-Add':
		if(!file_exists("provinsi-add.php"))die("Empty Page!");
		include "provinsi-add.php";
	break;
		case 'Provinsi-Edit':
		if(!file_exists("provinsi_edit.php"))die("Empty Page!");
		include "provinsi_edit.php";
	break;
	case 'Provinsi-Delete':
		if(!file_exists("provinsi_delete.php"))die("Empty Page!");
		include "provinsi_delete.php";
	break;
	
	}
}
?>