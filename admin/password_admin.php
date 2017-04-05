<?php
include_once "../library/inc.sesadmin.php";
#Tombol Simpan diklik
if(isset($_POST['btnSimpan'])){
	//Baca variabel form
	$txtPassLama= $_POST['txtPassLama'];
	$txtPassBaru= $_POST['txtPassBaru'];
	
	//Untuk proses validasi di form
	$pesanError = array();
	if(trim($txtPassLama)==""){
		$pesanError[]="Data<b> Password Lama </b> belum diisi !";
		}
	if(trim($txtPassLama)==""){
		$pesanError[]="Data<b> Password Lama </b> belum diisi !";
		}
	//Validasi Password lama(harus benar password nya)
	$sqlCek= "SELECT * FROM admin WHERE username='admin' 
			 AND password='".md5($txtPassLama)."'";
	$qryCek= mysql_query($sqlCek, $koneksi) or die("Query periksa salah : ".mysql_error());
	if(mysql_num_rows($qryCek) <1){
		$pesanError[]="Maaf, <b>Password anda salah</b>...Silahkan ulangi";
		}
		#Menampilkan pesan error di bagian skrip validasi form
		if(count($pesanError)>=1){
			echo "<div class='msgbox'>";
			echo "<img src='../images/attention.png'>";
					$noPesan=0;
					foreach($pesanError as $indeks=>$pesan_tampil){
					$noPesan++;
			echo "&nbsp; $noPesan. $pesan_tampil<br>";
						}
			echo "</div><br>";
			}else{
			#Simpan data ke database
			$mySql= "UPDATE admin SET password='".md5($txtPassBaru)."'";
			$myQry= mysql_query($mySql, $koneksi);
			if($myQry){
				echo "<meta http-equiv='refresh' content='0; url=?page=Logout&Info=Password Berhasil diganti'>";
				}
			} 
	}

//Membaca Data Login Untuk diedit
$mySql = "SELECT * FROM admin";
$myQry = mysql_query($mySql, $koneksi) or die("Query salah: ".mysql_error());
$myData = mysql_fetch_array($myQry);
?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table class="table-list" width="650" border="0" cellspacing="1" cellpadding="3">
    <tbody>
      <tr>
        <th colspan="3" scope="col">GANTI PASSWORD </th>
      </tr>
      <tr>
        <td width="158">Username</td>
        <td width="3">:</td>
        <td width="467"><?php echo $myData['username']; ?></td>
      </tr>
      <tr>
        <td>Password Lama</td>
        <td>:</td>
        <td><input name="txtPassLama" type="password" id="txtPassLama" size="40" maxlength="30"></td>
      </tr>
      <tr>
        <td>Password Baru</td>
        <td>:</td>
        <td><input name="txtPassBaru" type="password" id="txtPassBaru" size="40" maxlength="30"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnSimpan" id="btnSimpan" value="SIMPAN" ></td>
      </tr>
    </tbody>
  </table>
</form>
