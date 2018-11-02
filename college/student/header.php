<!DOCTYPE html>
<html>
<?
//server credentials
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";
?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<body>

<!-- Navigation!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1 style="color:#398c44;">UBS <img  src = "../images/eagle1.png"> </h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    
    <? if ($slug == 'index') { ?>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <? } else { ?>
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
      <? } ?>

          <? if ($slug == 'about') { ?>
      <li class="nav-item active"><a class="nav-link" href="#">About</a>
      </li>
      <? } else { ?>
        <li class="nav-item"><a class="nav-link" href="registration.php">About</a></li>
      <? } ?>


                <? if ($slug == 'coursereg') { ?>
      <li class="nav-item active"><a class="nav-link" href="#">Courses</a>
      </li>
      <? } else { ?>
        <li class="nav-item"><a class="nav-link" href="coursereg.php">Courses</a></li>
      <? } ?>

  <li class="nav-item">
        <a class="nav-link" href="#">Faculty/Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- Navigation!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



<div class="container-fluid">
<div class="row">
<img src = "../images/library2.jpg" style="opacity: 0.8;" class="img-fluid">
</div>
</div>

<div class="container-fluid" style="background-color:#398c44;">

  <div class="container rounded" style="background-color:#fcfcfc;">