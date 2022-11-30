<?php

include 'koneksi.php';


if(isset($_POST['username'])){

  $username = @$_POST['username'];
  $pass = @$_POST['pass'];
  
  if(!empty($username) && !empty($pass)){
    $cek = mysqli_query($rpd, "SELECT * FROM user WHERE username = '$username' AND password = '$pass'");
    $cek = mysqli_num_rows($cek);
    if($cek == 1){
      header("location: berhasil_login.php?a=berhasil");
      $result = "Berhasil Login";
    } else {
      $result = "Username / Password salah.";
    }
  } else {
    $result = "Username / Password tidak boleh kosong";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KELOMPOK 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>    
<div class="container">
<div class="card login-form">
  <h1 class="card-title text-center">PT ANAND SEJAHTERA</h1>
    <div class="card-text">
      <?php
        if(isset($result)){
          echo $result;
        }
      ?>
    <form action="" method="post">

    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>

  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
     <input type="password" class="form-control" name="pass">
  </div>

  <div class="mb-5 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">ingatkan saya 30 hari</label>
  </div>
  <button type="submit" class="btn btn-danger">login</button>
</form>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>