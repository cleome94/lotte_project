<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from members";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지</title>
    <link rel="stylesheet" type="text/css" href="../../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/css_login.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/login.js"></script>
    <style>
        .admin{
            width:1000px;
            margin:0 auto;
            margin-top:200px;
            margin-bottom:-160px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="wrap">
    <?php include "../../inc/header.php"; ?>
        <main id="content" class="content">
            <h2 class="admin">* 관리자 페이지 *</h2>
            <section class="menu_wrap hr">
                <h2 class="blind">로그인 종류</h2>
                <ul class="menu">
                    <li><button type="button" class="menu2" onclick="menu2_on()">로그인</button></li>
                    <li><button type="button" class="menu3" onclick="menu3_on()">비회원</button></li>
                    <li><button type="button" class="menu4" onclick="menu4_on()">비회원 예매확인</button></li>
                </ul>
            </section>

            <div class="login_wrap">
                <div class="login0">
                    <span class="login_line"></span>
                    <h2 class="blind">로그인</h2>
                    <p class="txt1">L.POINT, 롯데시네마 ID로 별도의 회원가입 없이 이용 가능 합니다.</p>
                    <form class="log_form" action="login_ok.php" method="post" onsubmit="return form_check()">
                        <p>
                            <input type="text" name="u_id" id="u_id" class="id" placeholder="아이디 또는 이메일을 입력해 주세요.">
                        </p>
                        <p>
                            <input type="password" name="pwd" id="pwd" class="pwd" placeholder="비밀번호를 입력해 주세요.">
                        </p>
                        <p>
                            <label for="ck">
                            <input type="checkbox" class="ck" id="ck" value="a">
                            <small class="rmb">아이디 저장</small>
                            </label>
                        </p>
                        <p>
                            <button type="submit" id="log_btn" class="log_btn">로그인</button>
                        </p>
                </form>
                </div>
                <div class="join">
                    <a class="join01" href="../join.php">회원가입</a>
                    <a class="join02" href="#">아이디 찾기</a>
                    <a class="join03" href="#">비밀번호 찾기</a>
                </div>
                <div class="login1">
                    <p><a class="login2" href="#">휴대폰번호로 로그인</a></p>
                    <p><a class="login3" href="#">네이버로그인</a></p>
                    <p><a class="login4" href="#">카카오톡로그인</a></p>
                    <p><a class="login5" href="#">광고</a></p>
                </div>
            </div>
            <div class="nmb1_bg">
                <div class="nmb1_wrap">
                    <span class="nmb1_line"></span>
                    <h2 class="blind">비회원 로그인</h2>
                    <p class="txt2">· 비회원 로그인 시 예매 및 예매확인/취소 메뉴만 이용 가능하며 관람권, 할인권을 포함한 기타 결제, 할인수단은 정회원 로그인 시 사용 가능 합니다.</p>
                    <form class="form1_wrap" action="insert.php" method="post" onsubmit="return form_check()">
                        <fieldset class="form1">
                            <legend class="blind">비회원 정보</legend>
                            <div class="name_wrap">
                                <label><span>이름</span>
                                <input type="text" name="u_name" id="u_name" class="name" placeholder="이름을 입력해 주세요."></label>
                            </div>

                            <div class="birth_wrap">
                                <label><span>생년월일</span>
                                <input type="text" name="birth" id="birth" class="birth" placeholder="생년월일 8자리를 입력해 주세요."></label>
                            </div>

                            <div class="pn_wrap">
                                <label><span>휴대폰 번호</span>
                                <input type="text" name="pn" id="pn" class="pn" placeholder="휴대폰 번호(-생략)를 입력해 주세요."></label>
                            </div>

                            <div class="rp1_wrap">
                                <label><span>예매 비밀번호</span>
                                <input type="password" name="rp1" id="rp1" class="rp1" placeholder="예매 비밀번호(4자리)를 입력해 주세요."></label>
                            </div>

                            <div class="rp2_wrap">
                                <label><span>예매 비밀번호 확인</span>
                                <input type="password" name="rp2" id="rp2" class="rp2" placeholder="예매 비밀번호(4자리)를 재입력해 주세요."></label>
                            </div>
                        </fieldset>
                        <a class="ad4" href="#">광고</a>
                    
                        <div class="pi_wrap">
                            <section class="pi1">
                                <h2 class="blind">개인정보 이용 동의</h2>

                                <p class="pi2">개인정보의 수집목적 및 항목<br>
                                ① 개인정보 수집 목적: 비회원 예매확인 및 이용자 식별<br>
                                ② 수집항목: 이름, 휴대폰번호, 생년월일, 고유번호</p>

                                <p class="pi3">개인정보의 보유 및 이용기간
                                개인정보는 영화 예매 완료 후 동의일로부터 70일까지 위 이용 목적으로 이용 및 보유 합니다.<br>
                                (단, 생년월일은 이용자 식별 목적으로 이용되며 별도 보관되지 않습니다.)
                                다만, 상법 등 관련법령의 규정에 의하여 거래 관련 관리 의무 관계의 확인 등을
                                이유로 일정기간 보유하여야 할 필요가 있을 경우 아래와 같이 보유합니다.
                                대금결제 및 재화 등의 공급에 관한 기록 : 5년</p>

                                <p class="pi4">※ 비회원 예매서비스 제공을 위한 최소한의 개인정보이며 거부할 수 있습니다. 다만, 수집에 동의하지 않을 경우 서비스 이용이 제한됩니다.</p>
                            </section>
                        </div>
                        <div class="agree">
                            <label>
                            <input type="checkbox" id="yes1" name="yes" class="yes2"><span class="yes1">동의하기</span></label>
                        </div>
                        <p class="nmb_log_wrap">
                            <button type="submit" class="nmb1_btn" value="submit">비회원 로그인</button>
                        </p>
                    </form>
                </div>
            </div>
            <div class="nmb2_bg">
                <div class="nmb2_wrap">
                    <span class="nmb2_line"></span>
                    <h2 class="blind">비회원 예매 확인</h2>
                    <p class="txt2">· 비회원 로그인 시 예매 및 예매확인/취소 메뉴만 이용 가능하며 관람권, 할인권을 포함한 기타 결제, 할인수단은 정회원 로그인 시 사용 가능 합니다.</p>
                    <form class="form2_wrap" action="insert.php" method="post" onsubmit="return form_check()">
                        <fieldset class="form2">
                            <legend class="blind">비회원 예매 정보</legend>
                            <div class="name3_wrap">
                                <label><span>이름</span>
                                <input type="text" name="name3" id="name3" class="name3" placeholder="이름을 입력해 주세요."></label>
                            </div>

                            <div class="pn3_wrap">
                                <label><span>휴대폰 번호</span>
                                <input type="text" name="pn3" id="pn3" class="pn3" placeholder="휴대폰 번호(-생략)를 입력해 주세요."></label>
                            </div>

                            <div class="rp3_wrap">
                                <label><span>예매 비밀번호</span>
                                <input type="password" name="rp3" id="rp3" class="rp3" placeholder="예매 비밀번호(4자리)를 입력해 주세요."></label>
                            </div>
                        </fieldset>
                        <a class="ad3" href="#">광고</a>
                        
                        <div class="pi_wrap">
                            <section class="pi1">
                                <h2 class="blind">개인정보 이용 동의</h2>

                                <p class="pi2">개인정보의 수집목적 및 항목<br>
                                ① 개인정보 수집 목적: 비회원 예매확인 및 이용자 식별<br>
                                ② 수집항목: 이름, 휴대폰번호, 생년월일, 고유번호</p>

                                <p class="pi3">개인정보의 보유 및 이용기간
                                개인정보는 영화 예매 완료 후 동의일로부터 70일까지 위 이용 목적으로 이용 및 보유 합니다.<br>
                                다만, 상법 등 관련법령의 규정에 의하여 거래 관련 관리 의무 관계의 확인 등을
                                이유로 일정기간 보유하여야 할 필요가 있을 경우 아래와 같이 보유합니다.
                                대금결제 및 재화 등의 공급에 관한 기록 : 5년</p>

                                <p class="pi4">※ 비회원 예매서비스 제공을 위한 최소한의 개인정보이며 거부할 수 있습니다. 다만, 수집에 동의하지 않을 경우 서비스 이용이 제한됩니다.</p>
                            </section>
                        </div>
                        <div class="agree">
                            <label>
                            <input type="checkbox" id="yes2" name="yes" class="yes3"><span class="yes1">동의하기</span></label>
                        </div>
                        <p class="nmb_ck_wrap">
                            <button type="submit" class="nmb2_btn" value="submit">비회원 예매확인</button>
                        </p>
                    </form>
                </div>
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

        <?php include "../../inc/footer.php"; ?>
    </div>
</body>
</html>