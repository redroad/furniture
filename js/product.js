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
        
    $('.shipping').live('click',function(){
        var id = $(this).attr('pk');
        var c = confirm('ยืนยันการจัดส่งสินค้า');
        if(c){
            $.post('/controller/productcontrol.php',{
                act:'shipping',
                id:id
            },function(){
                location.reload();
            });
        }
    });
    $('.cancel-product').live('click',function(){
        var id = $(this).attr('pk');
        var c = confirm('ยืนยันการยกเลิกสินค้า');
        if(c){
            $.post('/controller/productcontrol.php',{
                act:'cancel-product',
                id:id
            },function(){
                location.reload();
            });
        }
    });
});


