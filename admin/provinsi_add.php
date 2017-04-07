<?php 
include_once "../library/inc.sesadmin.php";
include_once "../library/inc.library.php";

# MEMBACA TOMBOL ACTION
if(isset($_POST['btnSimpan'])){
	#BACA VARIABEL
	$txtNama = $_POST['txtNama '];
	$txtNama = str_replace("'","&Aacute;",$txtNama);
	
	$txtBiaya = $_POST['txtBiaya'];
	$txtBiaya = str_replace("'","&Aacute;",$txtNama);
	//Simpan ke database
	
}

//Membuat nilai data pada form input
$dataKode = buatKode("provinsi", "P");
$dataNama = isset($_POST['txtNama']) ? $_POST['txtNama'] :'';
$dataBiaya = isset($_POST['txtbiaya']) ? $_POST['txtbiaya'] :'';
?>
<form name="form1" method="post" action="">
  <table class="table-list" width="650" border="0" cellspacing="1" cellpadding="3">
    <tbody>
      <tr>
        <th colspan="3" scope="col">TAMBAH DATA PROVINSI</th>
      </tr>
      <tr>
        <td width="130">Kode</td>
        <td width="3">:</td>
        <td width="495"><input name="textfield" type="text" id="textfield" value="<?php echo $dataKode; ?>" size="10" maxlength="10"></td>
      </tr>
      <tr>
        <td>Nama Provinsi</td>
        <td>:</td>
        <td><input name="txtNama" type="text" id="txtNama" value="<?php echo $dataNama; ?>" size="70" maxlength="100"></td>
      </tr>
      <tr>
        <td>Biaya Kirim(Rp)</td>
        <td>:</td>
        <td><input name="txtBiaya" type="text" id="txtBiaya" value="<?php echo $dataBiaya; ?>" size="20" maxlength="12"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="button" name="btnSimpan" id="btnSimpan" value="SIMPAN" action="Submit form"></td>
      </tr>
    </tbody>
  </table>
</form>
