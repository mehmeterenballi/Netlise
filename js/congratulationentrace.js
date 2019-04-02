$(function(){
   $("#button").click(function(){
       var col4 = "1";
       var col3 = "1";
       var data = "col4="+col4+"&col3="+col3;
       $.ajax({
           url: "/pre/congratulationentrace.php",
           data: data,
           type: "POST",
           success: function(s){
               if(s == 's'){
                   setTimeout(function(){ window.location.href="/pre/congratulations.php"; },1300);
               } else if(s == 'e') {
                   alert("Bir hata ile karşılaşıldı");
               }
           }
       });
       return false; 
   });
});