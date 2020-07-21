<?php
include("operator/API/koneksi.php");
 // memanggil file koneksi.php
// membuat variable dengan nilai dari form
$username = $_POST['username']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$password = $_POST['password']; // variable password, dan nilainya sesuai yang dimasukkan di input name="password" 
$query=mysqli_query($koneksi,"select nama_karyawan,NPK from tb_karyawan where nama_karyawan='$username' AND NPK='$password'");
$data=mysqli_fetch_array($query);
$user=$data['nama_karyawan'];
$pas=$data['NPK'];
session_start();
if(isset($_POST['login'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if($_SESSION['username'] == 'ADMIN' and $_SESSION['password']=='123') {
                        header("location:admin/utama.php");
            } else if($_SESSION['username'] == $user and $_SESSION['password']== $pas) {
                        header("location:operator/index.php?NPK=$pas");
			} else if($_SESSION['username'] == 'QC' and $_SESSION['password']=='123') {
                        header("location:QC/");
			}
			else {
                        // jika login salah //      
                        echo "$user $pas Login gagal <a href='index.php'>Login</a>";

            }
}
?> 