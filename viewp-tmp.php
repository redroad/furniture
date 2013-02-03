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
        <script src="./js/jquery-1.7.2.min.js"></script>
        <script src="./js/product.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        $sql = "SELECT * FROM product";
        $rs = $db->query($sql);
        foreach ($rs as $r) {
            echo $r['product_name'] . "<br>";
            echo "<select name='take{$r['id']}'>";
            for ($i = 1; $i <= $r['available']; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            echo "</select>";
            echo "<input type='button' class='takebtn' pid='{$r['id']}' value='take'/>";
            echo '<hr>';
        }
        ?>
        <input class="clear" type="button" value="clear"/>
        <input id="view-cart" type="button" value="Cart"/>
    </body>
</html>
<?php
$db->close();
?>