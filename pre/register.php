<!DOCTYPE html>
<html>

<head>
    <title>Kaydol - Netlise</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/b_logo.png">
    <script src="/../js/jquery.js"></script>
    <script>$(function(){
   $(".kucuk_daire_register").click(function(){
       
       var username = $("input[name=username]").val();
       var pass = $("input[name=pass]").val();
       var passconfirm = $("input[name=passconfirm]").val();
       var data = "username="+username+"&pass="+pass+"&passConfirm="+passconfirm;
        
       $.ajax({
           url: "/class/registeraction.php",
           data: data,
           type: "POST",
           success: function(s){
               if(s == 'bosalan'){
                   alert("başarılı");
                   
               } else {
                   alert(s);
               }
           }
       });
       
   });
});</script>
</head>
<?php $userid=mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
if($userid!=''){
    include 'config/.config.php';
    @$userid=mysql_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
    $user_src=mysql_query("SELECT * FROM users WHERE id='".$userid."'");
    $user_srca=mysql_fetch_array($user_src);
    if($user_srca["col3"]=="0"){ ?>

<body class="nl_register_page_body">
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

    <div class="guide_circle_div">
        <div class="register_circle">
            <div>
                <input class="register_page_username" type="text" name="username" placeholder="Bir Kullanıcı Adı Oluştur" />
                <input class="register_page_password" type="password" name="pass" placeholder="Şifre" />
                <input class="register_page_password" type="password" name="passconfirm" placeholder="Şifreni Doğrula" />
                <div class="kucuk_daire_register"><a class="kucuk_daire_ra"> &rarr;</a></div>
            </div>
        </div>
    </div>

</body>
<?php 
    } else if($user_srca["col3"]=="1"){
        header("Location: /pre/feedback.php");
    }else{
        echo "hata";
    }}else{
    header("Location: /");
} ?>

</html>
