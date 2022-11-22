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