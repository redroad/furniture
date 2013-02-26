<?php
include './controller/DBcontrol.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
        <script src="/js/jquery-1.7.2.min.js"></script>
        <script src="/js/transfer.js"></script>
        <title>:: FD :: Admin</title>
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

                <li><a href="administrator_Management.php" target="_parent"><span>Management</span></a></li>
                <li><a href="index.php" target="_parent"><span>หน้าแรก</span></a></li>
                <li><a href="#"><span>::</span></a></li>

            </ul>
        </div><br />
        <br />
        <div>
            <table width="800px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image">
                <tr>
                    <th align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                                            <td align="center" valign="middle"><img src="images/P_pay.png" width="407" height="86" /></td>
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
                                                        <th scope="row">
                                                            <table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="#CCCCCC">
                                                                <tr id="MenuList2">
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC" id="list2">วันที่แจ้ง</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">หมายเลขอ้างอิง</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">วันที่โอน</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">เวลา</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">จำนวน</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC">สถานะ</td>
                                                                    <td align="center" valign="middle" bgcolor="#CCCCCC"></td>
                                                                </tr>
                                                                <?php
                                                                $list = getTlist();
                                                                foreach ($list as $l) {
                                                                    echo "<tr id = \"MenuList2\">";
                                                                    echo "<td align = \"center\" valign = \"middle\"  id = \"list2\">{$l['create']}</td>";
                                                                    echo "<td align = \"center\" valign = \"middle\" >{$l['ref']}</td>";
                                                                    echo "<td align = \"center\" valign = \"middle\" >{$l['date']}</td>";
                                                                    echo "<td align = \"center\" valign = \"middle\" >{$l['time']}</td>";
                                                                    echo "<td align = \"center\" valign = \"middle\" >{$l['amount']}</td>";
                                                                    echo "<td align = \"center\" valign = \"middle\" >{$l['status']}</td>";
                                                                    echo "<td bgcolor = \"#CCCCCC\">";
                                                                    if ($l['status'] == 'new')
                                                                        echo "<input type='button' class='check-tlist' pk={$l['id']} cid={$l['ref']} value='Check'\>";
                                                                    echo "<input type=\"button\" class='remove-tlist' pk={$l['id']}  value='del'\></td>";
                                                                    echo "</tr>";
                                                                }
                                                                ?>
                                                            </table>
                                                        </th>
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
        <br />

    </body>
</html>
<?php

function getTlist() {
    $db = new DBcontrol();
    $db->connect();
    $sql = "SELECT * FROM transfer t order by t.`create` DESC";
    $rs = $db->query($sql);
    $db->close();
    return $rs;
}
?>