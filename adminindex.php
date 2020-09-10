<?php
session_start();
error_reporting(~E_NOTICE); // ปิด error ทั้งหมด
$ses_userid = $_SESSION['ses_userid'];
$ses_user = $_SESSION['ses_user'];
//echo "$ses_userid <br>";
//echo "$ses_user";

if(($ses_userid <> session_id()) || ($ses_user == "")) {
    echo "คุณไม่ได้ล็อกอิน";
    echo "<meta http-equiv='refresh' content='1;URL=login.php'/>";
}
else {
    echo "Welcome to Admin <br>";
    echo "<a href=logout.php>Logout</a>";
}
