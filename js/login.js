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

    $(".menu2").click(function(){
        $(".login_wrap").show();
        $(".nmb1_bg").hide();
        $(".nmb2_bg").hide();
    });
    $(".menu3").click(function(){
        $(".login_wrap").hide();
        $(".nmb1_bg").show();
        $(".nmb2_bg").hide();
    });
    $(".menu4").click(function(){
        $(".login_wrap").hide();
        $(".nmb1_bg").hide();
        $(".nmb2_bg").show();
    });

    $("#log_btn").on("click",function(){
		let u_id = $("#u_id").val();
		let pwd = $("#pwd").val();
    	 
		if(u_id == ""){
			alert("아이디 또는 이메일을 입력해 주세요.");
            return false;			 
		} else if (pwd == ""){
			alert("비밀번호를 입력해 주세요.");			 		 
            return false;
	 	}
	});

    $(".nmb1_btn").on("click",function(){
        let name = $(".name").val();
        let birth = $(".birth").val();
        let mobile = $(".mobile").val();
        let t_pwd = $(".t_pwd").val();
        let t_repwd = $(".t_repwd").val();
        if(name == ""){
            alert("이름을 입력해 주세요.");
            return false;
        };
        var regExp = /^[a-zA-Zㄱ-힣][a-zA-Zㄱ-힣 ]*$/;
        if(!regExp.test(name)){
            alert("이름형식에 맞게 입력해 주세요.");
            return false;
        };
        if(birth == ""){
            alert("생년월일을 입력해 주세요.");
            return false;
        };
        var regExp = /^(19[0-9][0-9]|20\d{2})(0[0-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/;
        if(!regExp.test(birth)){
            alert("생년월일 8자리를 형식에 맞게 입력해 주세요.");
            return false;
        };
        if(mobile == ""){
            alert("휴대폰번호를 입력해 주세요.");
            return false;
        }
        var regExp = /^[0-9]{9,11}/g;
        if(!regExp.test(mobile)){
            alert("올바른 휴대폰번호를 입력해 주세요.");
            return false;
        };
        if(t_pwd == ""){
            alert("예매 비밀번호를 입력해 주세요.");
            return false;
        };
        var regExp = /^[0-9]{4}$/g;
        if(!regExp.test(t_pwd)){
            alert("예매 비밀번호를 형식에 맞게 입력해 주세요.");
            return false;
        };
        if(t_repwd == ""){
            alert("예매 비밀번호를 재입력해 주세요.");
            return false;
        };
        if(t_pwd != t_repwd){
            alert("예매 비밀번호가 일치하지 않습니다.");
            return false;
        };
        if($(".yes2").is(":checked") == false){
            alert("개인정보 이용에 동의해 주세요.");
            return false;
        };
    });

    $(".nmb2_btn").on("click",function(){
        let name3 = $(".name3").val();
        let pn3 = $(".pn3").val();
        let rp3 =  $(".rp3").val();
        if(name3 == ""){
            alert("이름을 입력해 주세요.");
            return false;
        };
        if(pn3 == ""){
            alert("휴대폰 번호(-생략)를 입력해 주세요.");
            return false;
        };
        var regExp = /(^02.{0}^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/g;
        if(!regExp.test(pn3)){
            alert("올바른 휴대폰번호를 입력해 주세요.");
            return false;
        };
        if(rp3 == ""){
            alert("예매 비밀번호(4자리)를 입력해 주세요.");
            return false;
        };
        var regExp = /^[0-9]{4}$/g;
        if(!regExp.test(rp3)){
            alert("예매 비밀번호를 형식에 맞게 입력해 주세요.");
            return false;
        };
        if($(".yes3").is(":checked") == false){
            alert("개인정보 이용에 동의해 주세요.");
            return false;
        };
    });
});

function menu2_on(){
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu2.setAttribute("class","menu2 on");
    menu3.setAttribute("class","menu3");
    menu4.setAttribute("class","menu4");
};
function menu3_on(){
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu2.setAttribute("class","menu2");
    menu3.setAttribute("class","menu3 on");
    menu4.setAttribute("class","menu4");
};
function menu4_on(){
    var menu2 = document.querySelector(".menu2");
    var menu3 = document.querySelector(".menu3");
    var menu4 = document.querySelector(".menu4");

    menu2.setAttribute("class","menu2");
    menu3.setAttribute("class","menu3");
    menu4.setAttribute("class","menu4 on");
};
