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
        <div class="product-add">
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
        </div>
        =================================================
        <div class="product-view">
            <table>
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM product";
                    $rs = $db->query($sql);
                    foreach ($rs as $r) {
                        echo "<tr>";
                        echo "<td>{$r['id']}</td>";
                        echo "<td>{$r['product_name']}</td>";
                        echo "<td>{$r['product_detail']}</td>";
                        echo "<td>{$r['price']}</td>";
                        echo "<td>{$r['img']}</td>";
                        echo "<td><a href=#>Edit</a> | <a href='./controller/productcontrol.php?id'>Delete</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>





        <?php
        $db->close();
        ?>
    </body>
</html>
