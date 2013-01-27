$(document).ready(function(){
    $("#login-btn").on("click",function(){
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();
        $.post("/controller/membercontrol.php",{
            act:"login",
            email:email,
            password:password
        },function(res){
       //     console.log(res)
          
            $(window.location).attr('href', '../index.php');
            
                
        });
    });
});


