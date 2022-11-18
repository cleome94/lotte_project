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
        body{
            width:1000px;
            margin:0 auto;
        }
        .write_area{
            width:1000px;
            display:flex;
            flex-direction:row-reverse
        }
        .notice_list_set{
            width:1000px;
            position:relative;
            margin-top:30px;
        }
        table, td{
            border-collapse:collapse
        }
        .notice_list_title{
            height:50px;
            background:#eee;
            border-top:1px solid #999;
        }
        .notice_list_title th{
            font-size:16px;
            font-weight:500;
            text-align:left;
            padding-left:10px;
        }
        .notice_view_content{
            height:33px;
            border-bottom:1px solid#999;
        }
        .notice_view_content td{
            padding-left:10px;
        }
        .v_title{
            color:#808080;
            margin-right:10px;
        }
        .v_content{
            margin-right:30px
        }
        .v_text{
            padding:30px 10px;
            border-bottom:1px solid#999;
        }
        .list{
            text-align:center;
        }
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
    <?php include "../inc/sub_header.html"; ?>

    <h2>공지사항</h2>
    <p class="write_area">
        <span><a href="write.php">[글쓰기]</a></span>
    </p>

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
            <tr class="notice_view_content">
                <td colspan="2" class="v_text">
                <?php
                if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                    $f_name = $array["f_name"];
                    echo "
                        <p>
                            <img src=\"../../data/$f_name\" alt=\"\">
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
            <a href="list.php">목록</a>
            <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
            <a href="#" onclick="remove_notice()">[삭제]</a>
        </p>
    </section>
</body>
</html>