<?php
include "../inc/session.php";
$g_idx = $_GET["g_idx"];
include "../inc/login_check.php";
include "../inc/dbcon.php";
$sql = "select * from members where idx=$g_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지 회원정보 조회 / 수정 - 롯데시네마</title>
    <link rel="stylesheet" type="text/css" href="../../css/body.css">
    <script src="../../js/admin_member_info.js"></script>
    <script type="text/javascript">
        function mem_del(){
            var rtn_val = confirm("정말 삭제하시겠습니까?");
            if(rtn_val == true){
                location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>";
            };
        };
    </script>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <form name="edit_form" action="edit.php" method="post" onsubmit="return edit_form_check()">
        <h2>내정보 조회 / 수정</h2>
        <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
        <table>
            <tr>
                <th>아이디</th> 
                <td><?php echo $array["u_id"]; ?></td>
            </tr>
            <tr>
                <th>이름</th> 
                <td><?php echo $array["u_name"]; ?></td>
            </tr>
            <tr>
                <th><label for="pwd">비밀번호</label></th>
                <td><input type="password" name="pwd" id="pwd"></td>
            </tr>
            <tr>
                <th><label for="repwd">비밀번호 확인</label></th>
                <td><input type="password" name="repwd" id="repwd"></td>
            </tr>
            <?php
                $birth = str_replace("-", "", $array["birth"]);
            ?>
            <tr>
                <th><label for="birth">생년월일</label></th>
                <td><input type="text" name="birth" id="birth" value="<?php echo $birth; ?>"></td>
            </tr>
            <tr>
                <th><label for="phone">휴대폰 번호</label></th>
                <td><input type="text" name="phone" id="phone" value="<?php echo $array["phone"]; ?>"></td>
            </tr>
        </table>
        <p class="btn">
            <button type="button" onclick="history.back()">취소</button>
            <button type="submit">수정완료</button>
            <button type="button" onclick="mem_del()">회원탈퇴</button>
        </p>
    </form>
</body>
</html>