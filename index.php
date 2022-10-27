<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

$token = enkripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card text-center">
          <?php if($_SESSION['rule'] == 'user'){ ?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/school.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SPH INTERNATIONAL SCHOOL</h5>
              <p class="card-text">Your token : <b disabled="disabled" class="badge bg-danger"><?= $token ?></b></p>
              <p class="card-text">Use the token to start the test</p>
              <a href="verify.php" class="btn btn-warning">start now</a>
            </div>
          <?php } else if ($_SESSION['rule'] == 'admin') {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/school.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SPH INTERNATIONAL SCHOOL</h5>
              <button class="btn btn-warning" style="width:100%;">ADMIN DASHBOARD</button>
            </div>
          <?php } else {?>
            <h5 class="card-header bg-dark" style="color:white;">WELCOME</h5>
            <div class="card-body">
              <img src="img/school.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SPH INTERNATIONAL SCHOOL</h5>
              <p class="card-text">Since 1993, SPH has committed to providing both Indonesian and expatriate families with quality Christian education. Our focus on academic excellence, faith, character building, and personal growth helps students develop their potential and equips them for further studies anywhere in the world.</p>
              <a href="register.php" class="btn btn-warning">Register now</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>