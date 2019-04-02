<?php 
    include("/config/.config.php");
    if($_POST){
        $userid = mysql_real_escape_string(strip_tags(trim($_POST["userid"])));
        $pass = mysql_real_escape_string(strip_tags(trim($_POST["pass"])));
        $passMD5 = md5(mysql_real_escape_string(strip_tags(trim($pass))));
        
        $l_src = mysql_query("SELECT * FROM users WHERE tcno='".$userid."' AND okul_numarasi='".$passMD5."'");
        $l_srcd = mysql_num_rows($l_src);        
        $l_u_src = mysql_query("SELECT * FROM users WHERE tcno='".$userid."' AND okul_numarasi='".$passMD5."'");
        $l_u_srcd = mysql_fetch_array($l_u_src);
        
        if($l_srcd > 0){
            sleep(1);
            setcookie("userid",$l_u_srcd['id'],time()+(60*60*24*365*2));
            echo "s";
        } else {
            sleep(1);
            echo 'e';
        }
        
    }

?>