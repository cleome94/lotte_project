function notice_check(){
    var cate = document.getElementById("cate")
    var n_title = document.getElementById("n_title")
    var n_content = document.getElementById("n_content")

    if(!cate.value){
        alert("구분을 입력하세요.");
        cate.focus();
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