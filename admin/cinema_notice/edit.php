<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$cate = $_POST["cate"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
$w_date = date("Y-m-d");
if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "../data/$f_name");

    $f_type = $_FILES["up_file"]["type"];
    $f_size = $_FILES["up_file"]["size"];
    
    $sql = "update cinema_notice set ";
    $sql .= "cate='$cate',";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date', ";
    $sql .= "f_name='$f_name', ";
    $sql .= "f_type='$f_type', ";
    $sql .= "f_size='$f_size' ";
    $sql .= "where idx=$n_idx;";
    /* echo $sql;
    exit; */
} else{
    $sql = "update cinema_notice set ";
    $sql .= "cate='$cate',";
    $sql .= "n_title='$n_title',";
    $sql .= "n_content='$n_content',";
    $sql .= "w_date='$w_date' ";
    $sql .= "where idx=$n_idx;";
    /* echo $sql;
    exit; */
};
include "../inc/dbcon.php";

/* echo "<p> idx : ".$n_idx."</p>";
echo "<p> 구분 : ".$cate."</p>";
echo "<p> 제목 : ".$n_title."</p>";
echo "<p> 내용 : ".$n_content."</p>";
echo "<p> 작성일 : ".$w_date."</p>";
exit; */

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"view.php?n_idx=$n_idx\";
    </script>
    ";
?>


