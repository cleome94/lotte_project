<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지 회원가입 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/join.js"></script>
</head>
<body>
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
                            <input type="text" name="u_id", id="u_id" class="u_id" placeholder="4~12자의 영문 대소문자와 숫자로 입력해 주세요.">
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
</body>
</html>