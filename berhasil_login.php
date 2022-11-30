<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Anand Fiardhi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="berhasil_login.php">Home</a>
        <a class="nav-link" href="about.php">about</a>
        <a class="nav-link" href="portfolio.php">portfolio</a>
        <a class="nav-link " href="contact.php" tabindex="-1">contact</a>
        <a href="login.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>
</nav>



<div class="jumbotron jumbotron"></div>
  <div class="container d-flex justify-content-center">

    <img src="anand2/anand.jpeg" width="300" class="rounded-circle" >
  </div>
    <h1 class="display-4 text-center ">Anand Fiardhi</h1>
    <p class="lead text-center">SELAMAT DATANG DI WEBSITE PT ANAND SEJAHTERA.</p>


    
<?php

if(isset($_GET['a'])){
  $alert = @$_GET['a'];
  echo "<script>alert('$alert');</script>";
}