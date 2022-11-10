<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$sort = $_POST["sort"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$w_date = date("Y-m-d");
include "../inc/dbcon.php";

/* echo "<p> idx : ".$n_idx."</p>;
echo "<p> 구분 : ".$sort."</p>";
echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 작성일 : ".$w_date."</p>";
exit; */

$sql = "update notice set ";
$sql .= "sort='$sort',";
$sql .= "n_title='$n_title',";
$sql .= "n_content='$n_content',";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$n_idx;";
/* echo $sql;
exit; */

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"view.php?n_idx=$n_idx\";
    </script>
    ";
?>


