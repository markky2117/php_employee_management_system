<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post" action="result.php">
        ชื่อ <input type="text" size="20" name="name"> <p>
        ที่อยู่ <textarea cols="30" rows="10" maxlength="100" name="address"></textarea> <p>
        เพศ <input type="radio" value="ชาย" name="sex" >ชาย
        <input type="radio" value="หญิง" name="sex">หญิง <p>
        ความถนัด <input type="checkbox" value="html" name="html">HTML
        <input type="checkbox" value="php" name="php">PHP
        <input type="checkbox" value="Java" name="java">Java
        คณะ <select size="1" name="faculty">
            <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
            <option value="วิศวกรรมศาสตร์">วิศวะกรรมศาสตร์</option>
            <option value="ศิลปะศาสตร์">ศิลปะศาสตร์</option>
        </select>
        <input type="submit" value="OK">
        <input type="reset" value="cancel">
    </form>
    <hr>
   
</body>
</html>