<?php
$connection=mysqli_connect("localhost","root","");
$select=mysqli_select_db($connection,"netlise") or die(mysql_error);
@$userid= mysqli_real_escape_string(strip_tags(trim($_COOKIE["userid"])));
$user_src=mysqli_query($connection,"SELECT * FROM users WHERE id='".$userid."'");
$user_srca=mysqli_fetch_array($select,$user_src);
if($userid==""){ ?>
<!DOCTYPE html>
<html>

<head>
    <title>Netlise&#39;a Giriş Yap</title>
    <link rel="icon" href="../img/b_logo.png">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/login.js"></script>
</head>

<body class="not_open_page_body" style="background:url('/img/back.jpg');background-size: 100%;">
    <div class="d_center">
        <form>
            <div class="daire">
                <div class="gr_logo"><i class="login_page_circle_logo"></i></div>
                <input class="login_page_username" type="text" name="username" placeholder="Kullanıcı adı veya tc" />
                <div>
                    <input class="login_page_password" type="password" name="pass" placeholder="Şifre" />
                </div>
            </div>
            <div class="kucuk_daire"><a class="kucuk_daire_a">Giriş Yap</a></div>
        </form>
        <a class="kucuk_daire_link" href="#" id="login"></a>
    </div>
</body>

</html>
<?php }else{
    header("Location: /pre/presantation.php");
}
?>
