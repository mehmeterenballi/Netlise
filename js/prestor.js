$(function(){
   $("#butto").click(function(){
       var col4 = "0";
       var col2 = "0";
       var col1 = "0";
       var data = "col4="+col4++"&col2="+col2+"&col1="+col1;
       $.ajax({
           url: "/pre/errorentrace.php",
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