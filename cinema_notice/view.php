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
    <title>Document</title>
    <style>
        a{text-decoration:none;margin:0 5px}
        table, td{border-collapse:collapse}
        th, td{padding:10px;}
        .notice_list_set{width:860px}
        .notice_list_title{border-top:2px solid #999;border-bottom:1px solid #999;}
        .notice_view_content{border-bottom:1px solid #999;}
        .notice_view_text{border-bottom:2px solid #999;}
        .v_title{width:60px; background:#eee}
        .v_content{width:500px;text-align:left;padding-left:20px}

        .list{width:860px;text-align:center}
        .notice_content_title{text-align:left;padding:left;}

        table a:hover{color:rgb(255, 128, 0)}
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
    <h2>공지사항</h2>
    <?php if($s_id =="admin"){ ?>
    <p class="write_area">
        <span><a href="write.php">[글쓰기]</a></span>
    </p>
    <?php }; ?>
    <table class="notice_list_set">
        <tr class="notice_list_title">
            <th class="v_title">구분</th>
            <td class="v_content">                            
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
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">제목</th>
            <td class="v_content"><?php echo $array["n_title"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">등록일</th>
            <td class="v_content"><?php echo $array["w_date"]; ?></td>
        </tr>
        <tr class="notice_view_content">
            <th class="v_title">조회수</th>
            <td class="v_content"><?php echo $cnt; ?></td>
        </tr>
        <tr class="notice_view_content">
            <td colspan="2" class="v_text">
            <?php
            $n_content = str_replace("\n","<br>", $array["n_content"]);
            $n_content = str_replace(" ","&nbsp;", $n_content);
            echo $n_content;
            ?>
            </td>
        </tr>
    </table>
    <p class="list">
        <a href="../cinema_notice.php">[목록]</a>
        <?php if($s_id == "admin"){ ?>
        <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
        <a href="#" onclick="remove_notice()">[삭제]</a>
        <?php }; ?>
    </p>
</body>
</html>