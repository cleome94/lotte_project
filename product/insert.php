<?php
include "../inc/session.php";
$p_name =$_POST["p_name"];
$f_price =$_POST["f_price"];
$per =$_POST["per"];
$s_price =$_POST["s_price"];
$com =$_POST["com"];
$pr =$_POST["pr"];
$validity =$_POST["validity"];
$htu =$_POST["htu"];
$prec =$_POST["prec"];
if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "../data/$name");
};
$f_name = $_FILES["up_file"]["name"];
$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];
include "../inc/dbcon.php";
$sql = "insert into product(";
$sql .= "p_name, f_price, per, s_price, com, ";
$sql .= "pr, validity, htu, prec, ";
$sql .= "f_name, f_type, f_size";
$sql .= ") values(";
$sql .= "'$p_name', '$f_price', '$per', '$s_price', '$com',";
$sql .= "'$pr', '$validity', '$htu', '$prec',";
$sql .= "'$f_name', '$f_type', '$f_size'";
$sql .= ");";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
echo "
    <script type=\"text/javascript\">
        location.href=\"list.php\";
    </script>
    ";
?>