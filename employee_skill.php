<?php
include "config.php";
if (!$conid) {
    echo "Could't connect" . mysqli_connect_error();
}
$query = "SELECT * FROM employee";
$result = mysqli_query($conid, $query);
echo "<table>";
while ($data = mysqli_fetch_array($result)) { // ทำการดึงข้อมูลมาแสดงในตาราง
    $query_skill = "SELECT * FROM employeeskills WHERE employeeID = '$data[employeeID]'";
    $result_skill = mysqli_query($conid, $query_skill);
    $c = "";
    $db2 = "";
    $java = "";
    $perl = "";
    $vb = "";
    $linux = "";
    $nt = "";
    $php = "";
    $jsp = "";

    while ($data_skill = mysqli_fetch_array($result_skill)) {
        switch ($data_skill['skill']) {
            case "C":
                $c = "checked";
                break;
            case "DB2":
                $db2 = "checked";
                break;
            case "Java":
                $java = "checked";
                break;
            case "Perl":
                $perl = "checked";
                break;
            case "VB":
                $vb = "checked";
                break;
            case "Linux":
                $linux = "checked";
                break;
            case "NT":
                $nt = "checked";
                break;
            case "PHP":
                $php = "checked";
                break;
            case "JSP":
                $jsp = "checked";
                break;
        }
    }
    echo "<tr>";
    echo "<td>$data[name]</td>";
    echo "<td><input type=checkbox value=c $c disabled>C</td>";
    echo "<td><input type=checkbox value=db2 $db2 disabled>DB2</td>";
    echo "<td><input type=checkbox value=java $java disabled>Java</td>";
    echo "<td><input type=checkbox value=perl $perl disabled>Perl</td>";
    echo "<td><input type=checkbox value=vb $vb disabled>VB</td>";
    echo "<td><input type=checkbox value=linux $linux disabled>Linux</td>";
    echo "<td><input type=checkbox value=nt $nt disabled>NT</td>";
    echo "<td><input type=checkbox value=php $php disabled>PHP</td>";
    echo "<td><input type=checkbox value=jsp $jsp disabled>JSP</td>";
    echo "</tr>";
}
