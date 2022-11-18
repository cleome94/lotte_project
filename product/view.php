<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$table_name = "product";
include "../inc/dbcon.php";
$sql = "select * from $table_name where idx=$n_idx;";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/css_best01.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/best01.js"></script>
    <script>

    </script>
</head>
<body>
    <div class="wrap">
    <?php include "header.php"; ?>

        <main id="content" class="content">
            <div class="pd_wrap">
                <section>
                    <h3 class="pd1"><?php echo $_FILES; ?></h3>
                    <table class="pd_table">
                            <tr>
                                <th class="tit" colspan="2"><?php echo $array["p_name"]; ?></th>
                            </tr>
                            <tr class="txt1">
                                <th class="txt_price"><?php echo $array["s_price"]; ?>&nbsp;</th>
                                <td id="txt_price_ins"><?php echo $array["f_price"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>구성품</th>
                                <td><?php echo $array["com"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>구매제한</th>
                                <td><?php echo $array["pr"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>유효기간</th>
                                <td><?php echo $array["validity"]; ?></td>
                            </tr>
                    </table>
                    <div class="line"></div>
                    <div class="btn_wrap">
                        <button class="btn_mins" onclick="btn_mins()">삭제</button>
                        <input type="text" class="count" id="count" size="2" maxlength="4" value="1" readonly>
                        <button class="btn_plus" onclick="btn_plus()">추가</button>
                    </div>
                    
                    <div class="txt_all_wrap">
                        <span class="txt_all">총 상품금액</span>
                        <span class="txt_price1"><?php echo $array["s_price"]; ?></span>
                    </div>
                </section>
                    <button type="submit" class="btn_pre">선물하기</button>
                    <button type="submit" class="btn_buy">구매하기</button>
            </div>
            <div class="htu_wrap">
                <button type="button" class="htu_btn" onclick="htu_btn_on()">사용방법</button>
                <button type="button" class="prec_btn" onclick="prec_btn_on()">유의사항</button>
                <h4 class="blind">사용방법</h4>
                <div class="htu1">
                <?php
                        $n_content = str_replace("\n","<br>", $array["n_content"]);
                        $n_content = str_replace(" ","&nbsp;", $n_content);
                        echo $n_content;
                        ?>
                </div>
                
                
                <h4 class="blind">유의사항</h4>
                <div class="prec1">
                <?php
                        $n_content = str_replace("\n","<br>", $array["n_content"]);
                        $n_content = str_replace(" ","&nbsp;", $n_content);
                        echo $n_content;
                        ?>
                </div>
            </div>
            <div class="ad_wrap">
                <div class="ad">
                    <a href="#" class="banner_ad1">EBS 인기 애니 '엄마 까투리' 첫 극장판 탄생
                        도시로 간 까투리 가족
                        9월 8일, 까투리기차 출발합니다!</a>
                    <a class="banner_ad2" href="#">현대해상 다이렉트 자동차보험
                    신규 자동차 보험 30만원 이상 가입시
                    롯데 3만원 상품권 지급!</a>
                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>
    </div>
</body>
</html>