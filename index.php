<?php
include 'config/.config.php';
@$userid= mysqli_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
if($userid!=""){
    $user_src = mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srcd = mysql_fetch_array($user_src);
    if($user_srcd["welcome"] == "1"){
        header("Location: /pre/error.php");
    } elseif($user_srcd["welcome"] == "0"){
        header("Location: /pre/start.php");
    } else {
        echo "Sistem bir hata ile karşılaştı!";
    }
}else{
    include 'login.php';
}
?>
