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
                <table width="559" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <th width="112" align="left" valign="top" scope="row">&nbsp;</th>
                    <th width="19" rowspan="6" align="left" valign="top" scope="row"><img src="product/left_line_dot (2).png" width="19" height="135"></th>
                    <th width="408" align="left" valign="top" scope="row"><input type="file" name="file"/></th>
                  </tr>
                  <tr>
                    <th align="left" valign="top" scope="row">เลือกประเภท</th>
                    <th align="left" valign="top" scope="row"><?php
                $sql = "SELECT * FROM product_type";
                $rs = $db->query($sql);
                echo "<select name=type>";
                foreach ($rs as $r) {
                    echo "<option value='{$r['id']}'>{$r['type_name']}</option>";
                }
                echo "</select>";
                ?></th>
                  </tr>
                  <tr>
                    <th align="left" valign="top" scope="row">ชื่อสินค้า</th>
                    <th align="left" valign="top" scope="row"><input type="text" name="name" placeholder="name"/></th>
                  </tr>
                  <tr>
                    <th align="left" valign="top" scope="row">รายละเอียด</th>
                    <th align="left" valign="top" scope="row"><input type="text" name="detail" placeholder="detail"/></th>
                  </tr>
                  <tr>
                    <th align="left" valign="top" scope="row">ราคา</th>
                    <th align="left" valign="top" scope="row"><input type="text" name="price" placeholder="price"/>
                    <input type="submit" value="OK"/></th>
                  </tr>
                  <tr>
                    <th height="19" align="left" valign="top" scope="row">&nbsp;</th>
                    <th align="left" valign="top" scope="row">&nbsp;</th>
                  </tr>
                </table>
                <p>&nbsp;</p></form></div>
        =================================================
        <div class="product-view">
            <table width="800">
                <thead>
                    <tr>
                        <th align="left" valign="top">รหัสสินค้า</th>
                        <th align="left" valign="top">ชื่อสินค้า</th>
                        <th align="left" valign="top">รายล่ะเอียด</th>
                        <th align="left" valign="top">ราคา</th>
                        <th align="left" valign="top">รูปสินค้า</th>
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
                        echo "<td><a href='productedittemp.php?id={$r['id']}' target=_blank>Edit</a> | <a href='./controller/productcontrol.php?act=del&id={$r['id']}&img={$r['img']}'>Delete</a></td>";
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
