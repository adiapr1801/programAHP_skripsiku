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
        <h2 class="mb-4">Tambah Operator</h2>
		<p><a href="operator.php">Kembali</a></p>
		<form action="API/insertoperator.php" method="post" enctype="multipart/form-data">
	    <table width="100%" border="0">
          <tr>
            <th width="15%" scope="row"><div align="right">Nama Karyawan </div></th>
            <td width="4%">&nbsp;</td>
            <td width="81%"><label>
              <input name="nama" type="text" id="nama" style="width:400px;">
            </label></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Alamat</div></th>
            <td>&nbsp;</td>
            <td><input name="alamat" type="text" id="alamat" style="width:400px;"></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Bagian</div></th>
            <td>&nbsp;</td>
            <td><input name="bagian" type="text" id="bagian" style="width:400px;" value="Operator"></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Foto</div></th>
            <td>&nbsp;</td>
            <td><label>
              <input name="foto" type="file" id="foto">
            </label></td>
          </tr>
          <tr>
            <th scope="row"><div align="right"></div></th>
            <td>&nbsp;</td>
            <td>
			<hr>
			<label>
			
              <input name="Tambah Karyawan" type="submit" id="Tambah Karyawan" value="Tambah Karyawan">
            </label></td>
          </tr>
        </table>
		</form>
	    <p>Penambahan Terakhir</p>
		
<?php
include('API/koneksi.php');	
	$halaman = 2;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM tb_karyawan");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from tb_karyawan order by NPK desc LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
?>
<table width="100%" border="1">
  <tr>
    <th width="7%" scope="col"><div align="center">NPK</div></th>
    <th width="23%" scope="col"><div align="center">Nama Karyawan </div></th>
    <th width="10%" scope="col"><div align="center">Alamat</div></th>
    <th width="12%" scope="col"><div align="center">Tanggal Masuk </div></th>
    <th width="21%" scope="col"><div align="center">Bagian</div></th>
    <th width="11%" scope="col"><div align="center">Foto</div></th>
    <th width="16%" scope="col"><div align="center">Action</div></th>
  </tr>
<?php
	while($d = mysqli_fetch_array($query)){
?>
  <tr>
    <td><div align="center"><?php echo $d['NPK']; ?></div></td>
    <td><div align="left"><?php echo $d['nama_karyawan']; ?></div></td>
    <td><div align="left"><?php echo $d['alamat']; ?></div></td>
    <td><div align="center"><?php echo $d['tgl_masuk']; ?></div></td>
    <td><div align="center"><?php echo $d['bagian']; ?></div></td>
    <td><div align="center"><img src="foto/<?php echo $d['foto']; ?>" width="50" height="50"/></div></td>
    <td><div align="center"><a href="API/editkaryawan.php?id=<?php echo $d['NPK']; ?>">Edit</a> | <a href="API/hapuskaryawan.php?id=<?php echo $d['NPK']; ?>">Hapus</a></div></td>
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