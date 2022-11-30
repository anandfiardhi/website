<?php
$email_true = "raihanp14@gmail.com"; // email yang dianggap benar
$password_true = "raihan123"; // password yang dianggap benar

// set variabel dari get
$email = @$_GET['input_email'];
$password =  @$_GET['input_password'];

// sistem validasi
if (!empty($email) && !empty($password)) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($email <> $email_true) {
      $hasil = "$email bukan email yang tepat!";
    } else if ($password <> $password_true) {
      $hasil = "$password bukan password yang tepat!";
    } else {
      $hasil = "$email : $password sudah tepat! data tervalidasi!";
    }
  } else {
    $hasil = "$email bukan email yang valid";
  }
} else {
  $hasil = "parameter masih ada yang kosong";
}
?>

<body style="background-color: black; color:red; font-size: 30px;">
  <pre>>> <?= $hasil ?></pre>
</body>