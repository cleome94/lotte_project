<?php
if(!$s_idx || $s_id!="admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href=\" 장소 집어 넣기 \";
        </script>
    ";
    exit;
};
?>