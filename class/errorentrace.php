<?php
include("/config/.config.php");
$user_id=$_COOKIE["userid"];
$welcome=$_COOKIE["welcome"];
$col4=$_POST["col4"];
$col2=$_POST["col2"];
$col1=$_POST["col1"];
$select=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
$update=mysql_query("UPDATE users SET welcome='".$welcome."', col4='".$col4."', col2='".$col2."', col1='".$col1."'");

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