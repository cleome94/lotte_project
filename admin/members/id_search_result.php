<?php
$u_id = $_POST["user_id"];
/* echo $u_id;
exit;
 */
include "../inc/dbcon.php";
$sql = "select u_id from members where u_id='$u_id';";
/* echo $sql;
exit; */

$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지 "<?php echo $u_id; ?>"검색 결과 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/id_search_result.css">
    <script src="../../js/id_search_result.js"></script>
</head>
<body>
    <?php if(!$num){ ?>
    <p>
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="able">있는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="javascript:history.back();">[다시 검색]</a>
        <a href="#" onclick="return_id()">[사용하기]</a>
    </p>
    <?php } else{ ?>
    <p>
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="unable">없는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="javascript:history.back();">[다시 검색]</a>
        <a href="#" onclick="window.close()">[닫기]</a>
    </p>
    <?php
    };

    mysqli_close($dbcon);
    ?>
</body>
</html>