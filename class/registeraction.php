<?php
include '/config/.config.php';
if($_POST){
    function checkspecial($string){
        if(preg_match('/[^a-zA-Z1-9_.]/', $string)){
            return false;
        } else {
            return true;
        }
    }
    $id = $_COOKIE["userid"];
    $username = mysql_real_escape_string(strip_tags(trim($_POST["username"])));
    $pass = mysql_real_escape_string(strip_tags(trim($_POST["pass"])));
    $passConfirm=mysql_real_escape_string(strip_tags(trim($_POST["passConfirm"])));
    $passMD5 = md5(mysql_real_escape_string(strip_tags(trim($pass))));
                       
        $selectuv=mysql_query("SELECT * FROM users WHERE username='".$username."'");
        $countuv=mysql_num_rows($selectuv);
        if(!empty($username) && !empty($pass) && !empty($passConfirm)){
            if($pass == $passConfirm){
                if(checkspecial($username)){
                    if(strlen($pass) > 5){
                        if(strlen($username) > 3){
                            echo 'success';
                            $col = mysql_query("UPDATE users SET col3='1', col2='0' WHERE id='".$id ."'");
                            $user = mysql_query("UPDATE users SET username='".$username."', pass='".$passMD5."' WHERE id='".$id."'");
                        } else {
                            echo 'usmall';
                        }
                    } else {
                        echo 'psmall';
                    }
                } else {
                    echo 'invalid';
                }
            } else {
                echo 'eslesmiyor';
            }
        } else {
            echo 'bos';  
        }
            
        /* if(empty($countuv)){
            $update = mysql_query("UPDATE users SET tcno='".$username."' WHERE id='".$id."'");
                if($update){
                    header("Location: /pre/feedback.php");
                    echo "s";
                }else{
                    echo "hata";
                }
            }else{
                echo "kullaniciismik";
            }
        }else if($username!="" && $pass!="" && $pass!=$passconfirm){
            echo "parolaeslesmiyor";
        }else if($username!="" && $pass=="" && $pass=$passconfirm){
            echo "bosalan";
        }else if($username=="" && $pass!="" && $pass=$passconfirm){
            echo "bosalan";
        }else if($username=="" && $pass=="" && $pass!=$passconfirm){
            echo "bosalan";
        }else if($username!="" && $pass=="" && $pass==$passconfirm){
            echo "bosalan";
        }else if($username=="" && $pass=="" && $pass!=$passconfirm){
            echo "bosalan";
        }else if($username=="" && $pass=="" && $pass=$passconfirm){
            echo "bosalan";
        }else{
            echo"hata";
        } */
}
?>