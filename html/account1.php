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
$emp_username = $_POST['username'];
$emp_password = $_POST['password'];
$emp_email = $_POST['email'];

$sql = "INSERT INTO login VALUES ('$emp_id','$emp_username','$emp_password','$emp_email')";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);
header("Location: addaccount.php"); /* Redirect browser */
exit();

?>

