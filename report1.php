<?php
include "config.php";
if(!$conid) {
    echo "Couldn't Connect".mysqli_connect_error(); // ตรวจสอบ error
}
$query = "select * from employee";
$result = mysqli_query($conid, $query);
while($data = mysqli_fetch_array($result)) { //เก็บผลลัพธ์ไว้ที่ $data  ถ้าใช้ fetch_array จะเป็นชื่อ field เหมือนโค้ดใน while
    echo "$data[employeeID] -- ";
    echo "$data[name] -- ";
    echo "$data[job] -- ";
    echo "$data[salary] -- ";
    echo "$data[departmentID] <br>";
}
?>