<!DOCTYPE html>
<html>
<head>
    <title>Görüş Bildir - Netlise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/b_logo.png">
    <script src="/js/jquery.js"></script>
    <script src="/js/feedback.js"></script>
    <script src="/js/congratulationentrace.js"></script>
</head>
    <?php
    @$userid=mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
    mysql_connect("localhost","root","");
    mysql_select_db("netlise");
    mysql_query("SET CHARDET SET utf8");
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srca=mysql_fetch_array($user_src);
    if($userid!=''){
    if($user_srca["col3"]=="1"){?>
    <body class="nl_feedback_page_body">
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
    
    <div class="feedback_div">
        <div class="feedback_explanation_circle_div">
        <a class="feedback_explanation_circle_a">Github deneme</a>
        </div>
    <div class="feedback_text_div">
    <textarea name="feedback" class="feedback_text" placeholder="Açıklama"></textarea>
    </div>
    <div id="button" class="feedback_button_circle_div">
        <a class="feedback_button_circle">&rarr;</a>
        </div>
    
    </div>
    </body>
    <?php 
    }else if($user_srca["col3"]=="0"){
        header("Location: /");
    }else{
        echo "hata";
    }}else if($userid==''){
        header("Location: /index.php");
    }else{
        echo "hata";
    } ?>
    </html>
