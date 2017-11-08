<?php
$servername = "localhost";
$username = "root";
$password = "mi<Abhijeet>-F25";
$dbname = "payrolladmin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$emp_username = $_POST['username'];
$emp_password = $_POST['password'];

$sql = "UPDATE login SET password='$emp_password' WHERE empid=1";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE login SET username='$emp_username' WHERE empid=1"; 
if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
// close connection

mysqli_close($link);
header("Location: adminaccount.php"); /* Redirect browser */
exit();

?>