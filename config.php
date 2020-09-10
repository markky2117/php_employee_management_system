<?php
error_reporting(~E_NOTICE); // ปิด error ทั้งหมด
$conid = mysqli_connect("localhost", "root", "", "employeedb"); // เชื่อมต่อ database

mysqli_set_charset($conid, "utf8"); // ให้รองรับภาษาไทย
