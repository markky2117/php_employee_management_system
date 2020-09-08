<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
    รหัสพนักงาน: <input type="text" name="empid">
    <p>
        ชื่อพนักงาน: <input type="text" name="empname">
        <p>
            ตำแหน่งงาน: <input type="text" name="empjob">
            <p>
                เงินเดือน: <input type="text" name="empsalary">
                <p>
                    แผนก: <select name="departid">
                        <option value="42">Finance</option>
                        <option value="128">Research and Development</option>
                        <option value="130">Marketing</option>
                    </select>
                    <input type="submit" name="submit" value="OK">
</form>
<?php
include "config.php";
if (isset($_POST['submit'])) {
    if (!$conid) {
        echo "Couldn't connect" . mysqli_connect_error();
    }
    $empid = $_POST['empid'];
    $empname = $_POST['empname'];
    $empjob = $_POST['empjob'];
    $empsalary = $_POST['empsalary'];
    $departid = $_POST['departid'];
    $query_insert = "INSERT INTO employee (employeeID, name, job, salary, departmentID) VALUES ('$empid', '$empname', '$empjob', '$empsalary', '$departid')";
    if(mysqli_query($conid, $query_insert)){ // บันทึกลง database
        echo "บันทึกข้อมูลพนักงานสำเร็จ";
    }
    
}
?>