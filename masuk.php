<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Computer Education</title>
  </head>
  <body>
<div class="m-4">
    <a class="navbar-brand" href="index.php">
        <img src="img/logo_ce.png" alt="" width="120" height="40" class="d-inline-block align-text-top">
    </a>  
</div>
  <div style="display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    margin-left: 5px;
    margin-right: 10px;
    padding: 20px;">
  <div class="card shadow-sm" style="width: 27rem;" >
  <div class="card-body">
    <h1 class="card-title" style="color: #348A0C;">Masuk Akun</h1>
    <p class="card-text" style="color: #348A0C;">Silahkan  masuk ke akunmu.</p>
    <form method="POST"  action="login_action.php">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Username</label>
            <input type="username" class="form-control" id="username" name="username" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelpInline" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">ingat saya</label>
        </div>
        <div class="d-grid mx-auto">
            <button class="btn btn-large btn-block btn-success tombol" type="submit" value="login">Masuk</button>
        </div>
    </form>
    
    <div class="d-flex py-2 mt-3 border-top">
    <p class="card-text">Belum punya akun?</p>
    <a  href=""style="color: #348A0C;">Hubungi admin</a>
    </div>
  </div>
</div>
<!-- style="display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
" -->
<?php

				if(isset($_GET['pesan'])){
	        if($_GET['pesan'] == "gagal"){
		       echo "Login gagal! username dan password salah!";
	        }else if($_GET['pesan'] == "logout"){
		       echo "Anda telah berhasil logout";
	        }else if($_GET['pesan'] == "belum_login"){
		       echo "Anda harus login untuk mengakses dashboard";
	        }
        }
				?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>