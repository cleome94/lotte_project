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

function sel_cate(){
    var cate = document.getElementById("movieArea");
    var idx = cate.options.selectedIndex;
    var sel_cate_val = cate.options[idx].value;

    if(idx == 0){
        location.href="cinema_notice.php";
    } else{
        location.href="cinema_notice.php?cate="+sel_cate_val;
    };
};
