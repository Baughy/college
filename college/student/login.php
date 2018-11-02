<?
session_start();

//server credentials
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

$sql = "SELECT * FROM College_Registration WHERE emailaddress='{$_POST['email']}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($_POST['password'] == $row['password']) {
        $_SESSION['studentid'] = $row['Userid'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['emailaddress'] = $row['emailaddress'];
        $_SESSION['phonenumber'] = $row['phonenumber'];
        $_SESSION['streetaddress'] = $row['streetaddress'];
        $_SESSION['streetaddress2'] = $row['streetaddress2'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['state'] = $row['state'];
        $_SESSION['postalcode'] = $row['postalcode'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['avatar'] = $row['avatar'];
        
        
        header("Location: dashboard.php");
        } else { 
            $_SESSION['loginerrormessage'] = '<div style="color:red;">Invalid Login</div>';
            header("Location: index.php"); }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
You are logged in!





</body>
</html>