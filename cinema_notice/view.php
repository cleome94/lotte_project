<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$table_name = "cinema_notice";
include "../inc/dbcon.php";
$sql = "select * from $table_name where idx=$n_idx;";
/* echo $sql;
exit; */
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$cnt = $array["cnt"] + 1;
/* echo $cnt;
exit; */
$sql = "update $table_name set cnt = $cnt where idx = $n_idx;";
/* echo $sql;
exit; */
mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화관 공지 상세 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/view.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/view.js"></script>
    <style>
        <?php if($s_id == "admin"){ ?>
        .write_area{
            width:1000px;
            display:flex;
            flex-direction:row-reverse
        }
        <?php }; ?>
    </style>
    <script>
        function remove_notice(){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx=<?php echo $n_idx; ?>";
            };
        };
    </script>
</head>
<body>
    <div class="wrap">
    <?php include "../inc/header.php"; ?>
    <main id="content" class="content">
        <div class="notice_view">
            <h2>영화관 공지</h2>
            <?php if($s_id =="admin"){ ?>
            <p class="write_area">
                <span><a href="write.php">[글쓰기]</a></span>
            </p>
            <?php }; ?>
        </div>
        <section>
            <table class="notice_list_set">
                <thead class="notice_list_title">
                    <tr>
                        <th class="title"><?php echo $array["n_title"]; ?></th>
                    </tr>
                </thead>
                <tbody class="notice_view_content">
                    <tr>
                        <td>
                            <span class="v_title">구분</span>
                            <span class="v_content">                            
                                <?php
                                if($array["cate"] == "b"){
                                    echo "서울";
                                } else if($array["cate"] == "c"){
                                    echo "경기/인천";
                                } else if($array["cate"] == "d"){
                                    echo "충청/대전";
                                } else if($array["cate"] == "e"){
                                    echo "전라/광주";
                                } else if($array["cate"] == "f"){
                                    echo "경북/대구";
                                } else if($array["cate"] == "g"){
                                    echo "경남/부산/울산";
                                } else if($array["cate"] == "h"){
                                    echo "강원";
                                } else if($array["cate"] == "i"){
                                    echo "제주";
                                };
                                ?>
                            </span>
                            <span class="v_title">등록일</span>
                            <span class="v_content"><?php echo $array["w_date"]; ?></span>
                            <span class="v_title">조회수</span>
                            <span class="v_content"><?php echo $cnt; ?></span>
                        </td>
                    </tr>
                </tbody>
                <tr>
                    <td colspan="2" class="v_text">
                    <?php
                    if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                        $f_name = $array["f_name"];
                        echo "
                            <p>
                                <img src=\"../data/$f_name\" alt=\"\">
                            </p>
                        ";
                    }
                    ?>
                    <?php
                    $n_content = str_replace("\n","<br>", $array["n_content"]);
                    $n_content = str_replace(" ","&nbsp;", $n_content);
                    echo $n_content;
                    ?>
                    </td>
                </tr>
            </table>
            <p class="list">
                <a href="cinema_notice.php">목록</a>
                <?php if($s_id == "admin"){ ?>
                <a href="modify.php?n_idx=<?php echo $n_idx; ?>">수정</a>
                <a href="#" onclick="remove_notice()">삭제</a>
                <?php }; ?>
            </p>
        </section>
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
    <?php include "../inc/footer.php"; ?>
    </div>
</body>
</html>