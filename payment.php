<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/css_payment.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/payment.js"></script>
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