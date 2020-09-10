<?php
include "config.php";
if (!$conid) {
    echo "Could't connect" . mysqli_connect_error();

}
$query = "SELECT * FROM employee";
$result = mysqli_query($conid, $query);
echo "<table>";
while ($data = mysqli_fetch_array($result)) { // ทำการดึงข้อมูลมาแสดงในตาราง
    $program = "";
    $dba = "";
    $system = "";
    
    if ($data['job'] == "Programmer")
        $program = "checked";
    
    if ($data['job'] == "DBA")
        $dba = "checked";

    if ($data['job'] == "System Adminstrator")
        $system = "checked";
    
    echo "<tr>";
    echo "<td>$data[name]</td>";
    echo "<td><input type=radio value=programmer $program disabled>Programmer</td>";
    echo "<td><input type=radio value=dba $dba disabled>DBA</td>";
    echo "<td><input type=radio value=system $system disabled>System Adminstrator</td>";
    echo "</tr>";
}
