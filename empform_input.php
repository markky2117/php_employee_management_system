<?php include "config.php"; ?>
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
    รหัสพนักงาน: <input type="text" name="empid" value="<?php echo $_POST['empid']; ?>"> <!-- เวลาใส่ input แล้วบันทึก จะไม่ให้มันรีเซ็ตกลับไปตัวเริ่มต้น -->
    <p>
        ชื่อพนักงาน: <input type="text" name="empname" value="<?php echo $_POST['empname']; ?>"> <!-- เวลาใส่ input แล้วบันทึก จะไม่ให้มันรีเซ็ตกลับไปตัวเริ่มต้น -->
        <p>
            ตำแหน่งงาน: <input type="text" name="empjob" value="<?php echo $_POST['empjob']; ?>"> <!-- เวลาใส่ input แล้วบันทึก จะไม่ให้มันรีเซ็ตกลับไปตัวเริ่มต้น -->
            <p>
                เงินเดือน: <input type="text" name="empsalary" value="<?php echo $_POST['empsalary']; ?>"> <!-- เวลาใส่ input แล้วบันทึก จะไม่ให้มันรีเซ็ตกลับไปตัวเริ่มต้น -->
                <p>
                    <?php
                    $query = "SELECT * FROM department";
                    $result = mysqli_query($conid, $query);
                    ?>
                    แผนก: <select name="departid">
                        <?php
                        while ($data = mysqli_fetch_array($result)) { // เวลาเลือก dropdown แล้วบันทึก จะไม่ให้มันรีเซ็ตกลับไปตัวเริ่มต้น
                            echo "<option value=$data[departmentID]";

                            if ($_POST['departid'] == $data['departmentID'])
                                echo " selected";
                            echo ">$data[name]</option> \n";
                        }
                        ?>
                    </select>
                    <input type="submit" name="submit" value="OK">
</form>
<?php

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
    if (mysqli_query($conid, $query_insert)) { // บันทึกลง database
        echo "บันทึกข้อมูลพนักงานสำเร็จ";
    }
}
?>