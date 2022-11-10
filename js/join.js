$(function(){
    $(".form1").on("click", "#check_all", function () {
        var checked = $(this).is(":checked");
      
        if(checked){
            $(this).parents(".form1").find('input').prop("checked", true);
        } else {
            $(this).parents(".form1").find('input').prop("checked", false);
        }
      });

    $(".form1").on("click", "#normal", function(){
        var checked = $(this).is("checked");

        if(!checked){
            $("#check_all").prop("checked", false);
        }
    });
    $(".family_site1").click(function(){
        $(".family_site1 ul").fadeToggle("fast");       
    });
    $(".family_site2").click(function(){
        $(".family_site2 ul").fadeToggle("fast");       
    });

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
    var phone3 = document.getElementById("phone3")

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
    if(!phone3.value){
        alert("휴대폰 번호 뒷자리를 입력하세요.");
        return false;
    };
    var regExp = /^[0-9]{6,8}/g;
    if(!regExp.test(phone3.value)){
        alert("휴대폰 번호 뒷자리를 모두 입력하세요.");
        return false;
    };
    if(!ean.value){
        alert("인증번호를 입력하세요.");
        return false;
    };

};
function id_search(){
    window.open("../project/members/id_search.php", "idsch", "width=600, height=300");
};