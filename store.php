<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/css_store.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/store.js"></script>
</head>
<body>
    <div class="wrap">
        <div class="header_wrap">
            <header id="header" class="header">
                <h1 class="logo hr1"><a href="index.php">롯데시네마</a></h1>

                <nav class="gnb">
                    <h2 class="blind">주요메뉴</h2>
                    <ul class="gnb_menu_wrap">
                        <li class="gnb_menu1"><a href="#">예매</a>
                            <ul class="gnb_ticket">
                                <li><a href="#">예매하기</a></li>
                                <li><a href="#">상영시간표</a></li>
                                <li><a href="#">할인안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu2"><a href="#">영화</a>
                            <ul class="gnb_movie">
                                <li><a href="#">홈</a></li>
                                <li><a href="#">현재상영작</a></li>
                                <li><a href="#">상영예정작</a></li>
                                <li><a href="#">아르떼</a></li>
                                <li><a href="#">국립극장</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu3"><a href="#">영화관</a>
                            <ul class="gnb_cinema">
                                <li><a href="#">스페셜관</a></li>
                                <li><a href="#">서울</a></li>
                                <li><a href="#">경기/인천</a></li>
                                <li><a href="#">충청/대전</a></li>
                                <li><a href="#">전라/광주</a></li>
                                <li><a href="#">경북/대구</a></li>
                                <li><a href="#">경남/부산/울산</a></li>
                                <li><a href="#">강원</a></li>
                                <li><a href="#">제주</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu4"><a href="#">이벤트</a>
                            <ul class="gnb_event">
                                <li><a href="#">홈</a></li>
                                <li><a href="#">영화</a></li>
                                <li><a href="#">시사회/무대인사</a></li>
                                <li><a href="#">HOT</a></li>
                                <li><a href="#">제휴할인</a></li>
                                <li><a href="#">우리동네영화관</a></li>
                            </ul>
                        </li>
                        <li class="gnb_menu5"><a href="store.php">스토어</a>
                            <ul class="gnb_store">
                                <li><a href="store.php#best">베스트</a></li>
                                <li><a href="store.php#ticket">관람권</a></li>
                                <li><a href="store.php#snack">스낵음료</a></li>
                                <li><a href="store.php#pc">포토카드</a></li>
                            </ul>
                        </li>
                    </ul>
                    <button type="button" class="all_menu">전체메뉴</button>
                </nav>
                <div class="gnb_bg"></div>
                
                <div class="mm_wrap">
                    <div class="main_menu_wrap">
                        <div class="mt">
                            <h3 class="main_ticket">예매</h3>
                            <ul>
                                <li><a href="#">예매하기</a></li>
                                <li><a href="#">상영시간표</a></li>
                                <li><a href="#">할인안내</a></li>
                            </ul>
                        </div>
                        <div class="mm">
                            <h3 class="main_movie">영화</h3>
                            <ul>
                                <li><a href="#">홈</a></li>
                                <li><a href="#">현재상영작</a></li>
                                <li><a href="#">상영예정작</a></li>
                                <li><a href="#">아르떼</a></li>
                                <li><a href="#">국립극장</a></li>
                            </ul>
                        </div>
                        <div class="mc">
                            <h3 class="main_cinema">영화관</h3>
                            <ul>
                                <li><a href="#">스페셜관</a></li>
                                <li><a href="#">서울</a></li>
                                <li><a href="#">경기/인천</a></li>
                                <li><a href="#">충청/대전</a></li>
                                <li><a href="#">경북/대구</a></li>
                                <li><a href="#">경남/부산/울산</a></li>
                                <li><a href="#">강원</a></li>
                                <li><a href="#">제주</a></li>
                            </ul>
                        </div>
                        <div class="msc">
                            <h3 class="main_special">스페셜관</h3>
                            <ul>
                                <li><a href="#">홈</a></li>
                                <li><a href="#">샤롯데</a></li>
                                <li><a href="#">수퍼플렉스 G</a></li>
                                <li><a href="#">수퍼 S</a></li>
                                <li><a href="#">수퍼플렉스</a></li>
                                <li><a href="#">수퍼 4D</a></li>
                                <li><a href="#">컬러리움</a></li>
                                <li><a href="#">씨네살롱</a></li>
                                <li><a href="#">씨네패밀리</a></li>
                                <li><a href="#">씨네커플</a></li>
                                <li><a href="#">씨네비즈</a></li>
                                <li><a href="#">씨네컴포트(리클라이너)</a></li>
                            </ul>
                        </div>
                        <div class="ms">
                            <h3 class="main_store">스토어</h3>
                            <ul>
                                <li><a href="#">베스트</a></li>
                                <li><a href="#">관람권</a></li>
                                <li><a href="#">스낵음료</a></li>
                                <li><a href="#">포토카드</a></li>
                            </ul>
                        </div>
                        <div class="mms">
                            <h3 class="main_membership">멤버십</h3>
                            <ul>
                                <li><a href="#">VIP/Friend</a></li>
                                <li><a href="#">짝꿍클럽</a></li>
                                <li><a href="#">틴틴클럽</a></li>
                                <li><a href="#">브라보클럽</a></li>
                            </ul>
                        </div>
                        <div class="mmy">
                            <h3 class="main_my">마이</h3>
                            <ul>
                                <li><a href="#">결제내역</a></li>
                                <li><a href="#">쿠폰함</a></li>
                                <li><a href="#">MY이벤트</a></li>
                                <li><a href="#">MY클럽</a></li>
                                <li><a href="#">MY무비로그</a></li>
                                <li><a href="#">MY정보 관리</a></li>
                            </ul>
                        </div>
                        <div class="mcs">
                            <h3 class="main_cs">고객센터</h3>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">1:1문의</a></li>
                                <li><a href="#">단체관람/대관문의</a></li>
                                <li><a href="#">분실물문의</a></li>
                            </ul>
                        </div>
                        <div class="me">
                            <h3 class="main_event">이벤트</h3>
                            <ul>
                                <li><a href="#">영화</a></li>
                                <li><a href="#">시사회/무대인사</a></li>
                                <li><a href="#">HOT</a></li>
                                <li><a href="#">제휴할인</a></li>
                                <li><a href="#">우리동네영화관</a></li>
                            </ul>
                        </div>
                        <div class="mem">
                            <h3 class="main_mem">회원 서비스</h3>
                            <ul>
                                <li><a href="#">로그인</a></li>
                                <li><a href="#">회원가입</a></li>
                                <li><a href="#">아이디/비밀번호찾기</a></li>
                                <li><a href="#">회원약관</a></li>
                                <li><a href="#">개인정보처리방침</a></li>
                                <li><a href="#">이메일무단수집거부</a></li>
                                <li><a href="#">영상정보처리기기 운영 및 관리방침</a></li>
                                <li><a href="#">L.POINT회원안내</a></li>
                            </ul>
                        </div>
                        <div class="msa">
                            <h3 class="main_sale">할인안내</h3>
                            <ul>
                                <li><a href="#">신용카드</a></li>
                                <li><a href="#">포인트</a></li>
                                <li><a href="#">통신사</a></li>
                                <li><a href="#">기타결제수단</a></li>
                            </ul>
                        </div>
                        <div class="mcom">
                            <h3 class="main_com">회사소개</h3>
                            <ul>
                                <li><a href="#">채용안내</a></li>
                                <li><a href="#">광고/임대문의</a></li>
                                <li><a href="#">윤리경영</a></li>
                                <li><a href="#">기업정보</a></li>
                            </ul>
                        </div>
                        <button type="button" class="exit">나가기</button>

                        <div class="log_wrap">
                            <button type="button" class="login" onclick="location.href='login.php'">로그인</button>
                            <div class="join_bg"></div>
                            <p class="join1">로그인 하시고<br>
                            다양한 혜택을 확인하세요.</p>
                            <button type="button" class="join2" onclick="location.href='join.php'">회원가입</button>
                        </div>

                        <a class="ad1" href="#">삼성화재 다이렉트
                        내 차 보험료 확인하면 스타벅스 아메리카노 바로 지급!
                        만기일 상관없이 365일 참여 가능</a>
                        
                        <div class="line1"></div>
                        <div class="line2"></div>

                        <a class="ad2" href="#">대한민국 웃음 회복 프로젝트!
                        라미란 송새벽 이범수
                        거북이 달린다, 피끓는 청춘 이연우 감독
                        컴백홈 10월 대개봉
                        클릭하면 예고편 볼 수 있는겨~~~~</a>
                    </div>
                </div>

                <div class="main_menu_bg"></div>

                <div class="top_menu">
                    <h2 class="blind">사용자메뉴</h2>
                    <ul class="top_menu_left">
                        <li class="top_menu1"><a href="join.php">회원가입</a></li>
                        <li class="top_menu2"><a href="#">바로예매 </a></li>
                    </ul>
                    <ul class="top_menu_right">
                        <li class="top_menu3"><a href="#">멤버십</a></li>
                        <li class="top_menu4"><a href="#">고객센터</a></li>
                        <li class="top_menu5"><a href="#">단체관람/단체문의</a></li>
                        <li class="top_menu6"><a href="login.php">로그인</a></li>
                    </ul>

                </div>

                <div class="sns">
                    <h2 class="blind">SNS</h2>
                    <ul>
                        <li class="sns1"><a href="#">페이스북</a></li>
                        <li class="sns2"><a href="#">유튜브</a></li>
                        <li class="sns3"><a href="#">인스타그램</a></li>
                    </ul>
                </div>
            </header>
        </div>
        
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
                <div class="best1" onclick="location.href='best01.html'">
                    <a href="best01.html"></a>
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

        <footer id="footer" class="footer">
            <div class="term">
                <h2>사이트 이용안내</h2>
                <ul>
                    <li class="term1"><a href="#">회원약관</a></li>
                    <li class="term1 pi"><a href="#">개인정보처리방침</a></li>
                    <li class="term1"><a href="#">이메일무단수집거부</a></li>
                    <li class="term1"><a href="#">영상정보처리기기 운영및 관리방침</a></li>
                    <li class="term1"><a href="#">L.POINT회원안내</a></li>
                    <li class="term1"><a href="#">배정기준</a></li>
                    <li class="term1"><a href="#">채용안내</a></li>
                    <li class="term1"><a href="#">광고/임대문의</a></li>
                    <li class="term1"><a href="#">윤리경영</a></li>
                    <li><a href="#">기업정보</a></li>
                </ul>
            </div>

            <div class="fb">
                <div class="fb_txt1">
                    <address>서울특별시 송파구 올림픽로 300 롯데월드타워 27층</address>
                    <p>고객센터 1544-8855</p>
                </div>
                <div class="fb_txt2">
                    <p>대표이사 최병환</p>
                    <p>사업자등록번호 313-87-00979</p>
                    <p>통신판매업신고번호 제1184호</p>
                    개인정보 보호 최고 책임자 김무성
                </div>
                <p>COPYRIGHT©LOTTE CINEMA ALL RIGHT RESERVED.</p>
            </div>

            <div class="award">
                <h2 class="blind">수상내역</h2>
                <ul>
                    <li><a href="#" class="award1">NCSI 영화관부문 7년 연속 1위</a></li>   
                    <li><a href="#" class="award2">KCSI 영화관부문 7년 연속 1위(총12회)</a></li>
                    <li><a href="#" class="award3">KS-SQI 영화관부문 10년 연속 1위(총13회)</a></li>
                    <li><a href="#" class="award4">올해의 브랜드대상 영화관부문 10년 연속 1위</a></li>
                    <li><a href="#" class="award5">그린스타 영화관 부문 4년 연속 1위</a></li>
                    <li><a href="#" class="award6">대한민국 브랜드스타 영화관 부문 1위</a></li>
                    <li><a href="#" class="award7">가족친화 인증기업 선정</a></li>
                    <li><a href="#" class="award8">2020앤어워드 소셜미디어브랜드분야 WINNER수상</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>