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

$sql2 = "SELECT * FROM employee";

$result2 = mysqli_query($conn, $sql2);



echo "<center><strong>Employee Info</strong></center><br>";
echo '<center><table border=2 width=100%>
    <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Department Name</th>
        <th>Address</th>
        <th>Salary Type</th>
        <th>Education</th>
        <th>location</th>
    </tr></center>';
while ($row2 = mysqli_fetch_array($result2)) {    
echo '
            <tr>
            <td>'.$row2['empid'].'</td>
            <td>'.$row2['fullname'].'</td>
            <td>'.$row2['deptname'].'</td>
            <td>'.$row2['address'].'</td>
            <td>'.$row2['salary_type'].'</td>
            <td>'.$row2['education'].'</td>
            <td>'.$row2['location'].'</td>
        </tr>';
}

echo '
</table></center>';
?>