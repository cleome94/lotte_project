<?php
$u_name = $_POST["u_name"];
$birth = $_POST["birth"];
$mobile = $_POST["mobile"];
$t_pwd = $_POST["t_pwd"];
$reg_date = date("Y-m-d");

/* echo "<p> 이름 : ".$u_name."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 휴대폰번호 : ".$mobile."</p>";
echo "<p> 예매비밀번호 : ".$t_pwd."</p>";
echo "<p> 가입일 : ".$reg_date."</p>"; */

include "../inc/dbcon.php";

$sql = "insert into non_member(";
$sql .= "u_name, birth, mobile,";
$sql .= "t_pwd, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$birth', '$mobile',";
$sql .= "'$t_pwd', '$reg_date');";
/* echo $sql; */
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo"
<script type=\"text/javascript\">
alert(\"로그인 되었습니다.\");
</script>
";
echo"
    <script type=\"text/javascript\">
        location.href=\"../index.php\";
    </script>
";
?>