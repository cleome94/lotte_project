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
    <title>롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/css_main.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="slick/slick.min.js"></script>
    
</head>
<body>
    <div class="wrap">
        <?php include "header.php"; ?>

        <main id="content" class="content">
            <div class="main_bg">
                <section class="main_wrap">
                <h2 class="blind">영화 주요 소식</h2>
                <ul class="main_image">
                    <li><a href="#">
                        <img src="images/main_image01.jpg" alt="겨울왕국, 엔칸토 제작진 디즈니 스트레인지 월드 11월 23일 대개봉">
                    </a>
                    </li>
                    <li><a href="#">
                            <img src="images/main_image02.jpg" alt="끝까지 싸워 살아남아라! 킹덤2 아득한 대지로 2022년 11월 16일 개봉">
                        </a>
                    </li>
                </ul>
                </section>
            </div>
            <div class="ro_bg">
                <div class="ro_wrap">
                    <section class="ro">
                        <h2 class="blind">상영 정보</h2>
                            <h3><a class="ro1" href="#">예매 순위</a></h3>
                        <div class="movie_wrap">
                            <div class="movie1">
                                <span class="m1">헌트 예매하기</span>
                                <div class="bg1">
                                    <span></span>
                                    <a href="#" class="m1_t">예매하기</a>
                                    <a href="#" class="m1_m">상세정보</a>
                                </div>
                                <p class="m_cont">1위 헌트</p>  
                                <p class="m_rate">예매율 31% <span class="star">평점</span><span class="m_score"> 9.2</span></p>
                                
                            </div>
                            <div class="movie2">
                                <span class="m2">육사오 예매하기</span>
                                <div class="bg2">
                                    <span></span>
                                    <a href="#" class="m2_t">예매하기</a>
                                    <a href="#" class="m2_m">상세정보</a>
                                </div>
                                <p class="m_cont">2위 육사오</p>
                                <p class="m_rate">예매율 21% <span class="star">평점</span><span class="m_score"> 9.2</span></p>
                            </div>
                            <div class="movie3">
                                <span class="m3">공조2:인터내셔날 상세정보 보기</span>
                                <div class="bg3">
                                    <span></span>
                                    <a href="#" class="m3_t">예매하기</a>
                                    <a href="#" class="m3_m">상세정보</a>
                                </div>
                                <p class="m_cont">3위 공조2:인터내셔날</p>
                                <p class="m_rate1">예매율 12.5% <span class="m_d_day">D-8</span></p>
                            </div>
                            <div class="movie4">
                                <span class="m4">한산:용의 출현 예매하기</span>
                                <div class="bg4">
                                    <span></span>
                                    <a href="#" class="m4_t">예매하기</a>
                                    <a href="#" class="m4_m">상세정보</a>
                                </div>
                                <p class="m_cont">4위 한산:용의 출현</p>
                                <p class="m_rate">예매율 11.1% <span class="star">평점</span><span class="m_score"> 9.4</span></p>
                            </div>
                            <div class="movie5">
                                <span class="m5">광고 극장판 엄마 까투리 도시로 간 까투리 가족 상세정보보기</span>
                                <div class="bg5">
                                    <span></span>
                                    <a href="#" class="m5_m">상세정보</a>
                                </div>
                                <p class="blind">광고</p>
                            </div>
                            <div class="movie6">
                                <span class="m6">리미트 예매하기</span>
                                <div class="bg6">
                                    <span></span>
                                    <a href="#" class="m6_t">예매하기</a>
                                    <a href="#" class="m6_m">상세정보</a>
                                </div>
                                <p class="m_cont">5위 리미트</p>
                                <p class="m_rate">예매율 5.4% <span class="star">평점</span><span class="m_score"> 0</span></p>
                            </div>
                            <div class="movie7">
                                <span class="m7">탑건:매버릭 예매하기</span>
                                <div class="bg7">
                                <span></span>
                                    <a href="#" class="m7_t">예매하기</a>
                                    <a href="#" class="m7_m">상세정보</a>
                                </div>
                                <p class="m_cont">6위 탑건:매버릭</p>
                                <p class="m_rate">예매율 2.7% <span class="star">평점</span><span class="m_score"> 9.8</span></p>
                            </div>
                            <div class="movie8">
                                <span class="m8">놉 예매하기</span>
                                <div class="bg8">
                                    <span></span>
                                    <a href="#" class="m8_t">예매하기</a>
                                    <a href="#" class="m8_m">상세정보</a>
                                </div>
                                <p class="m_cont">7위 놉</p>
                                <p class="m_rate">예매울 1.9% <span class="star">평점</span><span class="m_score"> 9.8</span></p>
                            </div>
                            <div class="movie9">
                                <span class="m9">불릿 트레인 예매하기</span>
                                <div class="bg9">
                                    <span></span>
                                    <a href="#" class="m9_t">예매하기</a>
                                    <a href="#" class="m9_m">상세정보</a>
                                </div>
                                <p class="m_cont">8위 불릿 트레인</p>
                                <p class="m_rate">예매율 1.0% <span class="star">평점</span><span class="m_score"> 7.2</span></p>
                            </div>
                            <div class="movie10">
                                <span class="m10">모가디슈 상세정보 보기</span>
                                <div class="bg10">
                                    <span></span>
                                    <a href="#" class="m10_t">예매하기</a>
                                    <a href="#" class="m10_m">상세정보</a>
                                </div>
                                <p class="m_cont">9위 모가디슈</p>
                                <p class="m_rate1">예매율 0.6% <span class="m_d_day">D-7</span></p>
                            </div>
                            <div class="movie11">
                                <span class="m11">블랙폰 상세정보 보기</span>
                                <div class="bg11">
                                    <span></span>
                                    <a href="#" class="m11_t">예매하기</a>
                                    <a href="#" class="m11_m">상세정보</a>
                                </div>
                                <p class="m_cont">10위 블랙폰</p>
                                <p class="m_rate1">예매율 0.6% <span class="m_d_day">D-7</span></p>
                            </div>
                            <div class="movie12">
                                <span class="m12">비상선언 예매하기</span>
                                <div class="bg12">
                                    <span></span>
                                    <a href="#" class="m12_t">예매하기</a>
                                    <a href="#" class="m12_m">상세정보</a>
                                </div>
                                <p class="m_cont">11위 비상선언</p>
                                <p class="m_rate">예매율 0.5% <span class="star">평점</span><span class="m_score"> 8.3</span></p>
                            </div>
                            <div class="movie13">
                                <span class="m13">사랑할 땐 누구나 최악이 된다 예매하기</span>
                                <div class="bg13">
                                    <span></span>
                                    <a href="#" class="m13_t">예매하기</a>
                                    <a href="#" class="m13_m">상세정보</a>
                                </div>
                                <p class="m_cont">12위 사랑할 땐 누구나 최악이 된다</p>
                                <p class="m_rate">예매율 0.5% <span class="star">평점</span><span class="m_score"> 8.8</span></p>
                            </div>
                            <div class="movie14">
                                <span class="m14">헤어질 결심 예매하기</span>
                                <div class="bg14">
                                    <span></span>
                                    <a href="#" class="m14_t">예매하기</a>
                                    <a href="#" class="m14_m">상세정보</a>
                                </div>
                                <p class="m_cont">13위 헤어질 결심</p>
                                <p class="m_rate">예매율 0.5% <span class="star">평점</span><span class="m_score"> 9.1</span></p>
                            </div>
                            <div class="movie15">
                                <span class="m15">바다 탐험대 옥토넛 : 탐험선 대작전 예매하기</span>
                                <div class="bg15">
                                    <span></span>
                                    <a href="#" class="m15_t">예매하기</a>
                                    <a href="#" class="m15_m">상세정보</a>
                                </div>
                                <p class="m_cont">14위 바다 탐험대 옥토넛 : 탐험선 대작전</p>
                                <p class="m_rate">예매율 0.4% <span class="star">평점</span><span class="m_score"> 9</span></p>
                            </div>
                            <div class="movie16">
                                <span class="m16">미니언즈2 예매하기</span>
                                <div class="bg16">
                                    <span></span>
                                    <a href="#" class="m16_t">예매하기</a>
                                    <a href="#" class="m16_m">상세정보</a>
                                </div>
                                <p class="m_cont">15위 미니언즈2</p>
                                <p class="m_rate">예매율 0.4% <span class="star">평점</span><span class="m_score"> 9</span></p>
                            </div>
                            <div class="movie17">
                                <span class="m17">썬다운 예매하기</span>
                                <div class="bg17">
                                    <span></span>
                                    <a href="#" class="m17_t">예매하기</a>
                                    <a href="#" class="m17_m">상세정보</a>
                                </div>
                                <p class="m_cont">16위 썬다운</p>
                                <p class="m_rate">예매율 0.3% <span class="star">평점</span><span class="m_score"> 0</span></p>
                            </div>
                            <div class="movie18">
                                <span class="m18">노스맨 예매하기</span>
                                <div class="bg18">
                                    <span></span>
                                    <a href="#" class="m18_t">예매하기</a>
                                    <a href="#" class="m18_m">상세정보</a>
                                </div>
                                <p class="m_cont">17위 노스맨</p>
                                <p class="m_rate">예매율 0.2% <span class="star">평점</span><span class="m_score"> 10</span></p>
                            </div>
                            <div class="movie19">
                                <span class="m19">DC 리그 오브 슈퍼-펫 예매하기</span>
                                <div class="bg19">
                                    <span></span>
                                    <a href="#" class="m19_t">예매하기</a>
                                    <a href="#" class="m19_m">상세정보</a>
                                </div>
                                <p class="m_cont">18위 DC 리그 오브 슈퍼-펫</p>
                                <p class="m_rate">예매율 0.1% <span class="star">평점</span><span class="m_score"> 8.9</span></p>
                            </div>
                            <div class="movie20">
                                <span class="m20">우리가 말하지 않은 것 상세정보 보기</span>
                                <div class="bg20">
                                    <span></span>
                                    <a href="#" class="m20_t">예매하기</a>
                                    <a href="#" class="m20_m">상세정보</a>
                                </div>
                                <p class="m_cont">19위 우리가 말하지 않은 것</p>
                                <p class="m_rate1">예매율 0.1% <span class="m_d_day">D-1</span></p>
                            </div>
                            <div class="movie21">
                                <span class="m21">뽀로로 극장판 드래곤캐슬 대모험 예매하기</span>
                                <div class="bg21">
                                    <span></span>
                                    <a href="#" class="m21_t">예매하기</a>
                                    <a href="#" class="m21_m">상세정보</a>
                                </div>
                                <p class="m_cont">20위 뽀로로 극장판 드래곤캐슬 대모험</p>
                                <p class="m_rate">예매율 0.0% <span class="star">평점</span><span class="m_score"> 9.7</span></p>
                            </div>
                            <div class="movie22">
                                <span class="m22">콘서트를 지켜라 예매하기</span>
                                <div class="bg22">
                                    <span></span>
                                    <a href="#" class="m22_t">예매하기</a>
                                    <a href="#" class="m22_m">상세정보</a>
                                </div>
                                <p class="m_cont">21위 콘서트를 지켜라</p>
                                <p class="m_rate">예매율 0.0% <span class="star">평점</span><span class="m_score"> 8</span></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="menu_wrap">
                <div class="member_menu">
                    <h2 class="blind">회원 메뉴</h2>
                    <ul>
                        <li><a class="menu1" href="#">할인안내</a></li>
                        <li><a class="menu2" href="#">포인트</a></li>
                        <li><a class="menu3" href="#">멤버십</a></li>
                        <li><a class="menu4" href="#">틴틴클럽</a></li>
                        <li><a class="menu5" href="#">브라보클럽</a></li>
                    </ul>
                </div>
            </div>

            <div class="prev_wrap">
                <section class="prev">
                    <h2><a href="#">시사회 / 무대인사</a></h2>
                    <ul class="prev0">
                        <li><a href="#" class="prev1">"모가디슈"재개봉 기념 스페셜GV</a></li>
                        <li><a href="#" class="prev2">"육사오"웃음 상영회</a></li>
                        <li><a href="#" class="prev3">"리미트"개봉주 무대인사</a></li>
                        <li><a href="#" class="prev4">"헌트"개봉3주차 무대인사 안내</a></li>
                        <li><a href="#" class="prev5">"극장판 엄마 까투리:도시로 간 까투리 가족"회원 시사 이벤트</a></li>
                        <li><a href="#" class="prev6">"인생은 아름다워" 굿즈 상영회</a></li>
                    </ul>
                        <a class="prev_more" href="#">더보기 ></a>
                </section>
            </div>
            
            <div class="event_wrap">
                <section class="event">
                <h2><a href="#">이벤트</a></h2>
                    <ul>
                        <li><a href="#" class="event1">HOT 영화의 기록을 영원히, 포토티켓북 런칭</a></li>
                        <li><a href="#" class="event2">HOT 롯데시네마 추석 선물 패키지</a></li>
                        <li><a href="#" class="event3">공조2:인터내셔날 AR액션티켓 구매하고, 무료 증정품 받자!</a></li>
                        <li><a href="#" class="event4">불릿 트레인 보고 아트카드도 받자!</a></li>
                        <li><a href="#" class="event5">M포인트 상시 영화티켓 장당 6,000m포인트 사용 자세히 보기</a></li>
                        <li><a href="#" class="event6">시그니처 아트카드 북 VOL.3 런칭</a></li>
                    </ul>
                    <a class="event_more" href="#">더보기 ></a>
                </section>
            </div>

            <div class="special_wrap">
                <section class="special">
                    <h2><a href="#">스페셜관</a></h2>
                    <ul class="special_room">
                        <li class="special_room1"><a href="#">샤롯데</a></li>
                        <li class="special_room2"><a href="#">수퍼플렉스G</a></li>
                        <li class="special_room3"><a href="#">수퍼S</a></li>
                        <li class="special_room4"><a href="#">수퍼플렉스</a></li>
                        <li class="special_room5"><a href="#">수퍼4D</a></li>
                        <li class="special_room6"><a href="#">컬러리움</a></li>
                        <li class="special_room7"><a href="#">씨네 살롱</a></li>
                        <li class="special_room8"><a href="#">씨네 컴포트</a></li>
                    </ul>
                    <a class="special_more" href="#">더보기 ></a>
                </section>
            </div>

        
                <section class="notice hr">
                <h2><a href="#">공지사항</a></h2>
                <div class="notice_list">
                    <ul class="notice_title">
                        <li><a href="#">영화관람권 가격 변경 안내</a></li>
                        <li><a href="#">2D 일반 관람권 활용 스페셜관 이용 안내</a></li>
                        <li><a href="#">롯데시네마 영구VIP 서비스 종료 안내</a></li>
                    </ul>
                </div>

                    <a class="notice_more" href="notice.php">더보기 ></a>
                </section>
            
            <div class="ad_wrap">
                <div class="ad">
                    <p class="banner_ad">현대해상 다이렉트 자동차보험
                    신규 자동차 보험 30만원 이상 가입시
                    롯데 3만원 상품권 지급!</p>
                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>
    </div>
</body>
</html>