<?php
// เรื่อง session
include "config.php"; // นำเข้าไฟล์ที่เชื่อมต่อ database
session_start();
error_reporting(~E_NOTICE); // ปิด error ทั้งหมด
$user = $_POST['user'];
$password = $_POST['pass'];
if(!$conid) {
    echo "Couldn't Connect".mysqli_connect_error(); // ตรวจสอบ error
}


//echo "$user <br>";
//echo "$password";
$query = "select * from users where user = '$user' AND password = '$password'";
$result = mysqli_query($conid, $query);
$numrecord = mysqli_num_rows($result); // นับ record ในตาราง users

if($numrecord <= 0) { // ถ้าจำนวน record ในตาราง users เป็น 0 แสดงว่าไม่พบ username password ที่รับเข้ามา
    echo "error login";
    echo "<center><img src=loader.gif></center>";    // ทำ loader รูป
    echo "<meta http-equiv='refresh' content='1;URL=login.php'/>"; // ทำ loader รูปแล้ว redirect
}
else {
    $_SESSION['ses_userid'] = session_id();
    $_SESSION['ses_user'] = $user;
    echo "<center><img src=loader.gif></center>";
    echo "<meta http-equiv='refresh' content='1;URL=adminindex.php'/>";
}
?>