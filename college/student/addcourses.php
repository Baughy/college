<?
session_start();
$servername = "localhost";
$username = "baughy";
$password = "Espeon1";
$dbname = "jaxcode56";

// loop through the courses selected and add to schedule table

foreach ($_POST["CourseID"] as $courseid) {
    

    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO mysch (studentid, courseid)
    VALUES ('{$_SESSION['studentid']}', '{$courseid}')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
   
}
?>

