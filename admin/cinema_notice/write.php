<?php
include "../inc/session.php";
include "../inc/login_check.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지 영화관 공지 글쓰기 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <script src="../../js/cinema_notice_write.js"></script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <form name="cinema_notice_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset>
            <legend>영화관 공지</legend>
            <p>
                작성자 <?php echo $s_name; ?>
            </p>
            <p>
                <label for="cate">구분</label>
                <select name="cate" id="cate" class="cate">
                    <option value="b">서울</option>
                    <option value="c">경기/인천</option>
                    <option value="d">충청/대전</option>
                    <option value="e">전라/광주</option>
                    <option value="f">경북/대구</option>
                    <option value="g">경남/부산/울산</option>
                    <option value="h">강원</option>
                    <option value="i">제주</option>
                </select>
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
</body>
</html>