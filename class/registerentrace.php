<?php
include("/config/.config.php");
$user_id=$_COOKIE["userid"];
$col2=$_POST["col2"];
$col1=$_POST["col1"];
$select=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
$update=mysql_query("UPDATE users SET col2='".$col2."' AND col1='".$col1."'");

if($select){
    if($update){
        echo "s";
    }else{
        echo "e";
    }
}else{
    echo "e";
}
?>