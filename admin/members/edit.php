<?php
include "../inc/session.php";
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$phone = $_POST["phone"];
/* echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 휴대폰 번호 : ".$phone."</p>"; */
include "../inc/dbcon.php";

$sql ="update members set ";
$sql .="pwd='$pwd', ";
$sql .="birth='$birth', ";
$sql .="phone='$phone' ";
$sql .="where idx=$s_idx;";
/* echo $sql; */

$sql_nPwd ="update members set ";
$sql_nPwd .="birth='$birth', ";
$sql_nPwd .="phone='$phone' ";
$sql_nPwd .="where idx=$s_idx;";
echo $sql_nPwd;

if($pwd){
    mysqli_query($dbcon, $sql);
} else{
    mysqli_query($dbcon, $sql_nPwd);
};

mysqli_close($dbcon);
echo"
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href=\"member_info.php\";
    </script>;
"
?>