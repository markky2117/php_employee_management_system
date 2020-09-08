<head>
    <script language="javascript">  // ทำเป็นป๊อปอัพหน้าใหม่ เอา js ไว้ใน <head>
        function openpopup(theURL,width,height) {
            leftpos = (screen.availWidth - width) / 2;
            toppos = (screen.availHeight - height) / 2;
            window.open(theURL, "viewdetails", "width=" + width + ",height" + height + ",left=" +leftpos + ",top=" + toppos);
        }
    </script>
</head>
<?php
include "config.php";
if(!$conid) {
    echo "Couldn't connect".mysqli_connect_error();
    
}
$query = "SELECT * FROM employee e, department d WHERE e.departmentID = d.departmentID";
$result = mysqli_query($conid, $query);
echo "<table border=1>";
echo "<tr>";
echo "<th>รหัสพนักงาน</th>";
echo "<th>ชื่อพนักงาน</th>";
echo "<th>ตำแหน่ง</th>";
echo "<th>เงินเดือน</th>";
echo "<th>แผนก</th>";
echo "<th>Action</th>";
echo "</tr>";
while($data = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>$data[0]</td>";
    echo "<td>$data[1]</td>";
    echo "<td>$data[2]</td>";
    echo "<td>$data[3]</td>";
    echo "<td>$data[6]</td>";
    
    

?>
<td><a href="" onclick="openpopup('employee_delete.php?empid=<?php echo $data[0]?>',500,200);return false;"title="ลบพนักงาน">delete</a><a href="" onclick="openpopup('employee_update.php?empid=<?php echo $data[0]?>',500,200);return false;"title="แก้ไขข้อมูล"> update</a></td> <!--ส่งข้อมูลไอดีแบบเป็นลิงค์-->
</tr>
<?php
}
?>
</table>