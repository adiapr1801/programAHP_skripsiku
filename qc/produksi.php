<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<?php
			include("section/nav.php");
		?>
        <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
  <?php
  	include("API/koneksi.php");
  	$date=date('Y-m-d');
  ?>
	  <table width="100%" border="0">
  <tr>
    <th scope="col"><h2 class="mb-4">Produksi</h2></th>
    <th scope="col" align="right"><P align="right"><b>
		<script type='text/javascript'>

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

</script>
	<br>
<script type='text/javascript'>
menit = date.getMinutes();
jam = date.getHours();
document.write(+jam+" : "+menit);
	</script>
	</P></th>
  </tr>
 <?php
	$date=date('Y-m-d');
	$q1=mysqli_query($koneksi,"select nama_karyawan from tb_karyawan");
	$q=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan where tb_karyawan.NPK=tb_produksi.NPK AND tanggal='$date'")or die(mysql_error);
?>
</table>
      <table width="75%" border="1">
        <tr>
		  <th width="17%" scope="col"><div align="center">Nama Operator </div></th>
          <th width="34%" scope="col"><div align="center">Hasil</div></th>
          <th width="16%" scope="col"><div align="center">Jumlah</div></th>
          <th width="26%" scope="col"><div align="center">Status</div></th>
        </tr>
<?php
	while($d = mysqli_fetch_array($q1)){
?>
 
        <tr>
          <td><div align="center"><?php echo $d['nama_karyawan']; ?> </div></td>
          <td>
		  <?php
		  $q=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tanggal='$date' AND tb_karyawan.nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d1 = mysqli_fetch_array($q)){
		  		echo " ".$d1['hasil']." ";
		  }
		  
		  ?>	  
		  </td>
          <td><div align="center">
		  
		  <?php
		  $q3=mysqli_query($koneksi,"select sum(hasil) from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tanggal='$date' AND tb_karyawan.nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d3 = mysqli_fetch_array($q3)){
		  		echo " ".$d3['sum(hasil)']." ";
		  }
		  
		  ?>
		  
		  </div></td>
          <td><div align="center"><b><font color="#00CC00">
		  
		  <?php
		  $q4=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tanggal='$date' AND tb_karyawan.nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  $d4 = mysqli_fetch_array($q4);
		  ?>
		  	<a href="API/updateproduksi.php?no=<?php echo $d4['no']; ?>&status=2&NPK=<?php echo $d4['NPK']; ?>">Terima</a> | 
			<a href="API/updateproduksi.php?no=<?php echo $d4['no']; ?>&status=3&NPK=<?php echo $d4['NPK']; ?>">Tolak</a>
			<?php
			if($d4['status'] == "1"){
				echo"<font color=yellow>[ Menunggu ]</font>";
			}else
			if($d4['status'] == "2"){
				echo"<font color=green>[ Diterima ]</font>";
			}else
			if($d4['status'] == "3"){
			echo"<font color=red>[ Ditolak ]</font>";
			}else{
			echo"<font color=Blacj>Belum ada</font>";
			}
			?>
		 
		  </font></b></div></td>
        </tr>
<?php
	}
?>
      </table>
    <p>&nbsp;</p>
	
  </div>
		

      <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>