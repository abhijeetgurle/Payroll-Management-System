
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

$sql2 = "SELECT * FROM employee";

$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_array($result2);

$sql = "SELECT * FROM payment";

$result = mysqli_query($conn, $sql);


/*if(!mysqli_query($conn, $sql)){

//    echo "Records added successfully.";

//} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}*/
/*echo "$result";*/
echo "<center><strong>Payment Info</strong></center><br>";
echo '<table border=2>
    <tr>
        <th>Employee ID</th>
        <th>payslip no</th>
        <th>Basic Salary</th>
        <th>DA</th>
        <th>HRA</th>
        <th>Bonus</th>
        <th>Gratuity</th>
        <th>Other Allowance</th>
        <th>Gross Wages</th>
        <th>EPF</th>
        <th>ESI</th>
        <th>PT</th>
        <th>Total Deduction</th>
        <th>Total Wages</th>
        <th>Date Of Payment</th>
    </tr>';

//echo "JHJHHHJHJ";
 $total_wages=0;   
while ($row = mysqli_fetch_array($result)) {
   // $sql3 = "CALL calculatesalary($row['empid'],@salary)";

    //$result3 = mysqli_query($conn, $sql3);

    //$sql4 = "SELECT @salary";

    //$result4 = mysqli_query($conn, $sql4);

    //$row4 = mysqli_fetch_array($result4);
    $wages=0;
    $wages= $row['gross_wages']-$row['total_deduction'];
    $total_wages=$total_wages+$wages;
    echo '
            <tr>
            <td>'.$row['empid'].'</td>
            <td>'.$row['payslip_no'].'</td>
            <td>'.$row['basic_salary'].'</td>
            <td>'.$row['DA'].'</td>
            <td>'.$row['HRA'].'</td>
            <td>'.$row['bonus'].'</td>
            <td>'.$row['gratuity'].'</td>
            <td>'.$row['allowance'].'</td>
            <td>'.$row['gross_wages'].'</td>
            <td>'.$row['EPF'].'</td>
            <td>'.$row['ESI'].'</td>
            <td>'.$row['PT'].'</td>
            <td>'.$row['total_deduction'].'</td>
            <td>'.$wages.'</td>
            <td>'.$row['date_of_payment'].'</td>
        </tr>';


}

echo '
</table>';

echo '<br><br><center><table border=2>
    <tr>
        <th>Total Payment</th>
    </tr>
    <tr>
        <td>'.$total_wages.'</td>
    </tr></center>';


?>