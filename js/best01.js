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

      $(".htu_btn").trigger("click");

      $(".htu_btn").click(function(){
        $(".htu1").show();
        $(".prec1").hide();
      });
      $(".prec_btn").click(function(){
        $(".htu1").hide();
        $(".prec1").show();
      });

      var t = $(".p_num");  
    $('.btn_mins').attr('disabled',true);
    $(".btn_plus").click(function(){  
    t.val(Math.abs(parseInt(t.val()))+1);
    if (parseInt(t.val())!=1){
    $('.btn_mins').attr('disabled',false);
    };
    }) 
    $(".btn_mins").click(function(){
    t.val(Math.abs(parseInt(t.val()))-1);
    if (parseInt(t.val())==1){
    $('.btn_mins').attr('disabled',true);
    };
    })

});
function htu_btn_on(){
    var htu_btn = document.querySelector(".htu_btn");
    var prec_btn = document.querySelector(".prec_btn");

    htu_btn.setAttribute("class","htu_btn on");
    prec_btn.setAttribute("class","prec_btn");
};
function prec_btn_on(){
    var htu_btn = document.querySelector(".htu_btn");
    var prec_btn = document.querySelector(".prec_btn");

    htu_btn.setAttribute("class","htu_btn");
    prec_btn.setAttribute("class","prec_btn on");
};