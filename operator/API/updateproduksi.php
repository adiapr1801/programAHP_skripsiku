<?php 
 
include 'koneksi.php';
$tanggal=$_GET['tanggal'];
$jamke=$_GET['jamke'];
$npk=$_GET['NPK'];
$produksi=$_POST['produksi'];
 
mysqli_query($koneksi,"UPDATE tb_produksi SET  hasil='$produksi',status='1' WHERE tanggal='$tanggal' and jamke='$jamke' and npk='$npk'");
 
	echo"<script>alert('Menunggu validasi dari admin');document.location='../produksi.php?NPK=$npk';</script>";
//header("location:../produksi.php?NPK=$npk");
?>