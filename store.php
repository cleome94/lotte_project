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
    <title>스토어 목록 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/css_store.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/store.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header.php"; ?>
        
        <main id="content" class="content">
            <div class="main_bg">
                <a class="main" href="#">팝콘&음료, 스낵에서 영화 티켓까지 한번에!</a>
            </div>
            <div class="menu">
                <h2 class="blind">스토어 종류</h2>
                <ul>
                    <li><button type="button" onclick="location.href='#best', menu1_on()" id="menu1" class="menu1">베스트</button></li>
                    <li><button type="button" onclick="location.href='#ticket', menu2_on()" id="menu2" class="menu2">관람권</button></li>
                    <li><button type="button" onclick="location.href='#pc', menu3_on()" id="menu3" class="menu3">포토카드</button></li>
                    <li><button type="button" onclick="location.href='#snack', menu4_on()" id="menu4" class="menu4">스낵음료</button></li>
                </ul>
            </div>
            
            <div class="best_bg" id="best_bg"></div>
            <div id="best"></div>
            <section class="best">
                <h2><a href="#best">베스트</a></h2>
                <div class="best1" onclick="location.href='best01.php'">
                    <a href="best01.php"></a>
                        <h3>데이트의 완성2인 패키지</h3>
                        <p class="cont1">일반관람권 2매 + 스위트콤보</p>
                        <p class="cont2"><span class="txt_sale">11%</span> <span class="txt_price">32,000원</span> <span class="txt_price_ins">36,000원</span></p>
                </div>
                <div class="best2">
                    <a href="#"></a>
                    <h3>일반 관람권</h3>
                    <p class="cont1">일반관람권 1매</p>
                    <p class="txt_price">13,000원</p>
                </div>
                <div class="best3">
                    <a href="#"></a>
                    <h3>샤롯데 관람권</h3>
                    <p class="cont1">샤롯데관람권 1매</p>
                    <p class="txt_price">35,000원</p>
                </div>
                <div class="best4">
                    <a href="#"></a>
                    <h3>추석 선물패키지 (2인 패키지)</h3>
                    <p class="cont1">일반관람권 2매 + 스위트콤보 1매</p>
                    <p class="cont2"><span class="txt_sale">22%</span> <span class="txt_price">28,000원</span> <span class="txt_price_ins">36,000원</span></p>
                </div>
                <div class="best5">
                    <a href="#"></a>
                    <h3>추석 선물패키지 (3인 패키지)</h3>
                    <p class="cont1">일반관람권 3매 + 스위트콤보</p>
                    <p class="cont2"><span class="txt_sale">24%</span> <span class="txt_price">37,000원</span> <span class="txt_price_ins">49,000원</span></p>
                </div>
                <div class="best6">
                    <a href="#"></a>
                    <h3>추석 선물패키지 (4인 패키지)</h3>
                    <p class="cont1">일반관람권 4매 + 더블콤보 1매</p>
                    <p class="cont2"><span class="txt_sale">28%</span> <span class="txt_price">48,500원</span> <span class="txt_price_ins">67,000원</span></p>
                </div>
                <div class="best7">
                    <a href="#"></a>
                    <h3>추석 선물패키지 (한산전용관람권)</h3>
                    <p class="cont1">한산전용관람권 1매</p>
                    <p class="cont2"><span class="txt_sale">46%</span> <span class="txt_price">7,000원</span> <span class="txt_price_ins">13,000원</span></p>
                </div>
            </section>
            
            
            <div class="ticket_bg" id="ticket_bg"></div>
            <div id="ticket"></div>
            <section class="ticket">
                <h2><a href="#ticket">관람권</a></h2>
                <div class="ticket1">
                    <a href="#"></a>
                    <h3>일반 관람권</h3>
                    <p class="cont1">일반 관람권 1매</p>
                    <p class="txt_price">13,000원</p>
                </div>
                <div class="ticket2">
                    <a href="#"></a>
                    <h3>수퍼 3종 관람권</h3>
                    <p class="cont1">수퍼 3종 관람권 1매<br>
                        (2D, 3D, 수퍼4D, 수퍼S, 수퍼플렉스G,<br>
                        수퍼플렉스 사용가능)</p>
                    <p class="txt_price">13,000원</p>
                </div>
                <div class="ticket3">
                    <a href="#"></a>
                    <h3>샤롯데 관람권</h3>
                    <p class="cont1">샤롯데관람권 1매</p>
                    <p class="txt_price">35,000원</p>
                </div>
            </section>
            
            <div class="pc_bg" id="pc_bg"></div>
            <div id="pc"></div>
            <section class="pc">
                <h2><a href="#pc">포토카드</a></h2>
                <div class="pc1">
                    <a href="#"></a>
                    <h3>포토카드 (일반)</h3>
                    <p class="txt_price">1,000원</p>
                </div> 
                <div class="pc2">
                    <a href="#"></a>
                    <h3>NCT x SANRIO TOWN 포토카드 (9월)</h3>
                    <p class="txt_price">3,000원</p>
                </div> 
                <div class="pc3">
                    <a href="#"></a>
                    <h3>임영웅 포토카드</h3>
                    <p class="txt_price">2,000원</p>
                </div> 
                <div class="pc4">
                    <a href="#"></a>
                    <h3>산리오캐릭터즈 포토카드<br>(9-10월)</h3>
                    <p class="txt_price">3,000원</p>
                </div> 
                <div class="pc5">
                    <a href="#"></a>
                    <h3>짱구는 못말려 포토카드<br>(9-10월)</h3>
                    <p class="txt_price">3,000원</p>
                </div> 
                <div class="pc6">
                    <a href="#"></a>
                    <h3>도라에몽 포토카드 (9-10월)</h3>
                    <p class="txt_price">3,000원</p>
                </div>
            </section>
            
            <div class="snack_bg" id="snack_bg"></div>
            <div id="snack"></div>
            <section class="snack">
                <h2><a href="#snack">스낵음료</a></h2>
                <div class="snack1">
                    <a href="#"></a>
                    <h3>스위트콤보</h3>
                    <p class="cont1">오리지널L + 탄산음료M2</p>
                    <p class="txt_price">10,000원</p>
                </div>
                <div class="snack2">
                    <a href="#"></a>
                    <h3>더블콤보</h3>
                    <p class="cont1">카라멜팝콘M + 오리지널팝콘M + 탄산음료M2</p>
                    <p class="txt_price">15,000원</p>
                </div>
                <div class="snack3">
                    <a href="#"></a>
                    <h3>콜라M</h3>
                    <p class="cont1">콜라M</p>
                    <p class="txt_price">2,500원</p>
                </div>
                <div class="snack4">
                    <a href="#"></a>
                    <h3>콜라L</h3>
                    <p class="cont1">콜라L</p>
                    <p class="txt_price">3,000원</p>
                </div>
                <div class="snack5">
                    <a href="#"></a>
                    <h3>사이다M</h3>
                    <p class="cont1">사이다M</p>
                    <p class="txt_price">2,500원</p>
                </div>
                <div class="snack6">
                    <a href="#"></a>
                    <h3>사이다L</h3>
                    <p class="cont1">사이다L</p>
                    <p class="txt_price">3,000원</p>
                </div>
                <div class="snack7">
                    <a href="#"></a>
                    <h3>오리지널팝콘M</h3>
                    <p class="cont1">오리지널팝콘M</p>
                    <p class="txt_price">5,000원</p>
                </div>
                <div class="snack8">
                    <a href="#"></a>
                    <h3>오리지널팝콘L</h3>
                    <p class="cont1">오리지널팝콘L</p>
                    <p class="txt_price">5,500원</p>
                </div>
                <div class="snack9">
                    <a href="#"></a>
                    <h3>카라멜팝콘M</h3>
                    <p class="cont1">카라멜팝콘M</p>
                    <p class="txt_price">6,000원</p>
                </div>
                <div class="snack10">
                    <a href="#"></a>
                    <h3>카라멜팝콘L</h3>
                    <p class="cont1">카라멜팝콘L</p>
                    <p class="txt_price">6,500원</p>
                </div>
                <div class="snack11">
                    <a href="#"></a>
                    <h3>반반팝콘(오리지널/카라멜)L</h3>
                    <p class="cont1">반반팝콘(오리지널 + 카라멜)L</p>
                    <p class="txt_price">6,500원</p>
                </div>
            </section>

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

        <?php include "footer.php"; ?>
    </div>
</body>
</html>