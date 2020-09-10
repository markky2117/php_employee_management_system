<?php
include "config.php";
if(!$conid) {
    echo "Couldn't connect".mysqli_connect_error();
}
$query = "SELECT * FROM employee WHERE employeeID = '$_GET[empid]'";
$result = mysqli_query($conid, $query);
$data = mysqli_fetch_array($result);
echo "<form action='deleteconfirm.php' method='post'>";
echo "<input type=hidden name=empid value=$_GET[empid]>";
echo "รหัสพนักงาน: ";
echo "<font color=blue>$data[employeeID]</font><p>";
echo "ชื่อพนักงาน: ";
echo "<font color=blue>$data[name]</font><p>";
echo "<input type=submit value=Confirm>";
echo "</form>";
