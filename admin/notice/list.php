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
    <title>관리자 페이지 공지사항 목록 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin_list.css">
    <script>
        function remove_notice(g_no){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx="+g_no;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>

    <h2 class="notice">공지사항</h2>
    <button type="button" id="tab1_btn" class="tab1_btn" onclick="tab1_btn_on()">전체 공지</button>
    <button type="button" id="tab2_btn" class="tab2_btn" onclick="location.href='../cinema_notice/list.php'">영화관 공지</button>
    <div class="line"></div>

    <h3 class="blind">전체 공지</h3>
    <p class="total">
        <span>전체<em> <?php echo $total; ?></em>건</span>
        <span><a class="write" href="write.php">[글쓰기]</a></span>
    </p>

    <fieldset class="search_wrap">
        <select class="select1">
            <option value="">제목</option>
            <option value="">내용</option>
            <option value="">제목 + 내용</option>
        </select>
        <input type="text" name="search1" id="search1" class="search1" size="100" placeholder="  검색어를 입력해주세요.">
        <button type="button" class="search1_btn">검색</button>
    </fieldset>

    <table class="notice_list">
        <caption>목록</caption>
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
    <a class="btn_prev" href="list.php?page=1">이전</a>
    <?php } else{ ?>
    <a class="btn_prev" href="list.php?page=<?php echo ($page -1); ?>">이전</a>
    <?php }; ?>
    <?php
    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>
    <?php
    if($page >= $total_page){
    ?>
    <a class="btn_next" href="list.php?page=<?php echo $e_pageNum; ?>">다음</a>
    <?php } else{ ?>
    <a class="btn_next" href="list.php?page=<?php echo ($page +1); ?>">다음</a>
    <?php }; ?>
    </p>
</body>
</html>