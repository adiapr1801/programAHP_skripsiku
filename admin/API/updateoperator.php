<?php
include('koneksi.php');

$npk=$_GET['NPK'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$bagian=$_POST['bagian'];
$sikap=$_POST['sikap'];

mysqli_query($koneksi, "UPDATE tb_karyawan SET nama_karyawan='$nama',alamat='$alamat',bagian='$bagian',sikap='$sikap' where NPK='$npk'"); // Eksekusi/ Jalankan query dari variabel $query
        header("location: ../operator.php"); // Redirectke halaman index.php
?>
