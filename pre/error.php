<!DOCTYPE html>
<html>
<head>
    <title>Hata - Netlise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/b_logo.png">
</head>
    <?php
    mysql_connect("localhost","root","");
    mysql_select_db("netlise");
    mysql_query("SET CHARSET SET utf8");
    @$userid=$_COOKIE["userid"];
    if($userid!=""){
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srcd=mysql_fetch_array($user_src);
    if($user_srcd["welcome"]=="1"){ ?>
<body class="nl_error_page_body">
<div class="nl_header">
<div class="nl_header_center">
    <div class="nl_header_left">
    <i class="netlise_logo"></i>
        <div class=nl_header_right>
    <a class="nl_header_right_logout" href="/">asdf</a>
    </div>
    </div>
</div>
</div>
            <div class="error_circle_div"><a class="error_circle_div_a">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini a</a>
            </div>
        <img class="error_bloons" src="../img/bloons_mirror.png">
    <div class="error_go_fbp">
    <a class="error_go_fbp_a" href="feedback.php">Görüş Bildir</a>
    </div>
    </body>
    <?php }elseif($user_srcd["welcome"]=="0"){
        header("Location: /");
    }else{
        echo "hata";
    }}else{
        header("Location: /");
    } ?>
</html>
