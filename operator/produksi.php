<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
		
		<?php
			include("section/nav.php");
		?>
        <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
 <?php
 	$npk=$_GET['NPK'];
	$date=date('Y-m-d');
	$q=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='1' AND tanggal='$date'")or die(mysql_error);
	$d=mysqli_fetch_array($q);
	$q2=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='2' AND tanggal='$date'")or die(mysql_error);
	$d2=mysqli_fetch_array($q2);
	$q3=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='3' AND tanggal='$date'")or die(mysql_error);
	$d3=mysqli_fetch_array($q3);
	$q4=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='4' AND tanggal='$date'")or die(mysql_error);
	$d4=mysqli_fetch_array($q4);
	$q5=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='5' AND tanggal='$date'")or die(mysql_error);
	$d5=mysqli_fetch_array($q5);
	$q6=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='6' AND tanggal='$date'")or die(mysql_error);
	$d6=mysqli_fetch_array($q6);
	$q7=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='7' AND tanggal='$date'")or die(mysql_error);
	$d7=mysqli_fetch_array($q7);
	$q8=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='8' AND tanggal='$date'")or die(mysql_error);
	$d8=mysqli_fetch_array($q8);
	$q9=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='9' AND tanggal='$date'")or die(mysql_error);
	$d9=mysqli_fetch_array($q9);
	$q10=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='10' AND tanggal='$date'")or die(mysql_error);
	$d10=mysqli_fetch_array($q10);
	$q11=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='11' AND tanggal='$date'")or die(mysql_error);
	$d11=mysqli_fetch_array($q11);
	$q12=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='12' AND tanggal='$date'")or die(mysql_error);
	$d12=mysqli_fetch_array($q12);
	$q13=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='13' AND tanggal='$date'")or die(mysql_error);
	$d13=mysqli_fetch_array($q13);
	$q14=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='14' AND tanggal='$date'")or die(mysql_error);
	$d14=mysqli_fetch_array($q14);
	$q15=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='15' AND tanggal='$date'")or die(mysql_error);
	$d15=mysqli_fetch_array($q15);
	$q16=mysqli_query($koneksi,"select * from tb_produksi where NPK='$npk' AND jamke='16' AND tanggal='$date'")or die(mysql_error);
	$d16=mysqli_fetch_array($q16);
	
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
	</b></P></th>
  </tr>
</table>
      <table width="100%" border="1">
        <tr>
          <th width="5%" scope="col"><div align="center">Jam ke - </div></th>
          <th width="30%" scope="col"><div align="center">Hitung</div></th>
		  <th width="30%" scope="col"><div align="center">Hasil</div></th>
          <th width="65%" scope="col"><div align="center">Status</div></th>
        </tr>
        <tr>
          <td><div align="center">1</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=1" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=1&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">2</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=2" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d2['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d2['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d2['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d2['status']== '3'){
		
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=2&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
		
			}else{
			echo"<font color=black>Selamat bekerja</font>";
			}
		?>
		  </font></b></div></td>
        </tr>	
        <tr>
          <td><div align="center">3</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=3" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d3['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d3['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d3['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d3['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=3&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">4</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=4" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d4['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d4['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d4['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d4['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=4&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">5</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=5" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d5['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d5['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d5['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=5&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">6</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=6" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d6['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d6['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d6['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d6['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=6&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">7</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=7" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d7['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d7['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d7['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d7['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=7&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">8</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=8" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d8['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d8['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d8['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d8['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=8&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">9</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=9" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d9['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d9['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d9['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d9['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=9&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
        <tr>
          <td><div align="center">10</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=10" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d10['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d10['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d10['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d10['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=10&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">11</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=11" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d11['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d11['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d11['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d11['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=11&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">12</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=12" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d12['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d12['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d12['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d12['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=12&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">13</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=13" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d13['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d13['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d13['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d13['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=13&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">14</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=14" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d14['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d14['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d14['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d14['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=14&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">15</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=15" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d15['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d15['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d15['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d15['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=15&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
		<tr>
          <td><div align="center">16</div></td>
          <td><div align="center">
		  <form action="API/insertproduksi.php?NPK=<?php echo $npk ?>&jamke=16" method="POST">
		  <input type="submit" value="+" style="height:40px; width:30%;">
		  <input name="produksi" class="form-control form-control-lg" type="number" placeholder="0" value="" style="width:70%; float:right;">
		  </form>
		  </div></td>
		  <td><div align="center"><?php echo $d16['hasil']; ?></div></td>
          <td><div align="center"><b><font color="#00CC00">
		  <?php
		  if($d16['status']== '1'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d16['status']== '2'){
				echo"<font color=green>Diterima</font>";
			}else
			if($d16['status']== '3'){
		echo"<form action='API/updateproduksi.php?NPK=$npk&jamke=16&tanggal=$date' method='POST'>";
		echo"  <input type='submit' value='Kirim Ulang' style='height:40px; width:30%;'>";
		 echo" <input name='produksi' class='form-control form-control-lg' type='number' placeholder='0' style='width:70%; float:right;'>";
		echo"</form>";
			}else{
			echo"Selamat bekerja";
			}
			
		?>
		  </font></b></div></td>
        </tr>
      </table>
  </div>
		

      <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>