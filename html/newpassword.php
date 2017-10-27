<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payrolladmin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$emp_id = $_POST['empid'];
$emp_password = $_POST['password'];

$sql = "UPDATE login SET password='$emp_password' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
// close connection

mysqli_close($link);
header("Location: addaccount3.php"); /* Redirect browser */
exit();

?>