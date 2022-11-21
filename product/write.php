<?php
include "../inc/session.php";
include "../inc/admin_check.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width:1000px;
            margin:0 auto;
        }
    </style>
    <script type="text/javascript">
        function product_check(){
            var p_name = document.getElementById("p_name")
            var f_price = document.getElementById("f_price")
            var s_price = document.getElementById("s_price")
            var com = document.getElementById("com")
            var pr = document.getElementById("pr")
            var validity = document.getElementById("validity")
            var htu = document.getElementById("htu")
            var prec = document.getElementById("prec")

            if(!p_name.value){
                alert("제품이름을 입력하세요.");
                p_name.focus();
                return false;
            };
            if(!f_price.value){
                alert("정가를 입력하세요.");
                f_price.focus();
                return false;
            };
            if(!s_price.value){
                alert("세일가를 입력하세요.");
                s_price.focus();
                return false;
            };
            if(!com.value){
                alert("구성품을 입력하세요.");
                com.focus();
                return false;
            };
            if(!pr.value){
                alert("구매제한을 입력하세요.");
                pr.focus();
                return false;
            };
            if(!validity.value){
                alert("유효기간을 입력하세요.");
                validity.focus();
                return false;
            };
            if(!htu.value){
                alert("사용방법을 입력하세요.");
                htu.focus();
                return false;
            };
            if(!prec.value){
                alert("유의사항을 입력하세요.");
                prec.focus();
                return false;
            };
        };
    </script>
</head>
<body>
<form name="product_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return product_check()">
        <fieldset>
            <legend>스토어</legend>
            <p>
                작성자 <?php echo $s_name; ?>
            </p>
            <p>
                <label for="p_name">제품이름</label>
                <input type="text" id="p_name" name="p_name" class="p_name" size="40">
            </p>
            <p>
                <label for="f_price">정가</label>
                <input type="text" id="f_price" name="f_price" class="f_price" size="40">
            </p>
            <p>
                <label for="per">세일 %</label>
                <input type="text" id="per" name="per" class="per" size="40">
            </p>
            <p>
                <label for="s_price">세일가</label>
                <input type="text" id="s_price" name="s_price" class="s_price" size="40">
            </p>
            <p>
                <label for="com">구성품</label>
                <textarea cols="70" rows="2" id="com" name="com" class="com"></textarea>
            </p>
            <p>
                <label for="pr">구매제한</label>
                <input type="text" id="pr" name="pr" class="pr">
            </p>
            <p>
                <label for="validity">유효기간</label>
                <input type="text" id="validity" name="validity" class="validity">
            </p>
            <p>
                <label for="htu">사용방법</label>
                <textarea cols="100" rows="30" id="htu" name="htu" class="htu"></textarea>
            </p>
            <p>
                <label for="prec">유의사항</label>
                <textarea cols="100" rows="30" id="prec" name="prec" class="prec"></textarea>
            </p>
            <p>
                <label for="up_file">파일첨부</label>
                <input type="file" name="up_file" id="up_file">
            </p>
            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>