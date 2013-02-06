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
</div><br /><br />
<div>
  <table width="800px" height="450px" border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF"  class="round_image">
      <tr>
        <th align="center" valign="top" scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th scope="row"><table width="800" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th align="left" valign="middle" scope="row">&nbsp;</th>
                <td align="center" valign="middle"><img src="images/P_member.png" width="407" height="86" /></td>
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
                    <th scope="row"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                      <tr id="MenuList3">
                        <td width="30%" align="center" valign="middle" bgcolor="#999999" id="list3">ชื่อลูกค้า</td>
                        <td width="42%" align="center" valign="middle" bgcolor="#999999">e-mail</td>
                        <td width="28%" align="center" valign="middle" bgcolor="#999999">เบอร์โทร</td>
                      </tr>
                       </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM member";
                            $rs = $db->query($sql);
                            foreach ($rs as $r) {
                                echo "<tr>";
                               echo "<td>{$r['name_display']}</td>";
                               echo "<td>{$r['email']}</td>";
                               echo "<td>{$r['phone']}</td>";
                               
                            }
                            ?>
                        </tbody>
                    </table></th>
                      <tr>
                        <td align="center" valign="middle" bgcolor="#999999" id="list">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#999999">&nbsp;</td>
                        <td align="center" valign="middle" bgcolor="#999999">&nbsp;</td>
                      </tr>
                    </table></th>
                  </tr>
                </table></th>
              </tr>
            </table></th>
          </tr>
        </table>
          <p>&nbsp;</p></th>
      </tr>
    </table>
</div>
<br />
<div align="center"> <font color="#FFFFFF">Copyright 2013. Furniture Design. All Rights Reserved. </font></div>
<br />

</body>
</html>