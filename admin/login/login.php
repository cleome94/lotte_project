<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지 로그인 - 롯데시네마</title>
    <script src="../../js/admin_login.js"></script>
</head>
<body>
    <h2>로그인</h2>
    <form name="login_form" action="login_ok.php" method="post" onsubmit="login_form_check()">
        <fieldset>
            <legend>로그인</legend>
            <p>
                <label for="u_id">아이디</label>
                <input type="text" name="u_id" id="u_id" autofocus>
            </p>
            <p>
                <label for="pwd">비밀번호</label>
                <input type="password" name="pwd" id="pwd">
            </p>
            <p>
                <button type="button" onclick="history.back();">돌아가기</button>
                <button type="submit">로그인</button>
            </p>
        </fieldset>
    </form>
</body>
</html>