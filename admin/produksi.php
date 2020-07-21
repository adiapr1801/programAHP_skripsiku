<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="Chart/Chart.min.css">
		<script type="text/javascript" src="Chart/Chart.min.js"> </script>
  </head>
  <body>
		
		<?php
			include("section/nav.php");
		?>
        <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Rekap data produksi</h2>
		Hasil produksi bulanan

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
  $tanggalku=date('m-d');
?>
        
		nnn
		<?php
		  $q9=mysqli_query($koneksi,"select sum(hasil) from tb_produksi
		  where Tanggal LIKE '".$_GET['periode']."%' GROUP BY NPK")or die(mysql_error);	  
		  
		  ?>
		
<div style="width: 600px;" >
<h3>Pilih Periode :</h3>
<?php
	
	$tanggalp=date('m-d');
	$q10=mysqli_query($koneksi,"SELECT SUBSTRING(Tanggal,1,7) FROM tb_produksi GROUP by SUBSTRING(Tanggal,1,7)")
	or die(mysql_error);
?>
<select onChange="document.location.href=this.options[this.selectedIndex].value;">
	<option>Pilih periode</option>
	<?php while($d10=mysqli_fetch_array($q10)){ ?>
	<option value="produksi.php?periode=<?php echo $d10['SUBSTRING(Tanggal,1,7)']; ?>"> <?php echo $d10['SUBSTRING(Tanggal,1,7)'];	 ?></option>
	<?php } ?>
</select>
<?php
	$tanggalp=date('Y-m');
	$q11=mysqli_query($koneksi,"SELECT SUBSTRING(Tanggal,6) FROM tb_produksi where Tanggal LIKE '".$_GET['periode']."%' GROUP by Tanggal")
	or die(mysql_error);
?>
	
 <canvas id="myChart"></canvas>
</div>
<h4><a href=""><hr  style="height:20px; background:#CCCCCC; box-shadow:grey 3px 3px;;"></a></h4>
<script>
//deklarasi chartjs untuk membuat grafik 2d di id mychart 
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
 //chart akan ditampilkan sebagai bar chart
    type: 'bar',
    data: {
     //membuat label chart
        labels: [
		
		<?php 
		
		
		
		$halaman = 30;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM tb_karyawan");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi,"select * from tb_karyawan order by NPK LIMIT $mulai, $halaman")or die(mysql_error);
		while($d = mysqli_fetch_array($query)){
		echo "'".$d['nama_karyawan']."',"; 
		} ?>
		''
		],
        datasets: [{
            label: '# of Votes',
            //isi chart
			
			
            data: [
			<?php
				while($d9 = mysqli_fetch_array($q9)){
				echo" ".$d9['sum(hasil)'].",";
				}
			?>	
			],
            //membuat warna pada bar chart
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
		
		

  </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>