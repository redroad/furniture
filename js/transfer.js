$(document).ready(function(){
    $('#save-btn').live('click',function(){
        var tdate = $('#tdate').val();
        var ttime = $('#ttime').val();
        var refid = $('#refid').val();
        var amount = $('#amount').val();
        if(!(tdate && ttime && refid && amount)){
            alert('Some value is empty!');
        }else{
            $.post('/controller/productjson.php',{
                act:'transfer',
                refid:refid,
                tdate:tdate,
                ttime:ttime,
                amount:amount
            },function(res){
                console.log(res);
                if(res){
                    alert('Data is saved.');
                }else{
                    alert('Wrong data!');
                }
            });
        }
    }); 
    $('.check-tlist').live('click',function(){
        var id = $(this).attr('pk');
        var cid = $(this).attr('cid');
        var c = confirm('ยืนยันการตรวจสอบ');
        if(c){
            $.post('/controller/productjson.php',{
                act:'check',
                id:id,
                cid:cid
            },function(res){
                console.log(res);
                location.reload();
            });
        }
    });
    $('.remove-tlist').live('click',function(){
        var id = $(this).attr('pk');
        var c = confirm('ต้องการลบรายการหรือไม่');
        if(c){
            $.post('/controller/productjson.php',{
                act:'del-tlist',
                id:id
            },function(res){
                location.reload();
            });
        }
    });
});


