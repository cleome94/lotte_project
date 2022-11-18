<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        $(function(){
            $(".join").click(function(){
                if($(".form1_ck2").is(":checked") == false){
                    alert("모든 약관에 동의해 주세요.");
                    return;
                }else if($(".form1_ck3").is(":checked") == false){
                    alert("모든 약관에 동의해 주세요.");
                    return;
                }else if($(".form1_ck4").is(":checked") == false){
                    alert("모든 약관에 동의해 주세요.");
                    return;
                }else if($(".form1_ck5").is(":checked") == false){
                    alert("모든 약관에 동의해 주세요.");
                    return;
                }else{
                    $(".join_form").submit();
                }
            });
        });
        function join_form_check(){
            var u_id = document.getElementById("u_id")
            var pwd = document.getElementById("pwd")
            var repwd = document.getElementById("repwd")
            var u_name = document.getElementById("u_name")
            var birth = document.getElementById("birth")
            var phone = document.getElementById("phone")

            if(!u_id.value){
                alert("아이디를 입력하세요.");
                return false;
            };
            var regExp = /^[A-Za-z0-9]{4,12}$/; 
            if(!regExp.test(u_id.value)){
                alert("4~12자의 영문 대소문자와 숫자로 입력해 주세요.");
                return false;
            };
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                return false;
            };
            var regExp =  /^[A-za-z0-9~!@#$%^&*()_+]{6,12}/g;
            if(!regExp.test(pwd.value)){
                alert("6~12자의 영어 대소문자와 숫자,특수문자로 입력해 주세요.");
                return false;
            };
            if(!repwd.value){
                alert("비밀번호를 다시 한번 입력하세요.");
                return false;
            };
            if(pwd.value != repwd.value){
                alert("비밀번호가 일치하지 않습니다.");
                return false;
            };
            if(!u_name.value){
                alert("이름을 입력하세요.");
                return false;
            };
            var regExp = /^[가-힣a-zA-Z]*$/g;
            if(!regExp.test(u_name.value)){
                alert("이름을 정확히 입력해주세요.")
                return false;
            };
            if(!birth.value){
                alert("생년월일을 입력하세요.");
                return false;
            };
            var regExp = /^(19[0-9][0-9]|20\d{2})(0[0-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/
            if(!regExp.test(birth.value)){
                alert("생년월일을 형식에 맞게 입력해주세요. ex)20220101");
                return false;
            };
            if(!phone.value){
                alert("휴대폰 번호 뒷자리를 입력하세요.");
                return false;
            };
            var regExp = /^[0-9]{9,11}/g;
            if(!regExp.test(phone.value)){
                alert("휴대폰 번호를 모두 입력하세요.");
                return false;
            };
            if(!ean.value){
                alert("인증번호를 입력하세요.");
                return false;
            };
        };
        function id_search(){
            window.open("id_search.php", "idsch", "width=600, height=300");
        };
    </script>
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
                <div class="an">
                    <button type="button" class="an_btn">인증번호 받기</button>
                    <input type="text" name="ean" id="ean" class="ean" placeholder="인증번호를 입력해 주세요.">
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