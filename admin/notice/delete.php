<?php
$n_idx = $_GET["n_idx"];
include "../inc/dbcon.php";
$sql="delete from notice where idx=$n_idx;";
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo"
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href=\"list.php\";
    </script>;
"
?>