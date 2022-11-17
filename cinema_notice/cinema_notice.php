<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$cate = isset($_GET["cate"])? $_GET["cate"] : "";
$table_name = "cinema_notice";
if($cate){
    $sql = "select * from $table_name where cate='$cate';";
} else{
    $sql = "select * from $table_name;";
};

$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
$list_num = 10;
$page_num = 10;
$page = isset($_GET["page"])? $_GET["page"] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block -1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/css_cinema_notice.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/cinema_notice.js"></script>
    <style>
        <?php if($s_id == "admin"){ ?>
            .total{
                width:1000px;
                display:flex;
                justify-content:space-between
            }
        <?php }; ?>
    </style>
</head>
<body>
    <div class="wrap">
    <?php include "../inc/header.php"; ?>
    <main id="content" class="content">
        <div class="notice_wrap">
            <h2 class="notice">공지사항</h2>
            <button type="button" id="tab1_btn" class="tab1_btn" onclick="location.href='../notice/notice.php'">전체 공지</button>
            <button type="button" id="tab2_btn" class="tab2_btn">영화관 공지</button>
            <div class="line"></div>
        </div>
        <div class="tab2_cont">
            <h3 class="blind">영화관 공지</h3>
            <?php if($s_id == "admin"){ ?>
            <p class="total">
                <span>전체<em> <?php echo $total; ?></em>건</span>
                <span><a class="write" href="write.php">[글쓰기]</a></span>
            </p>
            <?php } else{ ?>
                <p class="total">전체<em> <?php echo $total; ?></em>건</p>
            <?php }; ?>
            <div class="search_bg">
                <fieldset class="search_wrap">
                    <select name="movieArea" id="movieArea" class="movieArea" onchange="sel_cate()">
                            <option value="a"<?php if($cate == "a") echo " selected"; ?>>지역</option>
                            <option value="b"<?php if($cate == "b") echo " selected"; ?>>서울</option>
                            <option value="c"<?php if($cate == "c") echo " selected"; ?>>경기/인천</option>
                            <option value="d"<?php if($cate == "d") echo " selected"; ?>>충청/대전</option>
                            <option value="e"<?php if($cate == "e") echo " selected"; ?>>전라/광주</option>
                            <option value="f"<?php if($cate == "f") echo " selected"; ?>>경북/대구</option>
                            <option value="g"<?php if($cate == "g") echo " selected"; ?>>경남/부산/울산</option>
                            <option value="h"<?php if($cate == "h") echo " selected"; ?>>강원</option>
                            <option value="i"<?php if($cate == "i") echo " selected"; ?>>제주</option>
                    </select>
                    <select class="select2">
                        <option value="">제목</option>
                        <option value="">내용</option>
                        <option value="">제목 + 내용</option>
                    </select>

                    <input type="text" name="search2" id="search2" class="search2" placeholder="검색어를 입력해주세요.">
                    <button type="button" class="search2_btn">검색</button>
                </fieldset>
            </div>
            <table class="notice_list">
                <caption class="blind">목록</caption>
                    <tr>
                        <th class="no">번호</th>
                        <th class="sort">구분</th>
                        <th class="n_title">제목</th>
                        <th class="w_date">등록일</th>
                        <th class="cnt">조회수</th>
                    </tr>
                    <?php
                        $start = ($page -1) * $list_num;
                        if($cate){
                            $sql = "select * from $table_name where cate='$cate' order by idx desc limit $start, $list_num;";
                        } else{
                            $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
                        };
                        /* echo $sql;
                        exit; */
                        $result = mysqli_query($dbcon, $sql);
                        $i = $total - (($page -1) * $list_num);
                        while($array = mysqli_fetch_array($result)){
                    ?>
                    <tr class="notice_list_content">
                        <td><?php echo $i; ?></td>
                        <td class="notice_content_title">
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
                        </td>
                        <td>
                            <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                            <?php echo $array["n_title"]; ?>
                            </a>
                        </td>
                        <?php $w_date = substr($array["w_date"], 0, 10);?>
                        <td><?php echo $array["w_date"]; ?></td>
                        <td><?php echo $array["cnt"]; ?></td>
                    </tr>
                    <?php
                            $i--;
                        };
                    ?>
            </table>
            <p class="pager">
            <?php
            if($page <= 1){
            ?>
            <a class="btn_prev" href="cinema_notice.php?page=1">이전</a>
            <?php } else{ ?>
            <a class="btn_prev" href="cinema_notice.php?page=<?php echo ($page -1); ?>">이전</a>
            <?php }; ?>
            <?php
            for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="cinema_notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>
            <?php
            if($page >= $total_page){
            ?>
            <a class="btn_next" href="cinema_notice.php?page=<?php echo $e_pageNum; ?>">다음</a>
            <?php } else{ ?>
            <a class="btn_next" href="cinema_notice.php?page=<?php echo ($page +1); ?>">다음</a>
            <?php }; ?>
            </p>
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
    <?php include "../inc/footer.php"; ?>
    </div>
</body>
</html>