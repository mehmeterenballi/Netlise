<!DOCTYPE html>
<html>
<head>
    <title>Rehber - Netlise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/b_logo.png">
</head>
    <?php 
    @$userid=mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
    mysql_connect("localhost","root","");
    mysql_select_db("netlise");
    mysql_query("SET CHARSET SET utf8");
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srca=mysql_fetch_array($user_src);
    if($userid!=""){
    if($user_srca["col2"] == "0"){ ?>
<body class="nl_start_page_body">
        <div class="guide_circle_div">
            <div class="guide_circle"><div class="yazi">adhadçkhahanadkngadnard.kng</div></div>
            <a class="guide_min_circle" href="presantation.php" > &rarr; </a>
        </div>
   <img class="guide_bloons" src="../img/bloons.png">
    </body><?php }else if($user_srca["col2"]=="1"){
        header("Location: /pre/presantation.php");
    }else{
        echo "hata";
    }}else{
        header("Location: /login.php");
    } ?>
</html>
