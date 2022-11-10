<?php

$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$birth = $_POST["birth"];
$phone1 = $_POST["phone1"];
$phone2 = $_POST["phone2"];
$phone3 = $_POST["phone3"];
$phone_no = $phone1." ".$phone2." ".$phone3;

$reg_date = date("Y-m-d");

echo "<p> 아이디 : ".$u_id."</p>";
echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 이름 : ".$u_name."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 휴대폰 번호 : ".$phone_no."</p>";

include "../inc/dbcon.php";

$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "birth, phone_no, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name', ";
$sql .= "'$birth', '$phone_no', '$reg_date');";
/* echo $sql; */

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo"
    <script type=\"text/javascript\">
        location.href = \"welcome.php\";
    </script>
";
?>