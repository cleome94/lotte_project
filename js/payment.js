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

    $(".tpa_btn").click(function(){
      if(!$('input[name="pay"]:checked').val()){
        alert("결제 수단을 선택해 주세요.");
        $('input[name="pay"]').focus();
        return false;
      };
    });
});
