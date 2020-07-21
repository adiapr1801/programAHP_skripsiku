<?php
include('koneksi.php');

$npk=$_GET['NPK'];
$jamke=$_GET['jamke'];
$produksi=$_POST['produksi'];
$tanggal = date("Y-m-d H:i:s");
$query = ("INSERT INTO tb_produksi(NPK,tanggal,jamke,hasil,status) VALUES('$npk','$tanggal','$jamke','$produksi','1')");
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
        header("location: ../produksi.php?NPK=$npk"); // Redirectke halaman index.php
?>
