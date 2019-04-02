<?php
include("/config/.config.php");
$col4=$_POST["col4"];
$col3=$_POST["col3"];
$select=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
$update=mysql_query("UPDATE users SET col4='".$col4."', col3='".$col3."'");

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