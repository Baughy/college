<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";

if(isset($_POST["submit"])) {

    if(!empty($_POST["CourseID"]))
    {
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
              echo "File is an image - " . $check["mime"] . ".";
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
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
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
            echo "New record created successfully";
            
// Send email to admin
    $to = "brandon.baughman@gmail.com";
    $subject = "Guest Added";
    $txt = "$firstname $lastname was added to the database";
    $headers = "From: webmaster@example.com";

    mail($to,$subject,$txt,$headers);



// loop through the courses selected and add to schedule table

foreach ($_POST["CourseID"] as $courseid) {
  $sql = "INSERT INTO mysch (studentid, courseid)
  VALUES ('{$last_id}','{$courseid}')";

  if (mysqli_query($conn, $sql)) {
    //  echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else {
        echo "You already registered.";
    }


    mysqli_close($conn);



    echo '<h3>You have selcted the following courses</h3>';
    foreach($_POST["CourseID"] as $courseid)
    {
      echo '<p>'.$courseid.'</p>';
    }
  }
    else
    {
      echo 'Please Select at least one course <br>
      <a href="index.php">Click here to return to Course Selcection</a>';
    }
  }



?>

</body>

</html>
