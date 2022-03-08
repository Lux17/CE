<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $nama = isset($_POST['nama_anggota']) ? $_POST['nama_anggota'] : '';
  $nomer = isset($_POST['no_anggota']) ? $_POST['no_anggota'] : '';
  $lahir = isset($_POST['lahir']) ? $_POST['lahir'] : '';
  $nomer_hp = isset($_POST['nomer_hp']) ? $_POST['nomer_hp'] : '';
  $prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
  $jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
 
 
  $query  = "UPDATE anggota SET nama = '$nama', no_anggota = '$nomer', lahir = '$lahir', nomer_hp = '$nomer_hp', prodi = '$prodi', alamat = '$alamat', jabatan = '$jabatan'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";
  }
              

 