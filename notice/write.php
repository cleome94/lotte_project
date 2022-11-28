<?php
include "../inc/session.php";
include "../inc/admin_check.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전체 공지 글쓰기 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/write.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/notice_write.js"></script>
</head>
<body>
    <?php include "../inc/header.php"; ?>
    <form name="notice_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset>
            <legend>전체 공지</legend>
            <p>
                작성자 <?php echo $s_name; ?>
            </p>
            <p>
                <label for="sort">구분</label>
                <input type="text" id="sort" name="sort" class="sort" value="전체">
            </p>
            <p>
                <label for="n_title">제목</label>
                <input type="text" id="n_title" name="n_title" class="n_title" size="90">
            </p>
            <p>
                <label for="n_content">내용</label>
                <textarea cols="100" rows="30" id="n_content" name="n_content" class="n_content"></textarea>
            </p>
            <p>
                <label for="up_file">파일첨부</label>
                <input type="file" name="up_file" id="up_file">
            </p>
            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
    <?php include "../inc/footer.php"; ?>
</body>
</html>