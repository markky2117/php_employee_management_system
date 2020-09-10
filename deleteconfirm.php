<?php
include "config.php";
if(!$conid) {
    echo "Couldn't connect".mysqli_connect_error();

}
$query_delete = "DELETE FROM employee WHERE employeeID = '$_POST[empid]'";
if(mysqli_query($conid,$query_delete)) {
    echo "<SCRIPT LANGUAGE='JavaScript'>opener.location.reload();window.close();</SCRIPT>"; // ลบเสร็จแล้วปิดป็อปอัพอัตโนมัติ
}
