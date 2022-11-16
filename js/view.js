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