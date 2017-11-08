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
  
$full_name = $_POST['fullname'];
$emp_id = $_POST['empid'];
$emp_address = $_POST['address'];
$emp_deptname = $_POST['deptname'];
$emp_salary_type = $_POST["optionsRadios"];
$emp_degree = $_POST["degree"];
$emp_location = $_POST["location"];
/*
$full_name = mysqli_real_escape_string($link, $_POST["fullname"]);

$emp_id = mysqli_real_escape_string($link, $_POST["empid"]);

$emp_address = mysqli_real_escape_string($link, $_POST["address"]);

$emp_deptname = mysqli_real_escape_string($link, $_POST["deptname"]);

$emp_salary_type = mysqli_real_escape_string($link, $_POST["optionsRadios"]);

$emp_basic_salary = mysqli_real_escape_string($link, $_POST["basic_salary"]);

$emp_degree = mysqli_real_escape_string($link, $_POST["degree"]);

$emp_location = mysqli_real_escape_string($link, $_POST["location"]);

// attempt insert query execution
echo "$fname,$full_name,$emp_id";
*/
$sql = "UPDATE employee SET fullname='$full_name' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE employee SET deptname='$emp_deptname' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

} 

$sql = "UPDATE employee SET address='$emp_address' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE employee SET salary_type='$emp_salary_type' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}


$sql = "UPDATE employee SET education='$emp_degree' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE employee SET location='$emp_location' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
// close connection

mysqli_close($link);
header("Location: updateemployee2.php"); /* Redirect browser */
exit();

?>