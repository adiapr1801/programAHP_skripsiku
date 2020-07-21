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
		<?php
include('API/koneksi.php');
	$npk=$_GET['NPK'];
  $query= mysqli_query($koneksi,"SELECT * FROM tb_karyawan where NPK=$npk");
  $d = mysqli_fetch_array($query);
  ?>
		<form action="API/updateoperator.php?NPK=<?php echo"$npk"; ?>" method="post" enctype="multipart/form-data">
	    <table width="100%" border="0">
          <tr>
            <th width="15%" scope="row"><div align="right">Nama Karyawan </div></th>
            <td width="4%">&nbsp;</td>
            <td width="81%"><label>
              <input name="nama" type="text" id="nama" style="width:400px;" value="<?php echo $d['nama_karyawan']; ?>">
            </label></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Alamat</div></th>
            <td>&nbsp;</td>
            <td><input name="alamat" type="text" id="alamat" style="width:400px;" value="<?php echo $d['alamat']; ?>"></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Bagian</div></th>
            <td>&nbsp;</td>
            <td><input name="bagian" type="text" id="bagian" style="width:400px;" value="Operator"></td>
          </tr>
          <tr>
            <th scope="row"><div align="right">Sikap</div></th>
            <td>&nbsp;</td>
            <td><input name="sikap" type="number" min="0" max="5" id="sikap" style="width:400px;" value="<?php echo $d['sikap']; ?>"> 
			( Range 0 - 5 )</td>
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
			
              <input name="Perbaharui Data" type="submit" id="Tambah Karyawan" value="Perbaharui Data">
            </label></td>
          </tr>
        </table>
		</form>


  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>