<!DOCTYPE html>
<html>
<head>
    <title>Tanıtım - Netlise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <link rel="icon" href="../img/b_logo.png">
    <script src="../js/jquery.js"></script>
    <link rel="icon" href="img/123.png">
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/registerentrace.js"></script>
    <script src="../js/prestor.js"></script>
    
</head>
    <?php
    include("/../config/.config.php");
    @$userid=mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srca=mysql_fetch_array($user_src);
    if($userid!=""){
    if($user_srca["col2"]=="0"){
    ?>
    <body class="nl_promotion_page_body">
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
        <div class="slide_div">
        <div id="owl-demo" class="owl-carousel owl-theme">

      <div class="item"><img src="../img/Abstract-Light-Backgrounds.jpg" alt="The Last of us"></div>
      <div class="item"><img src="../img/abstract.jpg" alt="GTA V"></div>
      <div class="item"><img src="../img/afrikafutbol.jpg" alt="Mirror Edge"></div>
    </div>
            </div>
        <div class="register_circle_div">
            <a class="guide_min_circle" href="/pre/register.php" > &rarr; </a>
        </div>
    <?php 
    } else if($user_srca["col2"]=="1"){
        header("Location: /pre/register.php");
    }else{
        echo "hata";
    }
    }else{
        header("Location: /login.php");
    } ?>