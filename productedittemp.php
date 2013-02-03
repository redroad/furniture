<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './controller/DBcontrol.php';
$db = new DBcontrol();
$db->connect();
$id = $_REQUEST['id'];
$sql = "SELECT * FROM product WHERE id=$id";
$rs = $db->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="product-edit">
            <img src="<?php echo "./product/".$rs[0]['img'] ?>" width="300"/>
            
            <form action="./controller/productcontrol.php?act=add" enctype="multipart/form-data" method="post">
                <input type="hidden" name="pid" value="<?php $rs[0]['id'] ?>">
                <input type="file" name="file"/>
                <input type="text" name="name" placeholder="name" value="<?php echo $rs[0]['product_name'] ?>"/>
                <input type="text" name="detail" placeholder="detail" value="<?php echo $rs[0]['product_detail'] ?>"/>
                <input type="text" name="price" placeholder="price" value="<?php echo $rs[0]['price'] ?>"/>
                <?php
                $sql = "SELECT * FROM product_type";
                $res = $db->query($sql);
                echo "<select name=type>";
                foreach ($res as $r) {
                    if ($r['id'] == $rs[0]['type_id']) {
                        echo "<option selected value='{$r['id']}'>{$r['type_name']}</option>";
                    } else {
                        echo "<option value='{$r['id']}'>{$r['type_name']}</option>";
                    }
                }
                echo "</select>";
                ?>        
                <input type="submit" value="ok"/>
            </form>
        </div>
        <?php
        $db->close();
        ?>
    </body>
</html>
