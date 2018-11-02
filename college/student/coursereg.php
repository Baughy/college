<?
// Start the session
session_start();
$slug = 'coursereg';
?>



<?php include 'header.php';?>










<h1>Course Selection</h1>
<hr>
<br>

 <form action="addcourses.php" method="post">


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


        <input type="checkbox" name="CourseID[]" value="<?=$row["CourseID"]?>">

        <strong>Course Name:</strong> <?=$row["CourseName"]?><br>
        <strong>Course Number:</strong> <?=$row["CourseNumber"]?><br>
        
        <strong>Instructor:</strong> <?=$row["Instructor"]?><br>

        <strong>Credits:</strong> <?=$row["Credits"]?><br>
        <strong>Day:</strong> <?=$row["Day"]?><br>
        <strong>Time:</strong> <?=$row["Time"]?><br>
        <strong>Cost:</strong> <?=$row["Cost"]?><br>
        <strong>Description:</strong> <?=$row["Description"]?><br>

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
</body>
</html>