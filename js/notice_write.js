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
function logout(){
  var ck = confirm("로그아웃 하시겠습니까?");
  if(ck){
    location.href="../login/logout.php";
  };
};
function notice_check(){
    var sort = document.getElementById("sort")
    var n_title = document.getElementById("n_title")
    var n_content = document.getElementById("n_content")

    if(!sort.value){
        alert("구분을 입력하세요.");
        sort.focus();
        return false;
    };
    if(!n_title.value){
        alert("제목을 입력하세요.");
        n_title.focus();
        return false;
    };
    if(!n_content.value){
        alert("내용을 입력하세요.");
        n_content.focus();
        return false;
    };
};