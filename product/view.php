<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$table_name = "product";
include "../inc/dbcon.php";
$sql = "select * from $table_name where idx=$n_idx;";
/* echo $sql;
exit; */
$result = mysqli_query($dbcon, $sql);
$total = mysqli_fetch_array($result);
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
    <style>
        <?php if($s_id == "admin"){ ?>
        .write_area{
            width:1000px;
            display:flex;
            flex-direction:row-reverse
        }
        <?php }; ?>
    </style>
</head>
<body>
    <div class="wrap">
    <?php include "../inc/header.php"; ?>

        <main id="content" class="content">
            <div class="pd_wrap">
                <section>
                    <h3 class="pd1">
                        <?php
                        if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                            $f_name = $array["f_name"];
                            echo "
                                <p>
                                    <img src=\"../data/$f_name\" alt=\"\">
                                </p>
                            ";
                        };
                        ?>
                    </h3>
                    <table class="pd_table">
                            <tr>
                                <th class="tit" colspan="2"><?php echo $array["p_name"]; ?></th>
                            </tr>
                            <tr class="txt1">
                                <th class="txt_price"><?php echo $array["s_price"]; ?>&nbsp;</th>
                                <td id="txt_price_ins"><?php echo $array["f_price"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>?????????</th>
                                <td><?php echo $array["com"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>????????????</th>
                                <td><?php echo $array["pr"]; ?></td>
                            </tr>
                            <tr class="txt1">
                                <th>????????????</th>
                                <td><?php echo $array["validity"]; ?></td>
                            </tr>
                    </table>
                    <div class="line"></div>
                    <div class="btn_wrap">
                        <button class="btn_mins" onclick="btn_mins()">??????</button>
                        <input type="text" class="count" id="count" size="2" maxlength="4" value="1" readonly>
                        <button class="btn_plus" onclick="btn_plus()">??????</button>
                    </div>
                    
                    <div class="txt_all_wrap">
                        <span class="txt_all">??? ????????????</span>
                        <span class="txt_price1"><?php echo $array["s_price"]; ?></span>
                    </div>
                </section>
                    <button type="submit" class="btn_pre">????????????</button>
                    <button type="submit" class="btn_buy">????????????</button>
            </div>
            <div class="htu_wrap">
                <button type="button" class="htu_btn" onclick="htu_btn_on()">????????????</button>
                <button type="button" class="prec_btn" onclick="prec_btn_on()">????????????</button>
                <h4 class="blind">????????????</h4>
                <div class="htu1">
                <?php
                        $n_content = str_replace("\n","<br>", $array["n_content"]);
                        $n_content = str_replace(" ","&nbsp;", $n_content);
                        echo $n_content;
                        ?>
                </div>
                
                
                <h4 class="blind">????????????</h4>
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
                    <a href="#" class="banner_ad1">EBS ?????? ?????? '?????? ?????????' ??? ????????? ??????
                        ????????? ??? ????????? ??????
                        9??? 8???, ??????????????? ???????????????!</a>
                    <a class="banner_ad2" href="#">???????????? ???????????? ???????????????
                    ?????? ????????? ?????? 30?????? ?????? ?????????
                    ?????? 3?????? ????????? ??????!</a>
                </div>
            </div>
        </main>

        <?php include "../inc/footer.php"; ?>
    </div>
</body>
</html>