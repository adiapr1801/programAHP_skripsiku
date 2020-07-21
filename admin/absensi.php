<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <style type="text/css">
<!--
.style1 {color: #000000}
-->
        </style>
</head>
  <body>
		
		<?php
			include("section/nav.php");
		?>
        <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Absensi Karyawan</h2>
<?php
include('API/koneksi.php');
	$date=date('Y-m-d');	
	$halaman = 30;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM tb_absensi,tb_karyawan WHERE tb_absensi.NPK=tb_karyawan.NPK AND tb_absensi.tanggal='$date'");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from tb_absensi, tb_karyawan WHERE tb_absensi.NPK=tb_karyawan.NPK AND tb_absensi.tanggal='$date' LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
  

?>
        
        <table width="100%" border="1">
          <tr>
            <th bgcolor="#CCCCCC" scope="col"><div align="center" class="style1">No</div></th>
            <th bgcolor="#CCCCCC" scope="col"><div align="center" class="style1">NPK</div></th>
			<th bgcolor="#CCCCCC" scope="col"><div align="center" class="style1">Nama</div></th>
            <th bgcolor="#CCCCCC" scope="col"><div align="center" class="style1">Tanggal</div></th>
            <th bgcolor="#CCCCCC" scope="col"><div align="center" class="style1">Status</div></th>
          </tr>
<?php
  
	while($d = mysqli_fetch_array($query)){
?>
          <tr>
            <td><div align="center"><?php echo $d['no']; ?></div></td>
            <td><div align="center"><?php echo $d['NPK']; ?></div></td>
			<td><div align="center"><?php echo $d['nama_karyawan']; ?></div></td>
            <td><div align="center"><?php echo $d['tanggal']; ?></div></td>
            <td>
			<div align="center"><b><font color="#00CC00">
			<a href="API/updateabsensi.php?no=<?php echo $d['no']; ?>&status=1">Terima</a> | 
			<a href="API/updateabsensi.php?no=<?php echo $d['no']; ?>&status=0">Tolak</a>
			<?php
			if($d['statusabsensi'] == "2"){
				echo"<font color=yellow>[ Menunggu ]</font>";
			}else
			if($d['statusabsensi'] == "1"){
				echo"<font color=green>[ Diterima ]</font>";
			}else{
			echo"<font color=red>[ Ditolak ]</font>";
			}
			?>
			</font></b></div>
			</td>
          </tr>
<?php
}
?>
        </table>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>