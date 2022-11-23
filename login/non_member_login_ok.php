<?php
session_start();

$u_name = $_POST["name3"];
$mobile = $_POST["pn3"];
$t_pwd = $_POST["rp3"];
/* echo $u_name." / ".$mobile."/".$t_pwd; */
include "../inc/dbcon.php";
$sql = "select idx, u_name, mobile, t_pwd from non_member where u_name='$u_name';";
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);
if(!$num){
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 이름이 없습니다.\");
            history.back();
        </script>
    ";
} else{
    $array = mysqli_fetch_array($result);
    $g_mobile = $array["mobile"];
    if($mobile != $g_mobile){
        echo"
            <script type=\"text/javascript\">
                alert(\"휴대폰 번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
    }
    $g_pwd = $array["t_pwd"];
    if($t_pwd != $g_pwd){
        echo "
            <script type=\"text/javascript\">
                alert(\"예매 비밀번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
    } else{
        echo"
            <script type=\"\">
                alert(\"로그인 되었습니다.\");
            </script>
        ";
        $_SESSION["s_name"] = $array["u_name"];
        $_SESSION["s_mobile"] = $array["mobile"];

    };
};
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"../index.php\";
    </script>
";
?>