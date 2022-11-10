<?php
include "../inc/session.php";
// include "../inc/admin_check.php";
$n_idx = $_GET["n_idx"];
include "../inc/dbcon.php";
$sql = "select * from notice where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <script type="text/javascript">
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
    </script>
</head>
<body>
    <form name="notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>공지사항</legend>
            <p>
                작성자 <?php echo $s_name; ?>
            </p>
            <p>
                <label for="sort">구분</label>
                <input type="text" id="sort" name="sort" class="sort">
            </p>
            <p>
                <label for="n_title">제목</label>
                <input type="text" id="n_title" name="n_title" class="n_title">
            </p>
            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" id="n_content" name="n_content" class="n_content"></textarea>
            </p>
            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">수정하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>