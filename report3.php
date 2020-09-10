<?php
include "config.php";
if(!$conid) {
    echo "Couldn't Connect".mysqli_connect_error(); // ตรวจสอบ error
}
$query = "select * from employee";
$result = mysqli_query($conid, $query);
$numrecord = mysqli_num_rows($result); //ถ้าใช้ num_rows จะเป็นการนับจำนวน record
echo "Number of record = $numrecord";
