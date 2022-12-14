<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/css_join.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/join.js"></script>
</head>
<body>
    <div class="wrap">
        <header id="header" class="header">
            <h1 class="logo"><a href="../index.php">롯데시네마</a></h1>
            <h2>회원가입</h2>
        </header>

        <main id="content" class="content">
            <h3 class="blind">휴대폰 본인확인 동의란</h3>
                
                
            <form class="form_wrap" name="join_form" action="join_insert.php" method="post" onsubmit="return join_form_check()">
                <p class="cer1">회원가입을 위해 휴대폰 본인 인증해주세요.</p>
                <fieldset class="form1">
                    <legend class="blind">휴대폰 본인확인 동의란</legend>
                    <div class="form1_box1">
                        <label>
                        <input type="checkbox" class="form1_ck1" id="check_all"><span class="fc1">휴대폰 본인확인 전체동의</span></label>
                    </div>

                    <div class="form1_box2">
                        <label>
                        <input type="checkbox" class="form1_ck2" id="normal"><span class="fc2">개인정보 이용 동의(필수)</span></label>
                        <button type="button">자세히</button>
                    </div>

                    <div class="form1_box3">
                        <label>
                        <input type="checkbox" class="form1_ck3" id="normal"><span class="fc3">고유식별 정보 처리 동의(필수)</span></label>
                        <button type="button">자세히</button>
                    </div>
                    
                    <div class="form1_box4">
                        <label>
                        <input type="checkbox" class="form1_ck4" id="normal"><span class="fc4">서비스 이용약관 동의(필수)</span></label>
                        <button type="button">자세히</button>
                    </div>

                    <div class="form1_box5">
                        <label>
                        <input type="checkbox" class="form1_ck5" id="normal"><span class="fc5">통신사 이용약관 동의(필수)</span></label>
                        <button type="button">자세히</button>
                    </div>
                </fieldset>

                <h3>회원정보 입력</h3>
                <fieldset class="form2">
                    <div class="id">
                        <label>
                            <span>아이디</span>
                            <input type="text" name="u_id", id="u_id" class="u_id" placeholder="4~12자의 영문 대소문자와 숫자로 입력해 주세요."  readonly>
                        </label>
                        <button type="button" class="id_btn" onclick="id_search()">중복 확인</button>

                    </div>
                    <div class="pw1">
                        <label>
                            <span>비밀번호</span>
                            <input type="password" name="pwd" id="pwd" class="pwd" placeholder="6~12자의 영문 대소문자와 숫자,특수문자로 입력해 주세요.">
                        </label>
                    </div>
                    <div class="pw2">
                        <label>
                            <span>비밀번호 확인</span>
                            <input type="password" name="repwd" id="repwd" class="repwd" placeholder="다시 한번 입력해 주세요.">
                        </label>
                    </div>
                        <div class="name">
                            <label>
                                <span class="form2_n4">이름</span>
                                <input type="text" name="u_name" id="u_name" class="u_name" placeholder="한글 또는 영문으로 입력해 주세요.">
                            </label>
                        </div>
                        <div class="birth1">
                            <label>  
                                <span class="form2_n5">생년월일</span>
                                <input type="text" name="birth" id="birth" class="birth" placeholder="생년월일 8자리를 입력해 주세요. ex) 20220101">
                            </label>              
                        </div>
                        <div class="phone_no">
                            <label>
                            <span class="form2_n6">휴대폰 번호</span>
                                <input type="text" name="phone" id="phone" class="phone" placeholder="(' - '생략) 입력해 주세요.">
                            </label>
                        </div>
                    <p class="cer2">- 휴대폰 본인확인 시 타인 명의를 도용할 경우, "정보통신망법 제 49조"에 의거하여 5년 이하의 징역 또는 5천만원 이하의 벌금에 처할 수 있습니다.</p>
                </fieldset>
            
            <div class="form3">
                <button type="button" class="cancle" onclick="history.back()">취소</button>
                <button type="submit" class="join">회원 가입하기</button>
            </div>
        </form>
        </main>

        <footer id="footer" class="footer">
            <h2 class="blind">사이트 이용안내</h2>
            <div class="footer_top">
                <div class="term">
                    <h3 class="blind">약관 및 정책</h3>
                    <ul>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">고객센터</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a class="term1" href="#">개인정보처리방침</a></li>
                    </ul>
                </div>
                <div class="family_site">
                    <h3 class="blind">그룹사 사이트 바로가기</h3>
                        <div class="family_site1">
                            <h4><span title="Service Site 열기">Service Site</span></h4>
                            <ul>
                                <li><a href="#">L.POINT</a></li>
                                <li><a href="#">L.pay</a></li>
                                <li><a href="#">라임</a></li>
                                <li><a href="#">L.POINT 파트너스</a></li>
                            </ul>
                        </div>
                        <div class="family_site2">
                            <h4><span title="Family Site 열기">Family Site</span></h4>
                            <ul>
                                <li><a href="#">롯데그룹</a></li>
                                <li><a href="#">롯데타운</a></li>
                                <li><a href="#">롯데닷컴</a></li>
                                <li><a href="#">롯데마트</a></li>
                                <li><a href="#">롯데빅마켓</a></li>
                                <li><a href="#">토이저러스</a></li>
                                <li><a href="#">롯데슈퍼</a></li>
                                <li><a href="#">롯데홈쇼핑</a></li>
                                <li><a href="#">바이더웨이</a></li>
                                <li><a href="#">세븐일레븐</a></li>
                                <li><a href="#">하이마트</a></li>
                                <li><a href="#">한국후지필름</a></li>
                                <li><a href="#">LOHB's</a></li>
                                <li><a href="#">롯데백화점</a></li>
                                <li><a href="#">롯데면세점</a></li>
                                <li><a href="#">롯데피트인</a></li>
                                <li><a href="#">롯데몰 김포공항점</a></li>
                                <li><a href="#">롯데월드몰</a></li>
                                <li><a href="#">롯데영플라자</a></li>
                                <li><a href="#">롯데아울렛</a></li>
                                <li><a href="#">롯데프리미엄아울렛</a></li>
                                <li><a href="#">무인양품</a></li>
                                <li><a href="#">유니클로</a></li>
                                <li><a href="#">롯데리아</a></li>
                                <li><a href="#">엔젤리너스커피</a></li>
                                <li><a href="#">T.G.I FRIDAY'S</a></li>
                                <li><a href="#">나뚜루POP</a></li>
                                <li><a href="#">크리스피크림도넛</a></li>
                                <li><a href="#">보네스빼</a></li>
                                <li><a href="#">롯데시네마</a></li>
                                <li><a href="#">롯데월드 어드벤처</a></li>
                                <li><a href="#">롯데월드 아쿠아리움</a></li>
                                <li><a href="#">롯데 워터파크</a></li>
                                <li><a href="#">롯데자이언츠</a></li>
                                <li><a href="#">롯데제이티비</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="footer_bottom_wrap">
                <div class="footer_bottom">
                    <address>서울시 중구 통일로 2길 16AIA타워 14층</address>
                    <p class="com">회사명롯데멤버스(주)</p>
                    <p class="ceo">대표이사 전형식</p>
                    <p class="brn">사업자등록번호 104-86-58491</p>
                    <p class="cs">고객센터 1899-8900</p>
                </div>
                <p class="copy">&copy;LOTTE MEMBERS CO.,LTD.</p>
            </div>
        </footer>
    </div>
</body>
</html>