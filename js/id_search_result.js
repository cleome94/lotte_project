function return_id(){
    opener.document.getElementById("u_id").value = "<?php echo $u_id; ?>";
    window.close();
};