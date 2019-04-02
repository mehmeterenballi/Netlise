<!DOCTYPE html>
<html>
<head>
<title>Tebrikler</title>
<link rel="icon" href="../img/b_logo.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery.js"></script>
<script src="/js/errorentrace.js"></script>
</head>
<?php
    @$userid==mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
    include("/../config/.config.php");
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srca=mysql_fetch_array($user_src);
    if($userid!=""){
    if($user_srca["col4"]=="1"){?>
<body class="nl_congratulations_page_body">
<div class="nl_header">
    <div class="nl_header_center">
        <div class="nl_header_left">
        <i class="netlise_logo"></i>
            <div class=nl_header_right>
        <a class="nl_header_right_logout" href="/logout.php">Çıkış Yap</a>
        </div>
        </div>
    </div>    
    </div>
    <div class="congratulations_circle_div">
            <div class="congratulations_circle"><div class="yazi_cong">Tebrikler Netlise' a üye oldunuz. Şimdi tanıtım sayfamıza geçelim. </div></div>
            <a class="congratulations_min_circle" href="error.php" > &rarr; </a>
        </div>
    
    <div>
        <a id="button" href="error.php">Git</a>
        </div>
</body>
    <?php }else if($user_srca["col4"]=="0"){
        header("Location: /");
    }else{
        echo "hata";
    }}else{
        header("Location: /");
    } ?>
</html>