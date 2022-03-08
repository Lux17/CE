<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$nama = isset($_POST['nama_anggota']) ? $_POST['nama_anggota'] : '';
$nomer = isset($_POST['no_anggota']) ? $_POST['no_anggota'] : '';
$lahir = isset($_POST['lahir']) ? $_POST['lahir'] : '';
$nomer_hp = isset($_POST['nomer_hp']) ? $_POST['nomer_hp'] : '';
$prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';

$query = "INSERT INTO anggota (nama, no_anggota, lahir, nomer_hp, prodi,alamat,jabatan) VALUES ('$nama', '$nomer', '$lahir', '$nomer_hp', '$prodi','$alamat','$jabatan')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";
}
            

// if ($jumlah>0) {
// 	$row = mysqli_fetch_assoc($hasil);
// 	$_SESSION['id'] = $data['id'];
// 	$_SESSION['nama'] = $username;
// 	$_SESSION['no_anggota'] = $nomer;
//     $_SESSION['lahir'] = $lahir;
// 	$_SESSION['nomer_hp'] = $nomer;
//     $_SESSION['prodi'] = $prodi;
// 	$_SESSION['alamat'] = $alamat;
//     $_SESSION['jabatan'] = $jabatan;
//     echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";

// else{
//     echo "<script>alert('Data Gagal ditambah.');</script>";
// }




