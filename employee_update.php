<?php
include "config.php";
if(!$conid) {
    echo "Couldn't connect".mysqli_connect_error();

}
$query = "SELECT * FROM employee e, department d WHERE e.departmentID = d.departmentID AND e.
employeeID = '$_GET[empid]'";
$result = mysqli_query($conid, $query);
$data = mysqli_fetch_row($result);
echo "<form action='updateconfirm.php' method='post'>";
echo "<table>";
echo "<tr>";
echo "<td>รหัสพนักงาน</td>";
echo "<td><input type=text value=$data[0] name=empid></td>";
echo "</tr>";
echo "<tr>";
echo "<td>ชื่อพนักงาน</td>";
echo "<td><input type=text value=$data[1] name=empname></td>";
echo "</tr>";
echo "<tr>";
echo "<td>ตำแหน่ง</td>";
echo "<td><input type=text value=$data[2] name=empjob></td>";
echo "</tr>";
echo "<tr>";
echo "<td>เงินเดือน</td>";
echo "<td><input type=text value=$data[3] name=empsalary></td>";
echo "</tr>";
echo "</form>";
?>