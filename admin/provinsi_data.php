<table width="700" border="0" cellspacing="1" cellpadding="3">
  <tbody>
    <tr>
      <td style="font-size: 24px; text-align: right;"><strong>DATA PROVINSI</strong></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: right"><a href="" target="_self"><img src="../images/btn_add_data.png" width="134" height="36" alt="Tambah Data Provinsi"/></a></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tbody>
          <tr>
            <th width="9%" scope="col">No</th>
            <th width="31%" scope="col">Nama Provinsi</th>
            <th scope="col">Biaya Kirim(Rp)</th>
            <th width="20%" colspan="2" scope="col">Tools</th>
          </tr>
          <?php
			  $mySql = "SELECT * FROM provinsi ORDER BY nm_provinsi ASC";
			  $myQry = mysql_query($mySql, $koneksi) or die ("Query salah: ".mysql_error());
			  $nomor = 0;
			  while ($myData= mysql_fetch_array($myQry)){
				  $nomor++;
				  $Kode = $myData['kd_provinsi'];		  
		  ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $myData['nm_provinsi']; ?></td>
            <td><?php echo format_angka($myData['biaya_kirim']); ?></td>
            <td><a href="?open=Provinsi-Edit&Kode=<?php echo $kode; ?>" target="_self">Edit </a></td>
            <td><a href="?open=Provinsi-Delete&Kode=<?php echo $kode; ?>" target="_self">Delete</a></td>
          </tr>
          <?php }?>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
