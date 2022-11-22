<?php
include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";
$sql = "select * from members;";
$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);
$list_num = 10;
$page_num = 10;
$page = isset($_GET["page"])? $_GET["page"] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($total_page / $page_num);
$s_pageNum = ($now_block -1) * $page_num +1;
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
    <title>관리자페이지 회원관리 목록 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <link rel="stylesheet" type="text/css" href="../../css/member_list.css">
    <script>
        function mem_del(g_no){
            var rtn_val = confirm("정말 삭제하시겠습니까?");
            if(rtn_val == true){
                location.href = "member_delete.php?g_idx=" + g_no;
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <p>전체 회원수 <?php echo $total; ?>명</p>
    <table class="mem_list_set">
        <tr class="mem_list_title">
            <th class="no">번호</th>
            <th class="u_id">아이디</th>
            <th class="u_name">이름</th>
            <th class="birth">생년월일</th>
            <th class="phone">휴대폰 번호</th>
            <th class="reg_date">가입일</th>
            <td class="modify">관리</td>
        </tr>
        <?php
        $start = ($page -1) * $list_num;
        $sql = "select * from members limit $start, $list_num;";
        $result = mysqli_query($dbcon, $sql);
        $i = $start +1;
        while($array = mysqli_fetch_array($result)){
        ?>
        <tr class="mem_list_content">
            <td><?php echo $i; ?></td>
            <td><?php echo $array["u_id"]; ?></td>
            <td><?php echo $array["u_name"]; ?></td>
            <td><?php echo $array["birth"]; ?></td>
            <?php
                $phone = strval($array["phone"]);
                $phone1 = substr($phone, 0, 3);
                $phone2 = substr($phone, 3, -4);
                $phone3 = substr($phone, -4);
                $phone = $phone1."-".$phone2."-".$phone3;
                echo "<td>".$phone."</td>";
            ?>
            <td><?php echo $array["reg_date"]; ?></td>
            <td>
                <a href="member_info.php?g_idx=<?php echo $array["idx"]; ?>">[수정]</a>
                <a href="#" onclick="mem_del(<?php echo $array['idx']; ?>)">[삭제]</a>
            </td>
        </tr>
        <?php
                $i++;
            };
        ?>
    </table>
    <p class="pager">
    <?php
    if($page <= 1){
    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page -1); ?>">이전</a>
    <?php }; ?>
    <?php
    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>
    <?php
    if($page >= $total_page){
    ?>
    <a href="list.php?page=<?php echo $e_pageNum; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page +1); ?>">다음</a>
    <?php }; ?>
    </p>
</body>
</html>