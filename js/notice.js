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

      $(".tab1_btn").trigger("click").css({color : "#fff", border : "1px solid#d32f2f" , background : "#d32f2f"});

      $(".tab1_btn").click(function(){
        $(".tab1_cont").show();
        $(".tab2_cont").hide();
      });
      $(".tab2_btn").click(function(){
        $(".tab1_cont").hide();
        $(".tab2_cont").show();
      });
      $(".tab1_btn").click(function(){
        $(".tab1_btn").css({color : "#fff", border : "1px solid#d32f2f" , background : "#d32f2f"});
        $(".tab2_btn").css({color : "#fff", border : "1px solid#888",background:"#888"});
      });
      $(".tab2_btn").click(function(){
        $(".tab1_btn").css({color : "#fff", border : "1px solid#888" , background : "#888"});
        $(".tab2_btn").css({color : "#fff", border : "1px solid#d32f2f",background:"#d32f2f"});
      });
});
function tab1_btn_on(){
    var tab1_btn = document.querySelector(".tab1_btn");
    var tab2_btn = document.querySelector(".tab2_btn");

    tab1_btn.setAttribute("class","tab1_btn on");
    tab2_btn.setAttribute("class","tab2_btn");
};
function tab2_btn_on(){
    var tab1_btn = document.querySelector(".tab1_btn");
    var tab2_btn = document.querySelector(".tab2_btn");

    tab1_btn.setAttribute("class","tab1_btn");
    tab2_btn.setAttribute("class","tab2_btn on");
};
function categoryChange(k){
    var area = ["영화관명"];
    var seoul = ["영화관명", "가산디지털", "가양", "강동", "건대입구", "김포공항", "노원", "도곡", "독산", "브로드웨이(신사)", "서울대입구", "수락산", "수유", "신도림", "신림", "에비뉴엘(명동)", "영등포", "용산", "월드타워", "은평(롯데몰)", "중랑", "청량리", "합정", "홍대입구"];
    var incheon_gyeonggi = ["영화관명", "광교아울렛", "광명(광명사거리)", "광명아울렛", "광주터미널", "구리아울렛", "동탄", "라페스타", "마석", "벌내", "병점", "부천(신중동역)", "부천역", "부평", "부평갈산", "부평역사", "북수원(천천동)", "산본피트인", "서수원", "성남중앙(신흥역)", "센트럴락", "송탄", "수원(수원역)", "수지", "시화(정왕역)", "시흥장현", "안산", "안산고잔", "안성", "안양(안양역)", "안양일번가", "양주고읍", "영종하늘도시", "오산(원동)", "용인기흥", "용인역북", "위례", "의정부민락", "인덕원", "인천아시아드", "인천터미널", "주엽", "진접", "파주운정", "판교(창조경제벨리)", "평촌(범계역)", "평택비전(뉴코아)", "하남미사", "향남"];
    var chungcheong_daejeon = ["영화관명", "당진", "대전(백화점)", "대전관저", "대전둔산(월평동)", "대전센트럴", "서산", "서청주(아울렛)", "아산터미널", "천안불당", "청주용암", "충주(모다아울렛)"];
    var jeolla_gwangju = ["영화관명", "광주(백화점)", "광주광산", "군산나운", "군산몰", "수완(아울렛)", "익산모현", "전주(백화점)", "전주송천", "전주평화", "충장로"];
    var gyeongbuk_daegu = ["영화관명", "경주", "경주황성", "구미공단", "대구광장", "대구율하", "대구현풍", "동성로", "상인", "상주", "성서", "영주", "영천", "포항", "프리미엄구미센트럴", "프리미엄만경", "프리미엄안동", "프리미엄칠곡"];
    var gyeongnam_busan_ulsan = ["영화관명", "거창", "광복", "김해아울렛(장유)", "대영", "동래", "동부산아울렛", "드라이브오시리아", "마산(합성동)", "부산명지", "부산본점", "사천", "서면(전포동)", "센텀시티", "양산물금", "엠비씨네(진주)", "오투(부산대)", "울산(백화점)", "울산성남", "진주혁신(롯데몰)", "진해", "창원", "통영", "프리미엄경남대", "프리미엄진주(중안)", "프리미엄해운대(장산역)"];
    var Gangwon = ["영화관명", "남원주", "동해", "속초", "원주무실", "춘천"];
    var jeju = ["영화관명", "서귀포", "제주삼화지구", "제주아라"];
    var target = document.getElementById("area");
    if(k.value == "a") var j = area;
    else if(k.value == "b") var j = seoul;
    else if(k.value == "c") var j = incheon_gyeonggi;
    else if(k.value == "d") var j = chungcheong_daejeon;
    else if(k.value == "e") var j = jeolla_gwangju;
    else if(k.value == "f") var j = gyeongbuk_daegu;
    else if(k.value == "g") var j = gyeongnam_busan_ulsan;
    else if(k.value == "h") var j = Gangwon;
    else if(k.value == "i") var j = jeju;
    
    target.options.length = 0;
    for (x in j) {
        var opt = document.createElement("option");
        opt.value = j[x];
        opt.innerHTML = j[x];
        target.appendChild(opt);
    };
};

