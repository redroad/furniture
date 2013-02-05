<?php
include './controller/DBcontrol.php';
$db = new DBcontrol();
$db->connect();
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
                table {
                    font-family: "MS Serif", "New York", serif;
                }
                table {
                    font-size: 12px;
                }
                table {
                    color: #666;
                }
                table {
                    color: #CCC;
                }
                table {
                    color: #960;
                }
                -->
            </style></head>

    <?php
    @session_start();
    if (empty($_SESSION['user']))
        header("Location:index.php");

    $list = isset($_REQUEST['list']) ? $_REQUEST['list'] : "";
    ?>
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
        </div>
        <br />
        <br />
        <table width="800px" height="287"  bgcolor="#FFFFFF" border="0" align="center" cellpadding="0" cellspacing="0"  class="round_image">
            <tr>
                <th height="240" align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                            <td align="center" valign="bottom"><img src="images/bk.png" width="279" height="86" /></td>
                            <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                            <td align="left" valign="middle">&nbsp;</td>
                            <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                            <th colspan="3" align="left" valign="top" scope="row"><table width="100%" border="0" cellspacing="3" cellpadding="0">
                                    <tr>
                                        <th scope="row"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <th align="center" valign="middle" bgcolor="#CCCCCC" scope="row">&nbsp;</th>
                                                    <th align="center" valign="middle" bgcolor="#CCCCCC" scope="row">รหัสสินค้า</th>
                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">ชื่อสินค้า</td>
                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">จำนวน</td>
                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">ราคา</td>
                                                </tr>
                                                <?php
                                                echo getProductlist($list);
                                                ?>
                                                <tr>
                                                    <th align="center" valign="middle" scope="row">&nbsp;</th>
                                                    <th align="left" valign="middle" scope="row">&nbsp;</th>
                                                    <td align="left" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <th align="center" valign="middle" scope="row">&nbsp;</th>
                                                    <th align="left" valign="middle" scope="row">&nbsp;</th>
                                                    <td align="left" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                    <td align="center" valign="middle">&nbsp;</td>
                                                </tr>
                                            </table></th>
                                    </tr>
                                </table></th>
                        </tr>
                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="center" valign="top">&nbsp;</td>
                        </tr>
                        <tr bgcolor="#CCCC99">
                            <td align="center" valign="top"><table width="100%" border="0" cellspacing="7" cellpadding="0">
                                    <tr>
                                        <td colspan="3" align="center" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="48%" align="right" valign="top">ชื่อ-สกุล</td>
                                        <td width="3%" rowspan="6" align="center" valign="top"><img src="product/left_line_dot (2).png" width="19" height="135" /></td>
                                        <td width="49%" align="left" valign="top"><?php echo $_SESSION['user']['name'] . " " . $_SESSION['user']['last_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">เบอร์โทรศัพท์</td>
                                        <td align="left" valign="top"><?php echo $_SESSION['user']['phone'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">อีเมล์</td>
                                        <td align="left" valign="top"><?php echo $_SESSION['user']['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">ที่อยู่</td>
                                        <td align="left" valign="top"><?php echo $_SESSION['user']['number'] . " " . $_SESSION['user']['village'] . " " . $_SESSION['user']['subdistrict'] . " " . $_SESSION['user']['district'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">จังหวัด</td>
                                        <td align="left" valign="top"><?php echo $_SESSION['user']['province'] ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">รหัสไปรษณีย์</td>
                                        <td align="left" valign="top"><?php echo $_SESSION['user']['zipcode'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center" valign="top">
                                            <form id="form1" name="form1" method="post" action="./controller/productcontrol.php?act=buy">
                                                <input type="hidden" name="list" value="<?php echo $list ?>"/>
                                                <input type="submit" name="button" id="button" value="ยืนยันการซื้อสินค้า" />
                                            </form>
                                            <form action="index.php" method="get">
                                                <input type="submit" name="button" id="button" value="เลือกสินค้าใหม่" />
                                            </form>
                                        </td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table></th>
            </tr>
            <tr>
                <th align="center" valign="top" scope="row">&nbsp;</th>
            </tr>
        </table>

        <br />
        <div align="center"> <font color="#FFFFFF">Copyright 2013. Furniture Design. All Rights Reserved. </font></div>
        <br />
</html>

<?php
$db->close();

function getProductlist($list) {
    $db = new DBcontrol();
    $db->connect();
    $lists = explode("|", $list);
    //var_dump($lists);
    $content = "";
    $line = "";
    $total = 0;
    foreach ($lists as $id) {
        if (!empty($id)) {
            $pid = (int) $id;
            $sql = "SELECT * FROM product WHERE id=$pid";
            $rs = $db->query($sql);
            $line = "<tr>";
            $line .="<th align = \"center\" valign = \"middle\" scope = \"row\">&nbsp;</th>";
            $line .="<th align = \"left\" valign = \"middle\" scope = \"row\">{$rs[0]['id']}</th>";
            $line .="<td align = \"left\" valign = \"middle\">{$rs[0]['product_name']}</td>";
            $line .="<td align = \"center\" valign = \"middle\">&nbsp;</td>";
            $line .="<td align = \"center\" valign = \"middle\">1</td>";
            $line .="<td align = \"center\" valign = \"middle\">{$rs[0]['price']}</td>";
            $line .="</tr>";
            $total += (int) $rs[0]['price'];
            $content .= $line;
        }
    }

    $line = "<tr>";
    $line .="<th align = \"center\" valign = \"middle\" scope = \"row\">&nbsp;</th>";
    $line .="<th align = \"left\" valign = \"middle\" scope = \"row\"></th>";
    $line .="<td align = \"left\" valign = \"middle\"></td>";
    $line .="<td align = \"center\" valign = \"middle\">&nbsp;</td>";
    $line .="<td align = \"center\" valign = \"middle\">รวม</td>";
    $line .="<td align = \"center\" valign = \"middle\">$total</td>";
    $line .="</tr>";
    $content .= $line;
    return $content;
}
?>