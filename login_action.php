<?php
session_start();	
include "koneksi.php";

// pemeriksaan menggunakan fungsi isset()
$username = isset($_POST['username']) ? $_POST['username'] : '';
// pemeriksaan menggunakan fungsi empty()
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$sql = "select * from admin where username='$username' and password='$password'";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);

// var_dump($jumlah)

if ($jumlah>0) {
	$row = mysqli_fetch_assoc($hasil);
	$_SESSION['id'] = $data_user['id'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	header("Location:admin/dashboard.php");
		
}else {
	echo "Username atau password salah <br><a href='index.php'>Kembali</a>";
	}
?>