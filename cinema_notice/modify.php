<?php
include "../inc/session.php";
include "../inc/admin_check.php";
$n_idx = $_GET["n_idx"];
$table_name = "cinema_notice";
include "../inc/dbcon.php";
$sql = "select * from $table_name where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화관 공지 수정 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/cinema_notice_modify.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/cinema_notice_write.js"></script>
</head>
<body>
<?php include "../inc/header.php"; ?>
<h2 class="notice">공지사항</h2>
<form name="cinema_notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset>
            <legend>영화관 공지</legend>
            <p class="writer">
                <span>작성자</span> <?php echo $s_name; ?>
            </p>
            <p class="sort">
                <label for="cate">구분</label>
            </p>
            <p>
                <select name="cate" id="cate" class="cate">
                    <option value="a"<?php if($array["cate"] == "a") echo " selected"; ?>>지역</option>
                    <option value="b"<?php if($array["cate"] == "b") echo " selected"; ?>>서울</option>
                    <option value="c"<?php if($array["cate"] == "c") echo " selected"; ?>>경기/인천</option>
                    <option value="d"<?php if($array["cate"] == "d") echo " selected"; ?>>충청/대전</option>
                    <option value="e"<?php if($array["cate"] == "e") echo " selected"; ?>>전라/광주</option>
                    <option value="f"<?php if($array["cate"] == "f") echo " selected"; ?>>경북/대구</option>
                    <option value="g"<?php if($array["cate"] == "g") echo " selected"; ?>>경남/부산/울산</option>
                    <option value="h"<?php if($array["cate"] == "h") echo " selected"; ?>>강원</option>
                    <option value="i"<?php if($array["cate"] == "i") echo " selected"; ?>>제주</option>
                </select>
            </p>
            
            <p class="title"><label for="n_title">제목</label></p>
            <p><input type="text" id="n_title" name="n_title" class="n_title" value="<?php echo $array["n_title"]; ?>"></p>
            
            <p class="content"><label for="n_content">내용</label></p>
            <p><textarea id="n_content" name="n_content" class="n_content"><?php echo $array["n_content"]; ?></textarea></p>

            <p class="upload">
                <label for="up_file" class="file">첨부파일 [<?php echo $array["f_name"]; ?>]</label>
                <input type="text" class="upload_name" value="첨부파일" placeholder="첨부파일" readonly>
                <input type="file" name="up_file" id="up_file">
            </p>
            <div class="btn">
                <button class="back_btn" type="button" onclick="history.back()">이전 페이지</button>
                <button class="ok_btn" type="submit">수정하기</button>
            </div>
        </fieldset>
    </form>
    <?php include "../inc/footer.php"; ?>
</body>
</html>