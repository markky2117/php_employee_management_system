<?php
include "config.php";
if (!$conid) {
    echo "Could't connect" . mysqli_connect_error();
}
$query = "SELECT * FROM department";
$result = mysqli_query($conid, $query);
echo "<select name=department> \n";

while ($data = mysqli_fetch_array($result)) { // ทำการดึงข้อมูลมาแสดงในตาราง
    echo "<option value=$data[departmentID]>$data[name]</option> \n";
}
?>
</select>