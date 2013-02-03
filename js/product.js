var list = "";
$(document).ready(function(){
    $('.takebtn').on("click",function(){
        var pid = $(this).attr('pid');
        var number = $("select[name=take"+pid+"]").val();
        list += pid+","+number+"|";
        $(this).hide(300);
    // alert(list);
    });
    $(".clear").on("click",function(){
        list = "";
        $('.takebtn').show(300);
    });
    $("#view-cart").on("click",function(){
        
        });
});


