<?php
include "../inc/session.php";
include "../inc/admin_check.php";
$n_idx = $_GET["n_idx"];
include "../inc/dbcon.php";
$sql = "select * from notice where idx=$n_idx;";
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
    <title>전체 공지 수정 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/notice_modify.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/notice_write.js"></script>
</head>
<body>
<?php include "../inc/header.php"; ?>
<h2 class="notice">공지사항</h2>
<form name="notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset>
            <legend>전체 공지</legend>
            <p class="writer">
                <span>작성자</span> <?php echo $s_name; ?>
            </p>
            <p class="cate"><label for="sort">구분</label></p>
            <p><input type="text" id="sort" name="sort" class="sort" value="<?php echo $array["sort"]; ?>"></p>
            
            <p class="title"><label for="n_title">제목</label></p>
            <p><input type="text" id="n_title" name="n_title" class="n_title"value="<?php echo $array["n_title"]; ?>"></p>
            
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