$(function(){
   $(".slider_page_gb").click(function(){
       var col2 = "1";
       var col1 = "0";
       var data = "col2="+col2+"&col1="+col1;
       $.ajax({
           url: "/pre/registerentrace.php",
           data: data,
           type: "POST",
           success: function(s){
               if(s == 's'){
                   setTimeout(function(){ window.location.href="/pre/register.php"; },1300);
               } else if(s == 'e') {
                   alert("Bir hata ile karşılaşıldı");
               }
           }
       });
       return false; 
   });
});