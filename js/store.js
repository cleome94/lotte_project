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
function menu1_on(){
    var menu1 = document.querySelector(".menu1");
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu1.setAttribute("class","menu1 on");
    menu2.setAttribute("class","menu2");
    menu3.setAttribute("class","menu3");
    menu4.setAttribute("class","menu4");
    };
    function menu2_on(){
    var menu1 = document.querySelector(".menu1");
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu1.setAttribute("class","menu1");
    menu2.setAttribute("class","menu2 on");
    menu3.setAttribute("class","menu3");
    menu4.setAttribute("class","menu4");
    };
    function menu3_on(){
    var menu1 = document.querySelector(".menu1");
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu1.setAttribute("class","menu1");
    menu2.setAttribute("class","menu2");
    menu3.setAttribute("class","menu3 on");
    menu4.setAttribute("class","menu4");
    };
    function menu4_on(){
    var menu1 = document.querySelector(".menu1");
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu1.setAttribute("class","menu1");
    menu2.setAttribute("class","menu2");
    menu3.setAttribute("class","menu3");
    menu4.setAttribute("class","menu4 on");
    };