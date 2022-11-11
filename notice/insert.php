<?php
include "../inc/session.php";
$sort = $_POST["sort"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$w_date = date("Y-m-d");
include "../inc/dbcon.php";

/* echo "<p> 구분 : ".$sort."</p>";
echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 작성일 : ".$w_date."</p>";
exit; */

$sql = "insert into notice(";
$sql .= "sort, n_title, n_content, w_date";
$sql .= ") values(";
$sql .= "'$sort', '$n_title', '$n_content', '$w_date'";
$sql .= ");";
/* echo $sql;
exit; */

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"../notice.php\";
    </script>
    ";
?>


