<?php 
 
include 'koneksi.php';
$no = $_GET['no'];
$status = $_GET['status'];
$npk=$_GET['NPK'];
$date=date('Y-m-d');
 
mysqli_query($koneksi,"UPDATE tb_produksi SET status='$status' WHERE NPK='$npk' AND tanggal='$date'");
 
header("location:../produksi.php");
?>