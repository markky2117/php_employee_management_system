<?php
include "config.php";

if(!$conid) {
    echo "Couldn't connect".mysqli_connect_error();
}
$query_update = "UPDATE employee SET employeeID = '$_POST[empid]', name = '$_POST[empname]', job = '$_POST[empjob]', salary = '$_POST[empsalary]', departmentID = '$_POST[departid]' WHERE employeeID = '$_POST[id]'";

if (mysqli_query($conid, $query_update)) {
    echo "<SCRIPT LANGUAGE='JavaScript'>opener.location.reload();window.close();</SCRIPT>";
}
?>