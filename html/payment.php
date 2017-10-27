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
$basic_salary = $_POST['basic_salary'];
$payslip_no = $_POST['payslip_no']; 
$DA = $_POST['DA'];
$HRA = $_POST['HRA'];
$bonus = $_POST['bonus'];
$gratuity = $_POST['gratuity'];
$allowance = $_POST['allowance'];
$PT = $_POST['PT'];
$date_of_payment = $_POST['date_of_payment'];


/*$sql2 = "SELECT basic_salary FROM employee WHERE empid = '$emp_id'";

$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_array($result2);
*/

$EPF = 0.12 * ($basic_salary + $DA);
$ESI = 0.08 * ($basic_salary + $DA);
$gross_wages = $basic_salary + $DA + $HRA + $bonus + $gratuity + $allowance;
$total_deduction = $EPF + $ESI + $PT ;


$sql = "INSERT INTO payment VALUES ('$emp_id','$payslip_no','$basic_salary','$DA','$HRA','$bonus','$gratuity','$allowance','$gross_wages','$EPF','$ESI','$PT','$total_deduction','$date_of_payment')";

if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);
header("Location: updatepayment.php"); /* Redirect browser */
exit();

?>