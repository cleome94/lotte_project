$(function(){
    $(".gnb_menu_wrap > li, .gnb_bg").hover(function(){
        $(this).find("ul").stop().fadeToggle("fast");
        $(".gnb_bg").stop().fadeToggle("fast");
      });
  
      $(".all_menu").click(function(){
          $(".main_menu_wrap").show();
      });
      $(".exit").click(function(){
          $(".main_menu_wrap").hide();
      });
});
function edit_form_check(){
    var pwd = document.getElementById("pwd");
    var repwd = document.getElementById("repwd");

    if(pwd.value){
        var pw_len = pwd.value.length;
        if(pw_len < 6 || pw_len > 12){
            alert("비밀번호는 6~12글자만 입력할 수 있습니다.");
            pwd.focus();
            return false;
        };
    };
    if(pwd.value){
        if(pwd.value != repwd.value){
            alert("비밀번호를 확인해 주세요.");
            repwd.focus();
            return false;
        };
    };
};
function logout(){
    var ck = confirm("로그아웃 하시겠습니까?");
    if(ck){
      location.href="../login/logout.php";
    };
  };
function mem_del(){
    var rtn_val = confirm("정말 탈퇴하시겠습니까?");
    if(rtn_val == true){
        location.href = "member_delete.php";
    };
};