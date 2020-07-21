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
    <th scope="col"><h2 class="mb-4">Edit</h2>
	Hanya bisa ubah data kualitas dan kecepatan produksi.<hr>	
	</th>
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
	$npk=$_GET['NPK'];
	$q1=mysqli_query($koneksi,"select * from tb_karyawan,tb_produksi WHERE tb_karyawan.NPK=tb_produksi.NPK AND tb_karyawan.NPK='$npk'");
	$d1=mysqli_fetch_array($q1);
?>
<form action="API/updateoperator.php?NPK=<?php echo $npk ?>" method="post">
<table width="100%" border="0">
  <tr>
    <th width="19%" scope="row"><div align="right">Nama Operator </div></th>
    <td width="3%">:</td>
    <td width="78%"><label>
      <input name="nama" type="text" id="nama" value="<?php echo $d1['nama_karyawan']; ?>" readonly>
    </label></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Total Produksi </div></th>
    <td>:</td>
    <td><label>
	<?php
		  $q3=mysqli_query($koneksi,"select sum(hasil) from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.nama_karyawan='".$d1['nama_karyawan']."'")or die(mysql_error);
		  while($d3 = mysqli_fetch_array($q3)){
		  ?>
				<input name="total" type="text" id="total" value="<?php echo " ".$d3['sum(hasil)']." ";?>" readonly="">
		<?php
		  }
		 ?>
    </label></td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Kualitas Produksi </div></th>
    <td>:</td>
    <td>
		<?php
		  $q4=mysqli_query($koneksi,"select kualitas_produk from tb_karyawan
		  where nama_karyawan='".$d1['nama_karyawan']."'")or die(mysql_error);
		  while($d4 = mysqli_fetch_array($q4)){
		  ?>
		  		<input name="kualitas" type="number" max="5" min="1" id="kualitas" placeholder="<?php echo "".$d4['kualitas_produk'].""; ?>">
		  <?php
		  }
		  ?>
		  ( Range 1 - 5 )
	</td>
  </tr>
  <tr>
    <th scope="row"><div align="right">Kecepatan Produksi </div></th>
    <td>:</td>
    <td>
		<?php
		  $q5=mysqli_query($koneksi,"select kecepatan from tb_karyawan
		  where nama_karyawan='".$d1['nama_karyawan']."'")or die(mysql_error);
		  while($d5 = mysqli_fetch_array($q5)){
		  ?>
			<input name="kecepatan" type="number" max="5" min="1" id="kecepatan" placeholder="<?php echo "".$d5['kecepatan'].""; ?>">	  		
		  <?php
		  }
		  ?>
		  ( Range 1 - 5 )
	</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" value="Update Data">
    </label></td>
  </tr>
</table>
</form>
    <p>&nbsp;</p>
	
  </div>
		

      <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>