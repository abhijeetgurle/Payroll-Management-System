
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

$emp_id = $_GET['empid'];
$emp_id = trim($emp_id);

$sql2 = "SELECT * FROM employee WHERE empid = '$emp_id'";

$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_array($result2);

$sql = "SELECT * FROM payment WHERE empid = '$emp_id'";

$result = mysqli_query($conn, $sql);

$sql3 = "CALL calculatesalary($emp_id,@salary)";

$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT @salary";

$result4 = mysqli_query($conn, $sql4);

$row4 = mysqli_fetch_array($result4);
/*if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}*/
/*echo "$result";*/
echo "<center><strong>Payment Info</strong></center><br>";
echo '<center><table border=2>
    <tr>
        <th>Attribute</th>
        <th>Value</th>
    </tr></center>';

while ($row = mysqli_fetch_array($result)) {
    echo '
            <tr>
            <td>Name</td>
            <td>'.$row2['fullname'].'</td>
            <tr>
            <td>Employee ID</td>
            <td>'.$row['empid'].'</td>
            </tr>
            <tr>
            <td>Payslip No</td>
            <td>'.$row['payslip_no'].'</td>
            </tr>
            <tr>
            <td>Basic Salary</td>
            <td>'.$row['basic_salary'].'</td>
            </tr>
            <tr>
            <td>DA</td>
            <td>'.$row['DA'].'</td>
            </tr>
            <tr>
            <td>HRA</td>
            <td>'.$row['HRA'].'</td>
            </tr>
            <tr>
            <td>Bonus</td>
            <td>'.$row['bonus'].'</td>
            </tr>
            <tr>
            <td>Gratuity</td>
            <td>'.$row['gratuity'].'</td>
            </tr>
            <tr>
            <td>Allowance</td>
            <td>'.$row['allowance'].'</td>
            </tr>
            <tr>
            <td>Gross Wages</td>
            <td>'.$row['gross_wages'].'</td>
            </tr>
            <tr>
            <td>EPF</td>
            <td>'.$row['EPF'].'</td>
            </tr>
            <tr>
            <td>ESI</td>
            <td>'.$row['ESI'].'</td>
            </tr>
            <tr>
            <td>PT</td>
            <td>'.$row['PT'].'</td>
            </tr>
            <tr>
            <td>Total Deductions</td>
            <td>'.$row['total_deduction'].'</td>
            </tr>
            <tr>
            <td>Total Wages</td>
            <td>'.$row4['@salary'].'</td>
            </tr>
            <tr>
            <td>Date Of Payment</td>
            <td>'.$row['date_of_payment'].'</td>
            </tr>
            <tr>
            <td>Signature</td>
            <td></td>
        </tr>';


}

echo '
</table>';

?>