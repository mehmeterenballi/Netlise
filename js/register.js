$(function(){
   $(".tikla").click(function(){
       
       var username = $("input[name=username]").val();
       var pass = $("input[name=password]").val();
       var passconfirm = $("input[name=passconfirm]").val();
       var data = "username="+username+"&pass="+pass+"&passConfirm="+passconfirm;
        
       $.ajax({
           url: "/class/registeraction.php",
           data: data,
           type: "POST",
           success: function(s){
               if(s == 's'){
                   alert("başarılı");
                   
               }
           }
       });
       
       return false; 
   });
});