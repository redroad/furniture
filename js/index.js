var type = 1;
var back = 0;
var page = 1;
var next = 2;
var max =0;
$(document).ready(function(){

    $(function(){
        getproduct();
    });
    
    
    $(".backbtn").live("click",function(){
        //alert("back");
        if(back == 0){
            
                   
        }else{
            page--;
            next--;
            back--;
            getproduct();
        }
    });
    
    $(".nextbtn").live("click",function(){
        // alert("next");
        if(page>=max){
                
        }else{
            page++;
            next++;
            back++;
            getproduct();
        }
    });
    
    $(".product-type-select").live("click",function(){
        var tid = $(this).attr("tid");
        // alert(tid);
        type = tid;
        back = 0;
        page = 1;
        next = 2;
        getproduct();
       
    });
    
    $(".take").live("click",function(){
       var uid = $("#uid").val();
       if(uid==0){
           alert("Please login");
       }else{
           var c = confirm("Add this product to cart");
           if(c){
               
           }else{
               
           }
       }
    });
    
});

function getproduct(){
    $.post("../controller/productjson.php",{
        act:"getproduct",
        type:type,
        page:page
    },function(res){  
        console.log(res);
        $('.product-img').html('');
        $('.product-name').html('');
        $('.product-price').html('');
        $('.product-take').html('');      
        max = res.pagecount;
        $.each(res.products,function(key,val){               
            var img = "<th scope=\"row\"><img src=\"./product/"+val.img+"\" width=\"180\" height=\"180\" /></th>";
            var name = "<th align=\"left\" valign=\"middle\" scope=\"row\">"+val.product_name+"</th>";
            var price = "<th align=\"left\" valign=\"middle\" scope=\"row\">"+val.price+" บาท</th>";
            var btn = "<th align=\"left\" valign=\"middle\" scope=\"row\"><input type='button' value='Add to cart' class='take' pid='"+val.id+"' /></th>";
            $(".product-img").append(img);
            $(".product-name").append(name);
            $(".product-price").append(price);
            $(".product-take").append(btn);               
                
        });
    });
}