$(function(){
    $(".gnb_menu_wrap > li, .gnb_bg").hover(function(){
      $(this).find("ul").stop().fadeToggle("fast");
      $(".gnb_bg").stop().fadeToggle("fast");
    });
});
$(document).ready(function(){
    $(".all_menu").click(function(){
        $(".main_menu_wrap").show();
    });
    $(".exit").click(function(){
        $(".main_menu_wrap").hide();
    });

    $('.main_image').slick({
      mode:"fade",
      dots:true,
      autoplay:true,
      autoplaySpeed:3000,
    });

    $(function() {
      $('#main1').bind('click', function(e) {
  var self = $(this)
  , content = $('.content'); 
  $('main_video1').bPopup({
      onOpen: function() {
          content.html(self.data('bpopup') || '');
      },
      onClose: function() {
          content.empty();
      }
  }); 
          e.preventDefault();
          $('#main_video1').bPopup();
      });
  });
  
  $(function() {
    $('#main2').bind('click', function(e) {
var self = $(this)
, content = $('.content'); 
$('main_video2').bPopup({
    onOpen: function() {
        content.html(self.data('bpopup') || '');
    },
    onClose: function() {
        content.empty();
    }
}); 
        e.preventDefault();
        $('#main_video2').bPopup();
    });
});

    $(".movie1").hover(function(){
      $(".bg1").toggle();
    });
    $(".movie2").hover(function(){
      $(".bg2").toggle();
    });
    $(".movie3").hover(function(){
      $(".bg3").toggle();
    });
    $(".movie4").hover(function(){
      $(".bg4").toggle();
    });
    $(".movie5").hover(function(){
      $(".bg5").toggle();
    });
    $(".movie6").hover(function(){
      $(".bg6").toggle();
    });
    $(".movie7").hover(function(){
      $(".bg7").toggle();
    });
    $(".movie8").hover(function(){
      $(".bg8").toggle();
    });
    $(".movie9").hover(function(){
      $(".bg9").toggle();
    });
    $(".movie10").hover(function(){
      $(".bg10").toggle();
    });
    $(".movie11").hover(function(){
      $(".bg11").toggle();
    });
    $(".movie12").hover(function(){
      $(".bg12").toggle();
    });
    $(".movie13").hover(function(){
      $(".bg13").toggle();
    });
    $(".movie14").hover(function(){
      $(".bg14").toggle();
    });
    $(".movie15").hover(function(){
      $(".bg15").toggle();
    });
    $(".movie16").hover(function(){
      $(".bg16").toggle();
    });
    $(".movie17").hover(function(){
      $(".bg17").toggle();
    });
    $(".movie18").hover(function(){
      $(".bg18").toggle();
    });
    $(".movie19").hover(function(){
      $(".bg19").toggle();
    });
    $(".movie20").hover(function(){
      $(".bg20").toggle();
    });
    $(".movie21").hover(function(){
      $(".bg21").toggle();
    });
    $(".movie22").hover(function(){
      $(".bg22").toggle();
    });

    $( '.movie_wrap' ).slick( {
        slidesToShow: 5,
        slidesToScroll: 1,
      } );
    
    $('.prev0').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay:true,
        autoplaySpeed:3000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2
            }
          }
        ]
    });

    /* function tick(){
      $('.notice_title li:first').slideUp(function(){
        $(this).appendTo($('.notice_title')).slideDown();
      });
    }
    setInterval(function(){tick()}, 3000); */

    function tick(){
      $('.notice_title li:first').fadeOut(function(){
        $(this).appendTo($('.notice_title')).fadeIn(100);
      });
    }
    setInterval(function(){tick()}, 5000);

    /* $('.notice_list').vTicker({height:30}); */

  });
  function logout(){
    var ck = confirm("로그아웃 하시겠습니까?");
    if(ck){
      location.href="login/logout.php";
    };
  };