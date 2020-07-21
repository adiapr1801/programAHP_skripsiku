<?php 
 
include 'koneksi.php';
$no = $_GET['no'];
$status = $_GET['status'];
 
mysqli_query($koneksi,"UPDATE tb_absensi SET statusabsensi='$status' WHERE no='$no'");
 
header("location:../absensi.php");
?>