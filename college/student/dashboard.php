<?
// Start the session
session_start();
 $slug = 'index';

?>






<? include 'header.php';?>






  <div class="row">
  <div class="col-lg-6">
  <h1 style="color:#398c44;">Student Dashboard </h1>
  <br>
  </div>
  <div class="col-lg-6">
  <br>
  <p align="right"><button class="button button4"><a style="color:white;" href="logout.php">log out</a></button></p>

  </div>  </div>
  <hr>
  <div class="row">
  <div class="col-lg-8">
  <div class="row">
<div class="col-lg-5">
<h4>Personal Information</h4>
<p>
<b>User Name:</b><br> <?=$_SESSION['firstname']?> <?=$_SESSION['lastname']?> <br>
<b>Email Address:</b><br> <?=$_SESSION['emailaddress']?><br>
<b>Address:</b><br> <?=$_SESSION['streetaddress']?> <?=$_SESSION['city']?>, <?=$_SESSION['state']?>, <?=$_SESSION['postalcode']?><br>
<b>Phone Number:</b><br> <?=$_SESSION['phonenumber']?><br>
</p>
</div>
<div class="col-lg-3">
<img src="<?=$_SESSION['avatar']?>"  align="left" style= "width:200px;">
</div>
</div>
<br>
<hr>
<h4>Billing Information</h4>
<p>
Account on file: <br>
Balance:<br>
Payment Due:<br>

</p>
</div>



<div class="col-lg-4">
<h4>Enrollment Information</h4>
<?php
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mysch WHERE studentid ='{$_SESSION['studentid']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      $sql2 = "SELECT * FROM College_Courses WHERE CourseID= '{$row['courseid']}'";
      $result2 = mysqli_query($conn, $sql2);
      
      if (mysqli_num_rows($result2) > 0) {
          // output data of each row
          while($row2 = mysqli_fetch_assoc($result2)) {
              echo $row2['CourseName'];
              echo "<br>";
              echo $row2['CourseNumber'];
              echo "<br>";
              echo $row2['Instructor'];
              echo "<br>";
              echo $row2['Day'];
              echo "<hr>";
              echo "<br>";
          }
      } else {
          echo "0 results";
      }
    }
} else {
    ?>
      <p align="center">
      <br>*No courses have been assigned*<br>  
      <button class="button button4"><a style="color:white;" href="coursereg.php">Course Selection</a></button></p>
    
    <?
}

mysqli_close($conn);
?>
</div>


</div>
<hr>
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" >© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>