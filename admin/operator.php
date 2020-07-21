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
        <h2 class="mb-4">Operator</h2>
		<a href="tambahoperator.php">+ Tambah Operator</a>

<?php
include('API/koneksi.php');	
	$halaman = 30;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM tb_karyawan");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from tb_karyawan order by NPK desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
  $tanggalku=date('Y-m');
?>
        <table width="100%" border="1">
          <tr>
            <th width="4%" scope="col"><div align="center">NPK</div></th>
            <th width="24%" scope="col"><div align="center">Nama Karyawan </div></th>
            <th width="8%" scope="col"><div align="center">Tanggal Masuk </div></th>
            <th width="8%" scope="col"><div align="center">Bagian</div></th>
            <th width="8%" scope="col"><div align="center">Alamat</div></th>
            <th width="8%" scope="col"><div align="center">Hasil Produksi </div></th>
            <th width="8%" scope="col"><div align="center">Sikap</div></th>
			<th width="8%" scope="col"><div align="center">Foto</div></th>
            <th width="9%" scope="col"><div align="center">Action</div></th>
          </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
          <tr>
            <td><div align="center"><?php echo $d['NPK']; ?></div></td>
            <td style="padding-left:20px;"><?php echo $d['nama_karyawan']; ?></td>
            <td><div align="center"> <?php echo $d['tgl_masuk']; ?></div></td>
            <td><div align="center"><?php echo $d['bagian']; ?></div></td>
            <td><div align="center"><?php echo $d['alamat']; ?></div></td>
            <td><div align="center">
			
			<?php
		  $q4=mysqli_query($koneksi,"select sum(hasil) from tb_produksi
		  where NPK='".$d['NPK']."' AND Tanggal LIKE '".$tanggalku."%'")or die(mysql_error);
		  $d4 = mysqli_fetch_array($q4);
		  		echo " ".$d4['sum(hasil)']." ";		  
		  ?>
			
			</div></td>
			<td><div align="center"><?php echo $d['sikap']; ?></div></td>
            <td><div align="center"><img src="foto/<?php echo $d['foto']; ?>" width="50" height="50"/></div></td>
            <td><div align="center">
			<a href="editoperator.php?NPK=<?php echo $d['NPK']; ?>">Edit</a> |
			 <a href="API/hapus.php?NPK=<?php echo $d['NPK']; ?>">Hapus</a></div></td>
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