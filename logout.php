<?php
session_start();
error_reporting(~E_NOTICE); // ปิด error ทั้งหมด
unset($_SESSION['ses_userid']); //ทำลาย session
unset($_SESSION['ses_user']);//ทำลาย session
echo "<center><img src=loader.gif></center>";    // ทำ loader รูป
    echo "<meta http-equiv='refresh' content='1;URL=login.php'/>"; // ทำ loader รูปแล้ว redirect
?>