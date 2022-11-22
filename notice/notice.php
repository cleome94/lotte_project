<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select * from notice;";
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
    <title>공지사항 목록 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/css_notice.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/notice.js"></script>
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
                <button type="button" id="tab1_btn" class="tab1_btn" onclick="tab1_btn_on()">전체 공지</button>
                <button type="button" id="tab2_btn" class="tab2_btn" onclick="location.href='../cinema_notice/cinema_notice.php'">영화관 공지</button>
                <div class="line"></div>
            </div>
            <div class="tab1_cont" id="tab1_cont">
                <h3 class="blind">전체 공지</h3>
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
                        <select class="select1">
                            <option value="">제목</option>
                            <option value="">내용</option>
                            <option value="">제목 + 내용</option>
                        </select>
                        <input type="text" name="search1" id="search1" class="search1" placeholder="  검색어를 입력해주세요.">
                        <button type="button" class="search1_btn">검색</button>
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
                                $sql = "select * from notice order by idx desc limit $start, $list_num;";
                            /* echo $sql;
                            exit; */
                            $result = mysqli_query($dbcon, $sql);
                            $i = $total - (($page -1) * $list_num);
                            while($array = mysqli_fetch_array($result)){
                        ?>
                        <tr class="notice_list_content">
                            <td><?php echo $i; ?></td>
                            <td class="notice_content_title">
                                <?php echo $array["sort"]; ?>
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
                <a class="btn_prev" href="notice.php?page=1">이전</a>
                <?php } else{ ?>
                <a class="btn_prev" href="notice.php?page=<?php echo ($page -1); ?>">이전</a>
                <?php }; ?>
                <?php
                for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                ?>
                <a href="notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
                <?php }; ?>
                <?php
                if($page >= $total_page){
                ?>
                <a class="btn_next" href="notice.php?page=<?php echo $e_pageNum; ?>">다음</a>
                <?php } else{ ?>
                <a class="btn_next" href="notice.php?page=<?php echo ($page +1); ?>">다음</a>
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