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
$payslip_no = $_POST['payslip_no'];
$basic_salary = $_POST['basic_salary'];
$DA = $_POST['DA'];
$HRA = $_POST['HRA'];
$bonus = $_POST['bonus'];
$gratuity = $_POST['gratuity'];
$allowance = $_POST['allowance'];
$PT = $_POST['PT'];
$date_of_payment = $_POST['date_of_payment'];
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
$sql = "UPDATE payment SET payslip_no='$payslip_no' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET basic_salary='$basic_salary' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET DA='$DA' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

} 

$sql = "UPDATE payment SET HRA='$HRA' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET bonus='$bonus' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET gratuity='$gratuity' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET allowance='$allowance' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$EPF = 0.12 * ($basic_salary + $DA);
$ESI = 0.08 * ($basic_salary + $DA);
$gross_wages = $basic_salary + $DA + $HRA + $bonus + $gratuity + $allowance;
$total_deduction = $EPF + $ESI + $PT ;

$sql = "UPDATE payment SET gross_wages='$gross_wages' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET EPF='$EPF' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET ESI='$ESI' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET PT='$PT' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

$sql = "UPDATE payment SET date_of_payment='$date_of_payment' WHERE empid='$emp_id'";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
// close connection

mysqli_close($link);
header("Location: updatepayment2.php"); /* Redirect browser */
exit();

?>