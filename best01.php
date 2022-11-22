<?php
include "inc/session.php";
include "inc/dbcon.php";
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
    <title>스토어 상세 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/css_best01.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/best01.js"></script>
    <script>

    </script>
</head>
<body>
    <div class="wrap">
    <?php include "header.php"; ?>

        <main id="content" class="content">
            <div class="pd_wrap">
                <section>
                    <h3 class="pd1">데이트의 완성 2인 패키지</h3>
                    <table class="pd_table">
                            <tr>
                                <th class="tit" colspan="2">데이트의 완성 2인 패키지</th>
                            </tr>
                            <tr class="txt1">
                                <th class="txt_price">32,000원&nbsp;</th>
                                <td id="txt_price_ins">36,000원</td>
                            </tr>
                            <tr class="txt1">
                                <th>구성품</th>
                                <td>일반관람권 2매 + 스위트콤보 교환권 1매</td>
                            </tr>
                            <tr class="txt1">
                                <th>구매제한</th>
                                <td>제한없음</td>
                            </tr>
                            <tr class="txt1">
                                <th>유효기간</th>
                                <td>온라인 관람권 24개월 / 스위트샵 상품권 24개월</td>
                            </tr>
                    </table>
                    <div class="line"></div>
                    <div class="btn_wrap">
                        <button class="btn_mins" onclick="btn_mins()">삭제</button>
                        <input type="text" class="count" id="count" size="2" maxlength="4" value="1" readonly>
                        <button class="btn_plus" onclick="btn_plus()">추가</button>
                    </div>
                    
                    <div class="txt_all_wrap">
                        <span class="txt_all">총 상품금액</span>
                        <span class="txt_price1">32,000원</span>
                    </div>
                </section>
                    <button type="submit" class="btn_pre">선물하기</button>
                    <button type="submit" class="btn_buy">구매하기</button>
            </div>
            <div class="htu_wrap">
                <button type="button" class="htu_btn" onclick="htu_btn_on()">사용방법</button>
                <button type="button" class="prec_btn" onclick="prec_btn_on()">유의사항</button>
                <h4 class="blind">사용방법</h4>
                <div class="htu1">
                    <h5>사용방법</h5>

                    <p>- 구성 : 2D일반관람권 2매 + 스위트콤보 교환권 1매</p><br>

                    <p>- 유효기간 : 구매일 ~ 24개월(관람일 기준)</p><br>

                    <p>- 영화관람권은 2D 일반영화에만 적용 가능합니다.<br>
                    (스페셜관 및 좌석에 적용 불가/ 영화관람권은 L.point적립 불가, 관람권 사용 시 VIP 승급금액은 관람권 판매금액으로 반영)</p><br>

                    <p>- 팝콘 : 오리지널맛 제공(시즈닝 변경 시 금액 추가) / 음료 : 탄산음료 제공(기타 음료 및 사이즈 변경 시 금액 추가)</p><br>

                    <p>- 매점 교환권의 경우 아래 사용불가 영화관을 확인해주시기 바랍니다.</p>

                    <h5>사용불가 영화관</h5>

                    <p class="un_mov">- 서울/강원 : 가양, 강동, 브로드웨이(신사), 속초, 수락산, 수유, 장안, 춘천<br>
                    - 경기/인천 : 라페스타, 부천역, 시화, 안성, 영종하늘도시, 오산(원동), 인덕원, 주엽, 평택비전(뉴코아), 하남미사<br>
                    - 대구/경상 : 거창, 경주, 경주황성, 대구현풍, 드라이브오시리아, 마산(합성동), 부산명지, 사천, 상주, 양산물금, 엠비씨네(진주), 영주, 영천, 통영,
                    포항, 프리미엄경남대, 프리미엄만경, 프리미엄센트럴, 프리미엄안동, 프리미엄진주(중안), 프리미엄칠곡,프리미엄해운대(장산역)<br>
                    - 전라/충청/제주 : 광주광산, 당진, 서귀포, 서산, 익산모현, 제주삼화지구, 제주아라, 전주송천, 천안불당, 충장로, 충주(모다아울렛)</p><br>

                    <p>※ 사용불가 영화관은 롯데시네마 사정에 의해 변경될 수 있습니다.</p>
                </div>
                
                
                <h4 class="blind">유의사항</h4>
                <div class="prec1">
                    <h5>취소/환불</h5>

                    <p>- 스토어 상품의 취소기한은 구매일로부터 70일 입니다.<br>

                    - 구매취소는 취소기한 내 마이 > 예매/구매내역에서만 가능합니다.(현장취소 불가)<br>

                    - 구매하신 상품은 부분환불 및 현금환불이 되지 않습니다.<br>

                    - 패키지 상품 중 1장이라도 사용한 경우 환불이 불가합니다.</p>

                    <h5>기타</h5>

                    <p>- 상품 확인은 마이 > 쿠폰함에서 가능합니다.<br>

                    - 영화관람권은 롯데시네마 홈페이지, 모바일 웹/앱에서 사용가능하며, 매점교환권은 롯데시네마 스위트샵 (매점)에서 쿠폰 제시 후 사용가능합니다.<br>

                    - 선물한 상품은 마이 > 결제내역 > 구매/선물내역 메뉴에서 30일 내 1회 재발송가능합니다. (단, 받는 사람 번호는 변경 불가)<br>

                    - 본 관람권은 기재된 유효기간까지 (관람일 기준) 사용할 수 있습니다.<br>

                    - 유효기간 만료 시 고객센터(1544-8855)를 통해 발급일로부터 5년까지 연장할 수 있으며, 1회 연장 시 단위는 3개월입니다.</p>

                    <p>※고객센터: 1544-8855</p>
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

        <?php include "footer.php"; ?>
    </div>
</body>
</html>