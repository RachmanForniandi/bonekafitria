<?php
if($_GET){
	switch($_GET['open']){
	case '':
		if(!file_exists("main.php")) die("Sorry,Empty Main Page !");
		include main.php;
	break;
	case 'Login':
		if(!file_exists("login.php")) die("Sorry,Empty Main Page !");
		include login.php;
	break;
	case 'Login-Validasi':
		if(!file_exists("login_validasi.php")) die("Sorry,Empty Main Page !");
		include login_validasi.php;
	break;
	case 'Logout':
		if(!file_exists("logout.php")) die("Sorry,Empty Main Page !");
		include logout.php;
	break;
	case 'Halaman Utaman':
		if(!file_exists("main.php")) die("Sorry,Empty Main Page !");
		include main.php;
	break;
	
	#Data-Password
	case 'Password-Admin':
		if(!file_exists("password_admin.php")) die("Sorry,Empty Main Page !");
		include password_admin.php;
	break;
	}
}
?>