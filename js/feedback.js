$(function(){
   $("#button").click(function(){
       var feedback=$("textarea[name=feedback]").val();
       var data="feedback="+feedback;
       $.ajax({
          url:"/class/feedback.php",
          data:data,
          type:"POST",
          success:function(s){
             if(s=="s"){
                  $("textarea[name=feedback]").css("border-right","10px solid #009900");
                  setTimeout(function(){window.location.href="/pre/congratulations.php";},1300);
              }else if(s=="us"){
                  alert("Mesajınız gönderilemedi");
              }else if(s=="bos"){
                  alert("Lütfen boş alan bırakmayınız");
              }else{
                  alert("Bir hata ile karşılaşıldı");
              }
          }
       });
   }) 
});