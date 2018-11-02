<!DOCTYPE html>
<html>
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
  <a class="navbar-brand" href="#"><h1 style="color:#398c44;">UBS <img  src = "../images/eagle1.png"> </h1></a>
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




<?
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";

if(isset($_POST["submit"])) {

   
    
      //UPLOAD IMAGE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
      $randomnumber = rand();
      $target_dir = "uploads/";
      $target_file = $target_dir . $randomnumber.basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            //  echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      /*if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0; 
      }*/
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }
      //UPLOAD IMAGE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!




    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }





    $sql = "SELECT emailaddress FROM College_Registration WHERE emailaddress ='{$_POST['emailaddress']}'";
    $result = $conn->query($sql);

    if ($result->num_rows === 0) {

      // Insert Registration!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


        $sql = "INSERT INTO College_Registration (firstname, lastname, emailaddress, phonenumber, streetaddress, streetaddress2, city, state, postalcode, gender, avatar)
        VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['emailaddress']}', '{$_POST['phonenumber']}', '{$_POST['streetaddress']}', '{$_POST['streetaddress2']}', '{$_POST['city']}', '{$_POST['state']}', '{$_POST['postalcode']}', '{$_POST['gender']}', '{$target_file}' )";

        if (mysqli_query($conn, $sql)) {
        // get the last id
         $last_id = mysqli_insert_id($conn);
?>
   <div class="container rounded">
  <div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<div class="card rounded">
<div style="background-color:#398c44;">
  <h5 class="card-header" style="text-align:center; color: white;" >Registration</h5></div>
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Status:</h5>
    <p class="card-text" style="text-align:center;">Thanks for registering. Check your email for login and course registration instructions</p>
    <div class= "text-center">
    <a href="index.php" class="btn btn-primary">Go to Login</a></div>
  </div>
</div>
</div>
<div class="col-lg-4"></div>
</div>
</div>
           <? 
// Send email to admin
    $to = "brandon.baughman@gmail.com";
    $subject = "Thanks for Registering";
    $txt = "$firstname $lastname was added to the database";
    $headers = "From: webmaster@example.com";

    mail($to,$subject,$txt,$headers);




        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {

?>
  <div class="container rounded">
  <div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<div class="card rounded">
<div style="background-color:#398c44;">
  <h5 class="card-header" style="text-align:center; color: white;" >Registration</h5></div>
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;">Status:</h5>
    <p class="card-text" style="text-align:center;">You already registered.</p>
    <div class= "text-center">
    <a href="index.php" class="btn btn-primary" >Go to Login</a></div>
  </div>
</div>
</div>
<div class="col-lg-4"></div>
</div>
</div>


        <?
    }


    mysqli_close($conn);

  
  }



?>

</body>

</html>
