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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <title></title>

        <style type="text/css">
            <!--
            a {
                font-family: ms Sans Serif;
                font-size: 12px;
            }
            body,td,th {
                font-family: ms Sans Serif;
                font-size: 14px;
            }
            table {
                font-size: 14px;
            }
            -->
        </style>

    </style>
    <style>
        body{
            background:#333 url(bg.jpg) repeat top left;
            background-attachment:fixed;
        </style>

        <style media="all" type="text/css">
            .round_image{
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: #000 0 2px 10px;
            -moz-box-shadow: #000 0 2px 10px;
            box-shadow: #000 0 2px 10px;
        }
        .round_image3 {-webkit-border-radius: 10px;
                       -moz-border-radius: 10px;
                       border-radius: 10px;
                       -webkit-box-shadow: #000 0 2px 10px;
                       -moz-box-shadow: #000 0 2px 10px;
                       box-shadow: #000 0 2px 10px;
        }
        #MenuList {font-weight: bold;
        }
        #list {color: #000;
        }
        .round_image31 {-webkit-border-radius: 10px;
                        -moz-border-radius: 10px;
                        border-radius: 10px;
                        -webkit-box-shadow: #000 0 2px 10px;
                        -moz-box-shadow: #000 0 2px 10px;
                        box-shadow: #000 0 2px 10px;
        }
        .round_image311 {-webkit-border-radius: 10px;
                         -moz-border-radius: 10px;
                         border-radius: 10px;
                         -webkit-box-shadow: #000 0 2px 10px;
                         -moz-box-shadow: #000 0 2px 10px;
                         box-shadow: #000 0 2px 10px;
        }
        .product-view .round_image311 tr th table tr th table tr th table {
            color: #FFF;
        }
        .product-view .round_image311 tr th table tr th table tr th table {
            color: #000;
        }
    </style>
</head > 
<body>
    <div class="product-add ">
        <form action="./controller/productcontrol.php?act=add" enctype="multipart/form-data" method="post">
            <table width="800px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image31">
                <tr>
                    <th align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th align="left" valign="middle" scope="row">&nbsp;</th>
                        <td align="center" valign="middle"><img src="images/P_add.png" width="407" height="86" /></td>
                        <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                        <th align="left" valign="middle" scope="row">&nbsp;</th>
                        <td align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                        <th colspan="3" align="left" valign="middle" scope="row"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                        <tr>
                            <th scope="row"><table width="505" border="0" align="center" cellpadding="0" cellspacing="5">
                            <tr>
                                <th width="120"  align="left" valign="top" scope="row">&nbsp;</th>
                                <th width="20" rowspan="6" align="left" valign="top" scope="row"><img src="product/left_line_dot.png" width="19" height="150"></th>
                                <th width="284" align="left" valign="top" scope="row"><span class="cssfonts">
                                        <input type="file" name="file"/>
                                    </span></th>
                            </tr>
                            <tr>
                                <th align="left" valign="top" class="cssfonts" scope="row">เลือกประเภท</th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">
                                        <?php
                                        $sql = "SELECT * FROM product_type";
                                        $rs = $db->query($sql);
                                        echo "<select name=type>";
                                        foreach ($rs as $r) {
                                            echo "<option value='{$r['id']}'>{$r['type_name']}</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </span></th>
                            </tr>
                            <tr>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">ชื่อสินค้า</span></th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">
                                        <input type="text" name="name" placeholder="name"/>
                                    </span></th>
                            </tr>
                            <tr>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">รายละเอียด</span></th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">
                                        <input type="text" name="detail" placeholder="detail"/>
                                    </span></th>
                            </tr>
                            <tr>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">ราคา</span></th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">
                                        <input type="text" name="price" placeholder="price"/>
                                    </span></th>
                            </tr>
                            <tr>
                                <th height="19" align="left" valign="top" scope="row">จำนวน</th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">
                                        <input type="text" name="available" placeholder="available" id="available"/>
                                        <input type="submit" value="OK"/>
                                    </span></th>
                            </tr>
                            <tr>
                                <th height="19" align="left" valign="top" scope="row">&nbsp;</th>
                                <th align="left" valign="top" scope="row">&nbsp;</th>
                                <th align="left" valign="top" scope="row"><span class="cssfonts">* อัพรูปได่ไม่เกิน 2 MB รองรับ PNG JPG GIF</span></th>
                            </tr>
                        </table></th>
                        </tr>
                    </table></th>
                    </tr>
                </table>
                <p>&nbsp;</p></th>
                </tr>
            </table>
            <p>&nbsp;</p></form></div>
    <div class="product-view">
        <table width="1000px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image311">
            <tr>
                <th align="center" valign="top" scope="row"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th align="left" valign="middle" scope="row"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                    <tr>
                        <th align="center" valign="top" scope="row"><table width="100%" align="center">
                        <thead>
                            <tr>
                                <th width="92" align="center" valign="top" bgcolor="#CCCCCC">รหัสสินค้า</th>
                                <th width="165" align="center" valign="top" bgcolor="#CCCCCC">ชื่อสินค้า</th>
                                <th width="278" align="center" valign="top" bgcolor="#CCCCCC">รายล่ะเอียด</th>
                                <th width="92" align="center" valign="top" bgcolor="#CCCCCC">ประเภทสินค้า</th>
                                <th width="48" align="center" valign="top" bgcolor="#CCCCCC">จำนวน</th>
                                <th width="46" align="center" valign="top" bgcolor="#CCCCCC">ราคา</th>
                                <th width="140" align="center" valign="top" bgcolor="#CCCCCC">รูปสินค้า</th>
                                <th width="97" align="center" valign="top" bgcolor="#CCCCCC"></th>
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
                                echo "<td>";
                                echo "<td>{$r['price']}</td>";
                                echo "<td>";
                                echo "<td>{$r['img']}</td>";
                                echo "<td><a href='productedittemp.php?id={$r['id']}' target=_blank>Edit</a> | <a href='./controller/productcontrol.php?act=del&id={$r['id']}&img={$r['img']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table></th>
                    </tr>
                </table></th>
                </tr>
            </table>
            <p>&nbsp;</p></th>
            </tr>
        </table>
        <p>&nbsp;</p>
    </div>





    <?php
    $db->close();
    ?>
    <div></div>
</body>
</html>
