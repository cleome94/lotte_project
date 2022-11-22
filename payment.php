<?php
include "inc/session.php";
include "inc/dbcon.php";
$sql = "select * from members";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>결제 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/css_payment.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/payment.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header.php"; ?>
        <main id="content" class="content">
            <div class="pd1">
                <h2>상품정보</h2>
                <a href="#"></a>
                <p>데이트의 완성2인 패키지</p>
            </div>

            <div class="pd2_wrap">
                <div class="pd2">
                    <h3>데이트의 완성2인 패키지</h3>
                    <h4 class="blind">구성품</h4>
                    <p>일반관람권 2매 + 스위트콤보 교환권 1매</p>
                    <p>1개</p>
                </div>
            </div>
            <form class="form_wrap" name="pm_form" action="insert.php" method="get" onsubmit="return form_check()">
                <div class="pm1">
                    <h2>결제수단 선택</h2>
                    <p><input type="radio" value="신용카드" name="pay" id="pay1"><label for="pay1">신용카드</label></p>
                    <p><input type="radio" value="무통장 입금" name="pay" id="pay2"><label for="pay2">무통장 입금</label></p>
                    <p><input type="radio" value="계좌이체" name="pay" id="pay3"><label for="pay3">계좌이체</label></p>
                    <div class="pm2">
                        <h3 class="blind">간편 결제</h3>
                        <p><input type="radio" value="네이버페이" name="pay" id="pay4"><label for="pay4"><span class="pay4_1"></span><span class="pay4_2">네이버페이</span></label></p>
                        <p><input type="radio" value="카카오페이" name="pay" id="pay5"><label for="pay5"><span class="pay5_1"></span><span class="pay5_2">카카오페이</span></label></p>
                        <p><input type="radio" value="토스" name="pay" id="pay6"><label for="pay6"><span class="pay6_1"></span><span class="pay6_2">토스</span></label></p>
                    </div>
                </div>

                <div class="tpa">
                    <h2>총 결제 금액</h2>
                    <div class="tpa1">
                        <p class="tpa1_1">상품금액 <input type="text" value="32,000" readonly><span>원</span></p>
                        <p>할인금액 <input type="text" value="-0" readonly><span>원</span></p>
                    </div>
                    <div class="tpa1_hr"></div>
                    <p class="tpa2">결제금액 총 <input type="text" value="32,000" readonly><span>원</span></p>
                    <button type="submit" class="tpa_btn">결제하기</button>
                </div>
            </form>
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

        <?php include "header.php"; ?>
    </div>
</body>
</html>