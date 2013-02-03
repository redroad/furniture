<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './controller/DBcontrol.php';
$db = new DBcontrol();
$db->connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        ============================ADD==================       
        <form action="./controller/productcontrol.php?act=add" enctype="multipart/form-data" method="post">
            <input type="file" name="file"/>
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="detail" placeholder="detail"/>
            <input type="text" name="price" placeholder="price"/>
            <?php
            $sql = "SELECT * FROM product_type";
            $rs = $db->query($sql);
            echo "<select name=type>";
            foreach ($rs as $r) {
                echo "<option value='{$r['id']}'>{$r['type_name']}</option>";
            }
            echo "</select>";
            ?>        
            <input type="submit" value="ok"/>
        </form>
        =================================================

        <?php
        $db->close();
        ?>
    </body>
</html>
