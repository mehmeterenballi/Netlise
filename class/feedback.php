<?php
mysql_connect("localhost","root","");
mysql_select_db("netlise");
mysql_query("SET CHARSET SET utf8");
$user_id=$_COOKIE["userid"];
$fb_content=$_POST["feedback"];
$time=date("Y.m.d H:i:s", time());
if($_POST){
    if($fb_content!=""){
$insert=mysql_query("INSERT INTO feedback(fb_user_id,fb_content,fb_created)VALUES('".$user_id."','".$fb_content."','".$time."')")or die(mysql_error());

    if($insert){
        echo "s";
        mysql_query("UPDATE users SET col4='1' AND col3='0'");
    }else{
        echo "us";
    }
    }else{
        echo "bos";
    }
}
?>