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
	  	$npk=$_GET['NPK'];
		$query=mysqli_query($koneksi,"select * from tb_karyawan where NPK='$npk'")or die(mysql_error);
		$d=mysqli_fetch_array($query);
	  ?>
	  
        <h2 class="mb-4">Selamat Datang </h2><font size="+2"><?php echo $d['nama_karyawan']; ?></font>
        <p>
		<?php
			$query2=mysqli_query($koneksi,"select * from tb_absensi where NPK='$npk' AND tanggal='$date'")or die(mysql_error);
			$d2=mysqli_fetch_array($query2);
			
			if($d2['statusabsensi']== '1' || $d2['statusabsensi']== '2'){
				echo"Anda Sudah melakukan absesnsi";
			}else{
			?>
			Silahkan Absen terlebih dahulu<br>
			
			<form action="API/absen.php?NPK=<?php echo $npk ?>" method='POST'>
			<input type="hidden" value="2" name="status">
			<input type='submit' value='Disini'>
			</form>
		<?php
			}
		?>
		</p>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>