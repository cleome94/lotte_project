<?php
include "../inc/session.php";

if($s_id != "admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href=\"http://localhost/project/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지</title>
    <style>
        body{
            width:1000px;
            margin:0 auto;
        }
    </style>
</head>
<body>
    <h1>* 관리자 페이지 *</h1>
    <div class="top_menu">
        <span class="pnt_name">관리자님, 안녕하세요.</span>
        <a href="login/logout.php">[로그아웃]</a>
        <a href="members/member_info.php">[내정보]</a>
        <a href="../index.php">[홈페이지]</a>
    </div>
    <hr>
    <div class="nav">
        <a href="index.php">[홈으로]</a>
        <a href="members/list.php">[회원관리]</a>
        <a href="notice/list.php">[전체 공지사항]</a>
        <a href="cinema_notice/list.php">[영화관 공지사항]</a>
    </div>
    <hr>
</body>
</html>