function sel_cate(){
    var cate = document.getElementById("movieArea");
    var idx = cate.options.selectedIndex;
    var sel_cate_val = cate.options[idx].value;

    if(idx == 0){
        location.href="list.php";
    } else{
        location.href="list.php?cate="+sel_cate_val;
    };
};