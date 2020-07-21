<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/styleku.css">
  </head>
  <body>
  		<?php
			include("section/nav.php");
		?>
        <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Kenaikan Grade 4 karyawan produksi terbaik</h2>
        
		
        <table width="100%" border="1">
          <tr>
            <th width="9%" rowspan="2" scope="col"><div align="center">NPK</div></th>
            <th width="27%" rowspan="2" scope="col"><div align="center">Nama</div></th>
            <th colspan="5" scope="col"><div align="center">SISTEM PENDUKUNG KEPUTUSAN </div></th>
          </tr>
          <tr>
            <td width="10%"><div align="center"><strong>Hasil Produksi </strong></div></td>
            <td><div align="center"><strong>Kualitas Produksi </strong></div></td>
            <td><div align="center"><strong>Absensi </strong></div></td>
            <td><div align="center"><strong>Sikap</strong></div></td>
            <td><div align="center"><strong>Kecepatan</strong></div></td>
          </tr>
 <?php
include('API/koneksi.php');	
	$halaman = 4;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM tb_karyawan");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select NPK,sum(hasil) from tb_produksi GROUP BY NPK order by sum(hasil) desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
  while($d = mysqli_fetch_array($query)){
?>
          <tr>
            <td><div align="center"><?php echo $d['NPK']; ?></div></td>
            <td><div align="center">
			<?php
		  $q2=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.NPK='".$d['NPK']."'")or die(mysql_error);
		  $d2 = mysqli_fetch_array($q2);
		  		echo " ".$d2['nama_karyawan']." ";		  
		  ?>
			</div></td>
            <td width="10%"><div align="center"><?php echo $d['sum(hasil)']; ?></div></td>
            <td width="10%"><div align="center">
			
		  <?php
		  $q3=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.NPK='".$d['NPK']."'")or die(mysql_error);
		  $d3 = mysqli_fetch_array($q3);
		  		echo " ".$d3['kualitas_produk']." ";		  
		  ?>
			
			</div></td>
            <td width="10%"><div align="center">
			
			<?php
		  $q4=mysqli_query($koneksi,"select sum(statusabsensi) from tb_absensi
		  where NPK='".$d['NPK']."'")or die(mysql_error);
		  $d4 = mysqli_fetch_array($q4);
		  		echo " ".$d4['sum(statusabsensi)']." ";		  
		  ?>
			
			</div></td>
            <td width="10%"><div align="center">
			
			<?php
		  $q5=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.NPK='".$d['NPK']."'")or die(mysql_error);
		  $d5 = mysqli_fetch_array($q5);
		  		echo " ".$d5['sikap']." ";		  
		  ?>
			
			</div></td>
            <td width="10%"><div align="center">
			
			<?php
		  $q2=mysqli_query($koneksi,"select * from tb_produksi,tb_karyawan
		  where tb_karyawan.NPK=tb_produksi.NPK 
		  AND tb_karyawan.NPK='".$d['NPK']."'")or die(mysql_error);
		  $d2 = mysqli_fetch_array($q2);
		  		echo " ".$d2['kecepatan']." ";		  
		  ?>
			
			</div></td>
          </tr>
		  <?php
		  }
		  ?>
        </table>	