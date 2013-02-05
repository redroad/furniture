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
		<link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />

        <title></title>

        <style type="text/css">
            <!--
            a {
                font-family: ms Sans Serif;
                font-size: 12px;
            }
            body,td,th {
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
<body leftmargin="0" topmargin="0">
            <div>
              <ul class="menu" >
                <li><a href="#" class="active"><span>::</span></a></li>
                <li><a href="administrator_Management.php" target="_parent"><span>Management</span></a></li>
                <li><a href="index.php" target="_parent"><span>หน้าแรก</span></a></li>
                <li><a href="#"><span>::</span></a></li>
                <br>
              </ul>
            </div>
<div class="product-view">
    <p>&nbsp;</p>
    <table width="1000px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image311">
            <tr>
                <th align="center" valign="top" scope="row"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th align="left" valign="middle" scope="row"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                    <tr>
                        <th align="center" valign="top" scope="row"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="center" valign="top"><img src="images/P_report_pro.png" width="407" height="86"></td>
                          </tr>
                          <tr>
                            <td align="center" valign="top"><table width="100%" align="center">
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
                                echo "<td>{$r['type_id']}</td>";
                                echo "<td>{$r['available']}</td>";								
                                echo "<td>{$r['price']}</td>";
                                echo "<td>{$r['img']}</td>";
                                echo "<td><a href='productedittemp.php?id={$r['id']}' target=_blank>Edit</a> | <a href='./controller/productcontrol.php?act=del&id={$r['id']}&img={$r['img']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                              </tbody>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
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
