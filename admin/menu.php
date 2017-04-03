<?php
if(isset($_SESSION['SES_ADMIN'])){
	#Jika dikenali yang login adalah Admin
?>
  <ul>
  <li><a href='' title='Halaman Utama'>Home</a></li>
  <li><a href='' title='Password Admin'>Password Admin</a></li>
  <li><a href='' title='Provinsi' target="_self">Data Provinsi</a></li>
  <li><a href='' title='Kategori' target="_self">Data Kategori</a></li>
  <li><a href='' title='Barang' target="_self">Data Barang</a></li>
  <li><a href='' title='Pelanggan' target="_self">Data Pelanggan</a></li>
  <li><a href='' title='Pemesanan Barang' target="_self">Pemesanan Barang</a></li>
  <li><a href='' title='Konfirmasi Transfer' target="_self">Konfirmasi Transfer</a></li>
  <li><a href='' title='Laporan' target="_blank">Laporan</a></li>
  <li><a href='' title='Logout (Exit)'>Logout</a></li>
  </ul>
  <?php
   }else{
	   //Jika belum ada yang Login 
  ?>  
  <ul>
  <li><a href='' title='Login' target="_self">Login</a></li>
  </ul>
<?php } ?>