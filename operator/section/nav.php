<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo" style="text-align:left;">
	  				<div class="img" style="background-image: url(images/logo.jpg); float:left; margin-right:10px;"></div>
	  				<br /><h3><b>Nama Operator</b></h3>
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
<br />
					<b>
			<?php
			include("API/koneksi.php");
			$npk=$_GET['NPK'];
			$date=date('Y-m-d');
			
			$query2=mysqli_query($koneksi,"select * from tb_absensi where NPK='$npk' AND tanggal='$date'")or die(mysql_error);
			$d2=mysqli_fetch_array($query2);
			
			if($d2['statusabsensi']== '2'){
				echo"<font color=yellow>Menunggu</font>";
			}else
			if($d2['statusabsensi']== '1'){
				echo"<font color=green>Aktif</font>";
			}else{
			echo"<font color=red>Belum Aktif</font><br>";
			}
			
		?>
					</b>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php?NPK=<?php echo $npk ?>"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
             <a href="produksi.php?NPK=<?php echo $npk ?>"><span class="fa fa-crosshairs mr-3"></span> Produksi</a>
          <li>
            <a href="absensi.php?NPK=<?php echo $npk ?>"><span class="fa fa-users mr-3"></span> Hasil</a><br /><br />
          </li>
          <li>
            <a href="logout.php?NPK=<?php echo $npk ?>"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
