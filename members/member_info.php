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
    <title>내정보 조회 / 수정 - 롯데시네마</title>
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
                    <h2>내정보 조회 / 수정</h2>
                    <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
                    <table>
                        <tr>
                            <th>아이디</th> 
                            <td><?php echo $array["u_id"]; ?></td>
                        </tr>
                        <tr>
                            <th>이름</th> 
                            <td><?php echo $array["u_name"]; ?></td>
                        </tr>
                        <tr>
                            <th><label for="pwd">비밀번호</label></th>
                            <td><input type="password" name="pwd" id="pwd"></td>
                        </tr>
                        <tr>
                            <th><label for="repwd">비밀번호 확인</label></th>
                            <td><input type="password" name="repwd" id="repwd"></td>
                        </tr>
                        <?php
                            $birth = str_replace("-", "", $array["birth"]);
                        ?>
                        <tr>
                            <th><label for="birth">생년월일</label></th>
                            <td><input type="text" name="birth" id="birth" value="<?php echo $birth; ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="phone">휴대폰 번호</label></th>
                            <td><input type="text" name="phone" id="phone" value="<?php echo $array["phone"]; ?>"></td>
                        </tr>
                    </table>
                    <p class="btn">
                        <button type="button" onclick="history.back()">취소</button>
                        <button type="submit">수정완료</button>
                        <button type="button" onclick="mem_del()">회원탈퇴</button>
                    </p>
            </form>
        </div>
        <div class="ad_wrap">
                <div class="ad">
                    <a href="#" class="banner_ad1">EBS 인기 애니 '엄마 까투리' 첫 극장판 탄생
                        도시로 간 까투리 가족
                        9월 8일, 까투리기차 출발합니다!</a>
                    <a class="banner_ad2" href="#">현대해상 다이렉트 자동차보험
                    신규 자동차 보험 30만원 이상 가입시
                    롯데 3만원 상품권 지급!</a>
                </div>
            </div>
    </main>
    <?php include "../inc/footer.php"; ?>
</body>
</html>