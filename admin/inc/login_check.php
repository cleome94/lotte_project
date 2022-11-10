<?php
if(!$s_idx || $s_id!="admin"){
    echo"
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href=\"http://localhost/project/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>
<!-- 경로 다시 정하기 -->