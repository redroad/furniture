<?php
include './controller/DBcontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />

        <title>:: FD :: USER</title>
        <style type="text/css">
            <!--
            .style3 {	font-size: medium;
                      text-align: left;
            }
            #MenuList {	font-weight: bold;
            }
            table {
                font-size: 12px;
            }
            .style3 a {
                font-size: 12px;
            }
            -->
        </style>
        <style type="text/css">
            .round_image1 {-webkit-border-radius: 10px;
                           -moz-border-radius: 10px;
                           border-radius: 10px;
                           -webkit-box-shadow: #000 0 2px 10px;
                           -moz-box-shadow: #000 0 2px 10px;
                           box-shadow: #000 0 2px 10px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.1/build/cssfonts/cssfonts-min.css">
            <style type="text/css">
                <!--
                body {
                    background:#333 url(bg.jpg) repeat top left;
                    background-attachment:fixed;
                    background-color: #999;
                    background-image: url(bg.jpg);
                }
                .round_image {-webkit-border-radius: 10px;
                              -moz-border-radius: 10px;
                              border-radius: 10px;
                              -webkit-box-shadow: #000 0 2px 10px;
                              -moz-box-shadow: #000 0 2px 10px;
                              box-shadow: #000 0 2px 10px;
                }
                .round_image2 {-webkit-border-radius: 10px;
                               -moz-border-radius: 10px;
                               border-radius: 10px;
                               -webkit-box-shadow: #000 0 2px 10px;
                               -moz-box-shadow: #000 0 2px 10px;
                               box-shadow: #000 0 2px 10px;
                }
                -->
            </style></head>

    <body leftmargin="0" topmargin="0">

        <div>
            <ul class="menu" >

                <li><a href="#" class="active"><span>::</span></a></li>
                <li><a  href="user_transfer.php" target="_parent"><span>ยืนยันการโอนเงิน</span></a></li>
                <li><a href="user_report.php" target="_parent"><span>รายการซื้อขายทั้งหมด</span></a></li>
                <li><a href="user_Basket.php" target="_parent"><span>ตระกร้าสินค้า</span></a></li>
                <li><a href="index.php" target="_parent"><span>หน้าแรก</span></a></li>
                <li><a href="#"><span>::</span></a></li>

            </ul>
        </div><br /><br />
        <div>
            <table width="800px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image">
                <tr>
                    <th align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                                            <td align="center" valign="middle"><img src="images/p_report.png" width="407" height="86" /></td>
                                            <td align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                                            <td align="left" valign="middle">&nbsp;</td>
                                            <td align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" align="center" valign="top" scope="row"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                                                    <tr>
                                                        <th scope="row"><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
                                                                <tr id="MenuList2">
                                                                    <td width="7%" align="center" valign="middle" bgcolor="#CCCCCC" id="list2">ชื่อลูกค้า</td>
                                                                    <td width="15%" align="center" valign="middle" bgcolor="#CCCCCC">วันที่</td>
                                                                    <td width="11%" align="center" valign="middle" bgcolor="#CCCCCC">รายการสินค้า</td>
                                                                    <td width="8%" align="center" valign="middle" bgcolor="#CCCCCC">จำนวนเงิน</td>
                                                                    <td width="4%" align="center" valign="middle" bgcolor="#CCCCCC">สถานะ</td>
                                                                </tr>                                                                
                                                                <?php
                                                                $rs = getbuyList();
                                                                $current = 0;
                                                                $counter = 1;
                                                                $p = "";
                                                                $old = "";
                                                                $tp = 0;
                                                                foreach ($rs as $r) {
                                                                    if ($r['cid'] != $current) {
                                                                        if ($counter != 1) {
                                                                            echo "<td align = \"left\" valign = \"middle\">$p</td>";
                                                                            echo "<td align = \"left\" valign = \"middle\">$tp</td>";
                                                                            echo "<td align = \"center\" valign = \"middle\">{$r['status']}</td>";
                                                                            echo "</tr>";
                                                                            $p = "";
                                                                            $tp = 0;
                                                                        }
                                                                        echo "<tr>";
                                                                        echo "<td align = \"left\" valign = \"middle\">{$r['name_display']}</td>";
                                                                        echo "<td align = \"left\" valign = \"middle\">{$r['order_date']}</td>";
                                                                        $p .= $r['product_name'] . ", ";
                                                                        $tp = $r['total_price'];
                                                                    } else {
                                                                        $p .= $r['product_name'] . ", ";
                                                                        $tp = $r['total_price'];
                                                                    }

                                                                    $current = $r['cid'];
                                                                    $counter++;
                                                                }
                                                                echo "<td align = \"left\" valign = \"middle\">$p</td>";
                                                                echo "<td align = \"left\" valign = \"middle\">$tp</td>";
                                                                echo "<td align = \"center\" valign = \"middle\">{$r['status']}</td>";
                                                                echo "</tr>";
                                                                ?>
                                                            </table></th>
                                                    </tr>
                                                </table></th>
                                        </tr>
                                    </table></th>
                            </tr>
                        </table>	        <p>&nbsp;</p></th>
                </tr>
            </table>
        </div> <br />
        <div align="center"> <font color="#FFFFFF">Copyright 2013. Furniture Design. All Rights Reserved. </font></div>
        <br /><br />
</html>
<?php

function getbuyList() {
    @session_start();
    $id = $_SESSION['user']['id'];
    $db = new DBcontrol();
    $db->connect();
    $sql = "SELECT *,c.id AS cid FROM cart AS c";
    $sql .= " INNER JOIN member AS m ON c.member_id = m.id";
    $sql .= " INNER JOIN mapping_cart_product AS mcp ON c.id = mcp.cart_id";
    $sql .= " INNER JOIN product AS p ON mcp.produc_id = p.id";
    $sql .= " INNER JOIN order_status AS os ON c.`status` = os.id";
    $sql .= " WHERE m.id = $id";
    $sql .= " ORDER BY c.id DESC";
    $rs = $db->query($sql);
    $db->close();
    return $rs;
}
?>