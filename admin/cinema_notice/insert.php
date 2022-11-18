<?php
include "../inc/session.php";
$table_name = "cinema_notice";
$cate = $_POST["cate"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "../data/$name");
};
/* echo $_FILES["up_file"]["tmp_name"]."/";
echo $_FILES["up_file"]["name"]."/";
echo $_FILES["up_file"]["type"]."/";
echo $_FILES["up_file"]["size"];
exit; */
$f_name = $_FILES["up_file"]["name"];
$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];
$w_date = date("Y-m-d");
include "../inc/dbcon.php";

/* echo "<p> 구분 : ".$cate."</p>";
echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 작성일 : ".$w_date."</p>";
exit; */

$sql = "insert into $table_name(";
$sql .= "cate, n_title, n_content, w_date, ";
$sql .= "f_name, f_type, f_size";
$sql .= ") values(";
$sql .= "'$cate', '$n_title', '$n_content', '$w_date',";
$sql .= "'$f_name', '$f_type', '$f_size'";
$sql .= ");";
/* echo $sql;
exit; */

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"list.php\";
    </script>
    ";
?>