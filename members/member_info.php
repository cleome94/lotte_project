<?php
include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";
$sql = "select * from members where idx=$s_idx";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/member_info.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/member_info.js"></script>
    <script>

    </script>
</head>
<body>
    <?php include "../inc/header.php"; ?>
    <main id="content" class="content">
        <div class="form_wrap">
            <form name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
                <fieldset>
                    <legend>내정보 조회 / 수정</legend>
                    <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                    <p>
                        아이디 <?php echo $array["u_id"]; ?>
                    </p>
                    <p>
                        이름 <?php echo $array["u_name"]; ?>
                    </p>
                    <p>
                        <label for="pwd">비밀번호</label>
                        <input type="passward" name="pwd" id="pwd">
                    </p>
                    <p>
                        <label for="repwd">비밀번호 확인</label>
                        <input type="passward" name="repwd" id="repwd">
                    </p>
                    <?php
                        $birth = str_replace("-", "", $array["birth"]);
                    ?>
                    <p>
                        <label for="birth">생년월일</label>
                        <input type="text" name="birth" id="birth" value="<?php echo $birth; ?>">
                    </p>
                    <p>
                        <label for="phone">휴대폰 번호</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $array["phone"]; ?>">
                    </p>
                    <p>
                        <button type="button" onclick="history.back()">취소</button>
                        <button type="submit">수정완료</button>
                        <button type="button" onclick="mem_del()">회원탈퇴</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </main>
    <?php include "../inc/footer.php"; ?>
</body>
</html>