<?php
include "../inc/session.php";
include "../inc/admin_check.php";
$n_idx = $_GET["n_idx"];
$table_name = "cinema_notice";
include "../inc/dbcon.php";
$sql = "select * from $table_name where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <script type="text/javascript">
        function notice_check(){
            var cate = document.getElementById("sort")
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
    </script>
</head>
<body>
<form name="cinema_notice_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>공지사항</legend>
            <p>
                작성자 <?php echo $s_name; ?>
            </p>
            <p>
                <label for="cate">구분</label>
                <select name="cate" id="cate" class="cate">
                    <option value="a"<?php if($array["cate"] == "a") echo " selected"; ?>>지역</option>
                    <option value="b"<?php if($array["cate"] == "b") echo " selected"; ?>>서울</option>
                    <option value="c"<?php if($array["cate"] == "c") echo " selected"; ?>>경기/인천</option>
                    <option value="d"<?php if($array["cate"] == "d") echo " selected"; ?>>충청/대전</option>
                    <option value="e"<?php if($array["cate"] == "e") echo " selected"; ?>>전라/광주</option>
                    <option value="f"<?php if($array["cate"] == "f") echo " selected"; ?>>경북/대구</option>
                    <option value="g"<?php if($array["cate"] == "g") echo " selected"; ?>>경남/부산/울산</option>
                    <option value="h"<?php if($array["cate"] == "h") echo " selected"; ?>>강원</option>
                    <option value="i"<?php if($array["cate"] == "i") echo " selected"; ?>>제주</option>
                </select>
            </p>
            <p>
                <label for="n_title">제목</label>
                <input type="text" id="n_title" name="n_title" class="n_title" value="<?php echo $array["n_title"]; ?>">
            </p>
            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" id="n_content" name="n_content" class="n_content"><?php echo $array["n_content"]; ?></textarea>
            </p>
            <p>
                <a href="cinema_notice.php">목록</a>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">수정하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>