<?php
$userid=$_COOKIE["userid"];

setcookie("userid",$userid,time()-(60*60*24*365*2));

header("Location: /");
?>