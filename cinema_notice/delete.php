<?php
$n_idx = $_GET["n_idx"];
$table_name = "cinema_notice";
include "../inc/dbcon.php";
$sql="delete from $table_name where idx=$n_idx;";
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo"
    <script type=\"text/javascript\">
        alert(\"정상 처리되었습니다.\");
        location.href=\"../notice.php\";
    </script>
"
?>