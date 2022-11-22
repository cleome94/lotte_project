<?php
include "../inc/session.php";
$n_idx = $_GET["n_idx"];
$table_name = "notice";
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
    <title>관리자 페이지 전체 공지 상세 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <link rel="stylesheet" type="text/css" href="../../css/admin_view.css">
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

            <h2>전체 공지</h2>
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
                        <span class="v_content"><?php echo $array["sort"]; ?></span>
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
            <a href="list.php">[목록]</a>
            <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
            <a href="#" onclick="remove_notice()">[삭제]</a>
        </p>
    </section>
</body>
</html>