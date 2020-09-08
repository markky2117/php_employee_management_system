<?php
include "config.php";
if(!$conid) {
    echo "Couldn't Connect".mysqli_connect_error(); // ตรวจสอบ error
}
$query = "select * from employee";
$result = mysqli_query($conid, $query);
while($data = mysqli_fetch_row($result)) { //เก็บผลลัพธ์ไว้ที่ $data  ถ้าใช้ fetch_row จะเป็นตำแหน่งของ field เหมือนโค้ดใน while
    echo "$data[0] -- ";
    echo "$data[1] -- ";
    echo "$data[2] -- ";
    echo "$data[3] -- ";
    echo "$data[4] <br>";
}
?>