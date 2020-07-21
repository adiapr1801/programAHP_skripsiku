<?php 
include 'koneksi.php';
$npk = $_GET['NPK'];
mysqli_query($koneksi,"DELETE FROM tb_karyawan WHERE NPK='$npk'")or die(mysql_error());
 
header("location:../operator.php?pesan=hapus");
?>