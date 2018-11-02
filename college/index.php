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




</head>
<body>


<!-- Navigation!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1 style="color:#398c44;">UBS <img  src = "images/eagle1.png"> </h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses</a>
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







<!--Registration!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container-fluid">
<div class="row">
<img src = "images/library1.jpg" style="opacity: 0.8;">
</div>
</div>

<div class="container-fluid" style="background-color:#398c44;">
  <div class="container" style="background-color:#fcfcfc;">
  <div class="row">
<div class="col-lg-12">
<br>
<h1>Registration</h1>
<hr>
<br>
  <div class="row">
  <div class="col-lg-6">
  <form action="process.php" method="post" enctype="multipart/form-data">
  
    First Name:<br>
  <input type="text" name="firstname" class="form-control" placeholder="First Name"><br>
</div>
  <div class="col-lg-6">
  Last Name:<br>
  <input type="text" name="lastname" class="form-control" placeholder="Last Name"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
   Email:<br>
  <input type="text" name="emailaddress" class="form-control" placeholder="Email"><br>
</div>
  <div class="col-lg-6">
  Phone Number:<br>
 <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
 Street Address:<br>
<input type="text" name="streetaddress" class="form-control" placeholder="Street Address"><br>
</div>
  <div class="col-lg-6">
Street Address line 2:<br>
<input type="text" name="streetaddress2" class="form-control" placeholder="Steet Address line 2"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
City:<br>
<input type="text" name="city" class="form-control" placeholder="City"><br>
</div>
  <div class="col-lg-6">
State:<br>
			<select id="state" name="state" class="form-control" placeholder="State"><option value="---">---</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>

</div>
</div>

<div class="row">
<div class="col-lg-6">
Zip Code:<br>
<input type="text" name="postalcode" class="form-control" placeholder="Zip Code"><br>
</div>
  <div class="col-lg-6">
Gender:<br>
<input type="text" name="gender" class="form-control" placeholder="Gender"><br><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">



    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">



</div>
</div>

</div>
</div>
<!--Registration!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->







<br>
<hr>
<h1>Course Selection</h1>
<hr>
<br>
  <?php
  // Select Courses!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM College_Courses WHERE status='1'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        ?>


        <p><input type="checkbox" name="CourseID[]" value="<?=$row["CourseID"]?>">

        <strong>Course Name:</strong> <?=$row["CourseName"]?></p>
        <p><strong>Course Number:</strong> <?=$row["CourseNumber"]?></p>
        <p><strong>Status:</strong> <?=$row["Status"]?></p>
        <p><strong>Instructor:</strong> <?=$row["Instructor"]?></p>

        <p><strong>Credits:</strong> <?=$row["Credits"]?></p>
        <p><strong>Day:</strong> <?=$row["Day"]?></p>
        <p><strong>Time:</strong> <?=$row["Time"]?></p>
        <p><strong>Cost:</strong> <?=$row["Cost"]?></p>
        <p><strong>Description:</strong> <?=$row["Description"]?></p>

<hr>

        <?
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
    // Select Courses!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  ?>

  <input type="submit" value="Submit" name="submit">
</form>
<br>
<br>
</div>

</div>
</div>
</div>
</body>
</html>
