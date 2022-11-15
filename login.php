<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="css/css_login.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/login.js"></script>
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
                    <form class="log_form" action="login/login_ok.php" method="post" onsubmit="return form_check()">
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
                    <a class="join01" href="#">회원가입</a>
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