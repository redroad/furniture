<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
        <script src="/js/jquery-1.7.2.min.js"></script>
        <script src="/js/transfer.js"></script>
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
        </div><br />
        <br />
        <div>
            <table width="800px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image2">
                <tr>
                    <th align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th rowspan="2" align="left" valign="middle" scope="row">&nbsp;</th>
                                            <td align="center" valign="middle">&nbsp;</td>
                                            <td rowspan="2" align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle"><img src="images/transfer.png" width="407" height="86" /></td>
                                        </tr>
                                        <tr>
                                            <th align="left" valign="middle" scope="row">&nbsp;</th>
                                            <td align="left" valign="middle">&nbsp;</td>
                                            <td align="left" valign="middle">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" align="center" valign="top" scope="row"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                                    <tr>
                                                        <th width="30%" scope="row">&nbsp;</th>
                                                        <td width="17%">หมายเลขอ้างอิง</td>
                                                        <td width="53%"><form id="form3" name="form3" method="post" action="">
                                                                <input type="text" name="textfield" id="refid" placeholder="1234" />
                                                            </form></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">&nbsp;</th>
                                                        <td>วันที่ชำระเงิน</td>
                                                        <td><input type="text" name="textfield3" id="tdate" placeholder="2013/01/31" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">&nbsp;</th>
                                                        <td>เวลาที่ชำระเงิน</td>
                                                        <td><input type="text" name="textfield4" id="ttime" placeholder="24:55:30" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">&nbsp;</th>
                                                        <td>จำนวนเงิน</td>
                                                        <td><input type="text" name="textfield5" id="amount" placeholder="2500.75" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">&nbsp;</th>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <input type="button" name="button" id="save-btn" value="ยืนยันการชำระเงิน" style=" width:150px; height:50px;" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" scope="row"><h2><span style="color: #00F"><br />
                                                                    *  หรือ โทรแจ้งการชำระเงิน โดยตรง ได้ที่หมายเลข 089-665187</span><br />
                                                                <br />
                                                            </h2></th>
                                                    </tr>
                                                </table></th>
                                        </tr>
                                    </table></th>
                            </tr>
                        </table>
                        <p><img src="product/mm.jpg" width="100" height="107" /><br />
                        </p></th>
                </tr>
            </table>
        </div>
        <br /><br />
        <div align="center"> <font color="#FFFFFF">Copyright 2013. Furniture Design. All Rights Reserved. </font></div>
        <br /><br />
</html>