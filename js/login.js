$(function(){
   $("#login").click(function(){
       
       var username = $("input[name=username]").val();
       var pass = $("input[name=pass]").val();
       var data = "userid="+username+"&pass="+pass;
        $(".kucuk_daire_a").remove();
        $(".kucuk_daire").prepend("<a style='margin-top: 65px;' class='kucuk_daire_a'><img src='/img/loader.gif'></a>");
       $.ajax({
           url: "/login_class_action_7481845841.php",
           data: data,
           type: "POST",
           success: function(s){
               if(s == 's'){
                   $(".kucuk_daire_link").removeAttr("id");
                   $("input[name=username]").css("border-right","6px solid #009900");
                   $("input[name=pass]").css("border-right","6px solid #009900");
                   setTimeout(function(){ window.location.href="/"; },1300);
               } else if(s == 'e') {
                   $(".kucuk_daire_link").removeAttr("id");
                   $("input[name=username]").css("border-right","6px solid red");
                   $("input[name=pass]").css("border-right","6px solid red");
                   $(".kucuk_daire_a").remove();
                   $(".kucuk_daire").prepend("<a class='kucuk_daire_a'>Giriş Yap</a>");
                   
               }
           }
       });
       
       return false; 
   });
});