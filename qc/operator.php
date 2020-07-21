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
    <th scope="col"><h2 class="mb-4">Operator</h2></th>
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
          <th width="34%" scope="col"><div align="center">Total Produksi</div></th>
          <th width="16%" scope="col"><div align="center">Kualitas Produksi</div></th>
          <th width="26%" scope="col"><div align="center">Kecepatan</div></th>
		  <th width="26%" scope="col"><div align="center">Aksi</div></th>
        </tr>
<?php
	while($d = mysqli_fetch_array($q1)){
?>
 
        <tr>
          <td><div align="center"><?php echo $d['nama_karyawan']; ?> </div></td>
          <td>
		  	<div align="center">
		  	  <?php
		  $q3=mysqli_query($koneksi,"select sum(hasil) from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d3 = mysqli_fetch_array($q3)){
		  		echo " ".$d3['sum(hasil)']." ";
		  }
		  
		  ?>	  
  	        </div></td>
          <td><div align="center">
		  
		  <?php
		  $q4=mysqli_query($koneksi,"select kualitas_produk from tb_karyawan
		  where nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d4 = mysqli_fetch_array($q4)){
		  		echo "".$d4['kualitas_produk']."";
		  }
		  ?>
		  </div></td>
          <td><div align="center">
		  <?php
		  $q5=mysqli_query($koneksi,"select kecepatan from tb_karyawan
		  where nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d5 = mysqli_fetch_array($q5)){
		  		echo "".$d5['kecepatan']."";
		  }
		  ?>
		 
		  	</div></td>
		  <td>
		    <div align="center">
		      <?php
		  $q6=mysqli_query($koneksi,"select NPK FROM tb_karyawan
		  where nama_karyawan='".$d['nama_karyawan']."'")or die(mysql_error);
		  while($d6 = mysqli_fetch_array($q6)){
		  ?>
		  		<a href="editoperator.php?NPK=<?php echo $d6['NPK'] ?>">Edit</a>
		  <?php
		  }
		  ?>
            </div></td>
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