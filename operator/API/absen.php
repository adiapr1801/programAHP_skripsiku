<?php
include('koneksi.php');



$npk=$_GET['NPK'];
$tanggal = date("Y-m-d H:i:s");
$query = ("INSERT INTO tb_absensi(NPK,tanggal,statusabsensi) VALUES('$npk','$tanggal','2')");
$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	echo"<script>alert('Menunggu validasi dari admin');document.location='../index.php?NPK=$npk';</script>";
//        header("location: ../index.php?NPK=$npk"); // Redirectke halaman index.php
      
?>
