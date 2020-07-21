<?php 
 
include 'koneksi.php';
$npk		= $_GET['NPK'];
$kualitas	= $_POST['kualitas'];
$kecepatan	= $_POST['kecepatan'];
 
mysqli_query($koneksi,"UPDATE tb_karyawan SET kualitas_produk='$kualitas',kecepatan=$kecepatan WHERE NPK='$npk'");
 
header("location:../operator.php");
?>