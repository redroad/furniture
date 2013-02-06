<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>:: Furniture Design :: </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content=":: Furniture Design ::" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
        <script src="./js/jquery-1.7.2.min.js"></script>
        <script src="./js/index.js"></script>
        <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    <style type="text/css">
            <!--
            body {
                margin-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
            }
            -->
        </style>

        <style>
            body{
                background:#333 url(bg.jpg) repeat top left;
                background-attachment:fixed;
                font-family:Arial;
                background-image: url(bg.jpg);
                background-color: #333;
            }
            span.reference{
                position:fixed;
                left:10px;
                bottom:10px;
                font-size:12px;
            }
            span.reference a{
                color:#aaa;
                text-transform:uppercase;
                text-decoration:none;
                text-shadow:1px 1px 1px #000;
                margin-right:30px;
            }
            span.reference a:hover{
                color:#ddd;
            }
            ul.sdt_menu{
                margin-top:100px;

            }
            h1.title{
                text-indent:-9000px;
                background:transparent url(title.png) no-repeat top left ;

                width:633px;
                height:69px;
            }
            body,td,th {
	color: #C60;
	font-family: "MS Serif", "New York", serif;
	font-size: medium;
            }
            #apDiv1 {
                position:absolute;
                left:585px;
                top:37px;
                width:403px;
                height:32px;
                z-index:1;
            }
            #apDiv2 {
                position:absolute;
                left:867px;
                top:47px;
                width:63px;
                height:29px;
                z-index:2;
            }
            #apDiv3 {
                position:absolute;
                left:1039px;
                top:57px;
                width:207px;
                height:36px;
                z-index:2;
            }
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

            #apDiv1 #form1 .round_image tr td table tr td {
                font-family: "ms Sans Serif";
                font-size: 12px;
            }
            #product table tr th table tr th table tr th table tr th {
                color: #000;
            }
            #product table tr th table tr th table tr th table tr td table tr td {
                font-family: Tahoma, Geneva, sans-serif;
                font-size: small;
            }
            #name {font-family: "times New Roman";
            }
            .round_image1 {-webkit-border-radius: 10px;
                           -moz-border-radius: 10px;
                           border-radius: 10px;
                           -webkit-box-shadow: #000 0 2px 10px;
                           -moz-box-shadow: #000 0 2px 10px;
                           box-shadow: #000 0 2px 10px;
            }
            .round_image tr th table tr td table tr th {
                font-weight: bold;
                color: #000;
            }
            #MenuList {	font-weight: bold;
            }
            #bill {
                font-weight: bold;
                color: #03F;
                text-align: center;
            }
            #list {	color: #000;
            }
            #list table {
                color: #000;
            }
            #list table #MenuList td {
                color: #000;
            }
            .round_image2 {-webkit-border-radius: 10px;
                           -moz-border-radius: 10px;
                           border-radius: 10px;
                           -webkit-box-shadow: #000 0 2px 10px;
                           -moz-box-shadow: #000 0 2px 10px;
                           box-shadow: #000 0 2px 10px;
            }
            .sibLockedMenu {	position:	fixed;
                             top:	80px;
                             right:5px;


                             padding:		5px;
                             width:		210px;
            }
            .round_image tr th table tr th table {
                font-family: "ms Sans Serif";
            }
            .round_image tr th table tr th table {
                font-size: small;
            }
            .round_image3 {-webkit-border-radius: 10px;
                           -moz-border-radius: 10px;
                           border-radius: 10px;
                           -webkit-box-shadow: #000 0 2px 10px;
                           -moz-box-shadow: #000 0 2px 10px;
                           box-shadow: #000 0 2px 10px;
            }
            .round_image3 tr th table tr th table {
                color: #000;
                text-align: left;
            }
            .round_image tr th table tr th table tr th {
                font-size: small;
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
            .round_image312 {-webkit-border-radius: 10px;
                             -moz-border-radius: 10px;
                             border-radius: 10px;
                             -webkit-box-shadow: #000 0 2px 10px;
                             -moz-box-shadow: #000 0 2px 10px;
                             box-shadow: #000 0 2px 10px;
            }
            div {
                color: #FFF;
            }
            .round_image3121 {-webkit-border-radius: 10px;
                              -moz-border-radius: 10px;
                              border-radius: 10px;
                              -webkit-box-shadow: #000 0 2px 10px;
                              -moz-box-shadow: #000 0 2px 10px;
                              box-shadow: #000 0 2px 10px;
            }
            .style3 {font-size: medium;
                     text-align: left;
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            a:hover {
                text-decoration: none;
            }
            a:active {
                text-decoration: none;
            }
        </style>
        <style type=”text/css”>
            .login{
                position:absolute;
                right:a;
                top:100px;

            }
        </style>
        <script type="text/javascript">
            <!--
            function MM_swapImgRestore() { //v3.0
                var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
            }
            function MM_preloadImages() { //v3.0
                var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                        if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
                }

                function MM_findObj(n, d) { //v4.01
                    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
                    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
                    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
                    if(!x && d.getElementById) x=d.getElementById(n); return x;
                }

                function MM_swapImage() { //v3.0
                    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
                    if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
                }
                //-->
        </script>
    </head>


    <body onload="MM_preloadImages('images/black1.png','images/next1.png')">
        <?php
        @session_start();
        if (isset($_SESSION['user']))
            //var_dump($_SESSION['user']);

        //  session_destroy();
        ?>
        <div>
            <ul class="menu" >

                <li><a href="#" class="active"><span>::</span></a></li>
                <li><a href="contact" target="_parent"><span>ติดต่อเรา  </span></a></li>

                <li><a href="payment.php" target="_parent"><span>การชำระเงิน</span></a></li>
                <li><a href="howbuy.php" target="_parent"><span>วิธีการสั่งซื้อ</span></a></li>
                <li><a href="index.php" target="_parent"><span>หน้าแรก</span></a></li>
                <li><a href="#"><span>::</span></a></li>

            </ul>
        </div>
        <div class="content">
            <h1 class="title">Furniture Design.</a></h1>
            <div class="sibLockedMenu">
                <table width="171" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th align="right" valign="top" scope="row"><table background="product/banner_rigth.png" width="158" height="34px" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <th align="center" valign="middle" scope="row" ><?php echo!empty($_SESSION['user']['name_display']) ? "<a href='./controller/membercontrol.php?act=logout'>" . $_SESSION['user']['name_display'] . "</a>" : "<a href=\"login.php\">เข้าสู่ระบบ</a>"; ?></th>
                                    <input type="hidden" id="uid" value="<?php echo!empty($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 0; ?>">
                                </tr>
                            </table></th>

                        <th scope="row"><img src="product/bank.png" width="13" height="34" /></th>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <th scope="row">&nbsp;</th>
                    </tr>
                    <tr>
                        <th valign="top" bgcolor="#FFFFFF" scope="row"><a href="#"><img id="go-to-cart" src="images/bk_show.png" alt="" width="212" height="58" /></a></th>
                        <th scope="row">&nbsp;</th>
                    </tr>
                    <tr>
                        <th valign="top" bgcolor="#FFFFFF" scope="row">มีสินค้าทั้งหมด (<label id="take-count">0</label>)</th>
                        <th scope="row">&nbsp;</th>
                    </tr>
                </table>
            </div>
            <ul id="sdt_menu" class="sdt_menu">
                <li class="product-type-select" tid="1">
                    <a href="#">
                        <img src="images/2.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Chair</span>
                            <span class="sdt_descr">เก้าอี้</span>
                        </span>
                    </a>
                </li>
                <li class="product-type-select" tid="2">
                    <a href="#">
                        <img src="images/1.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Cot</span>
                            <span class="sdt_descr">เตียงนอน</span>
                        </span>
                    </a>

                </li>
                <li class="product-type-select" tid="3">
                    <a href="#">
                        <img src="images/3.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Table</span>
                            <span class="sdt_descr">โต๊ะ</span>
                        </span>
                    </a>
                </li>
                <li class="product-type-select" tid="4">
                    <a href="#">
                        <img src="images/4.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Sofa</span>
                            <span class="sdt_descr">โซฟา</span>
                        </span>
                    </a>
                </li>
                <li class="product-type-select" tid="5">
                    <a href="#">
                        <img src="images/5.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Wardrobe</span>
                            <span class="sdt_descr">ตู้เสื้อผ้า</span>
                        </span>
                    </a>
                </li>
                <li class="product-type-select" tid="6">
                    <a href="#">
                        <img src="images/6.jpg" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Showcase</span>
                            <span class="sdt_descr">ตู้โชว์</span>
                        </span>
                    </a>

                </li>
            </ul>
        </div>


        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
                $(function() {
                    /**
                     * for each menu element, on mouseenter, 
                     * we enlarge the image, and show both sdt_active span and 
                     * sdt_wrap span. If the element has a sub menu (sdt_box),
                     * then we slide it - if the element is the last one in the menu
                     * we slide it to the left, otherwise to the right
                     */
                    $('#sdt_menu > li').bind('mouseenter',function(){
                        var $elem = $(this);
                        $elem.find('img')
                        .stop(true)
                        .animate({
                            'width':'170px',
                            'height':'170px',
                            'left':'0px'
                        },400,'easeOutBack')
                        .andSelf()
                        .find('.sdt_wrap')
                        .stop(true)
                        .animate({'top':'140px'},500,'easeOutBack')
                        .andSelf()
                        .find('.sdt_active')
                        .stop(true)
                        .animate({'height':'170px'},300,function(){
                            var $sub_menu = $elem.find('.sdt_box');
                            if($sub_menu.length){
                                var left = '170px';
                                if($elem.parent().children().length == $elem.index()+1)
                                    left = '-170px';
                                $sub_menu.show().animate({'left':left},200);
                            }	
                        });
                    }).bind('mouseleave',function(){
                        var $elem = $(this);
                        var $sub_menu = $elem.find('.sdt_box');
                        if($sub_menu.length)
                            $sub_menu.hide().css('left','0px');
					
                        $elem.find('.sdt_active')
                        .stop(true)
                        .animate({'height':'0px'},300)
                        .andSelf().find('img')
                        .stop(true)
                        .animate({
                            'width':'0px',
                            'height':'0px',
                            'left':'85px'},400)
                        .andSelf()
                        .find('.sdt_wrap')
                        .stop(true)
                        .animate({'top':'25px'},500);
                    });
                });
        </script>

        <table width="900px" border="0" align="center" cellpadding="0" cellspacing="0" >
            <tr>
                <th colspan="0" align="left" valign="top" scope="row"><table width="900" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <th colspan="0" align="left" valign="top" scope="row"><table width="900" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <th colspan="0" align="left" valign="top" scope="row">


                                            <table width="900" height="300"  border="0" align="center" cellpadding="0" cellspacing="0"  bgcolor="#FFFFFF" class="round_image">
                                                <tr>
                                                    <th scope="row">
                                                        <table width="900" border="0" align="center" cellpadding="0" cellspacing="5">
                                                            <tr>
                                                                <th scope="row">&nbsp;</th>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td align="right" valign="middle"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image19','','images/black1.png',1)"><label class="backbtn"><img src="images/black.png" width="70" height="14" border="0" id="Image19" /></label>&nbsp;</a><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image20','','images/next1.png',1)"><label class="nextbtn"><img src="images/next.png" width="70" height="14" border="0" id="Image20" /></label></a></td>
                                                            </tr>
                                                            <tr class="product-img">
                                                                <th align="left" valign="middle" scope="row"><img src="product/001007.jpg" width="180" height="180" /></th>
                                                                <th align="left" valign="middle" scope="row"><img src="product/110005918.jpg" width="180" height="180" /></th>
                                                                <th align="left" valign="middle" scope="row"><img src="product/001004.jpg" width="180" height="180" /></th>
                                                                <th align="left" valign="middle" scope="row"><img src="product/001006.jpg" width="180" height="180" /></th>
                                                                <th align="left" valign="middle" scope="row"><img src="product/001005.jpg" width="180" height="180" /></th>
                                                            </tr>
                                                            <tr class="product-name">
                                                                <th align="right" valign="middle" scope="row">ชื่อ</th>
                                                                <th align="right" valign="middle" scope="row">ชื่อ</th>
                                                                <th align="right" valign="middle" scope="row">ชื่อ</th>
                                                                <th align="right" valign="middle" scope="row">ชื่อ</th>
                                                                <th align="right" valign="middle" scope="row">ชื่อ</th>
                                                            </tr>
                                                            <tr class="product-price">
                                                                <th align="right" valign="middle" scope="row">ราคา</th>
                                                                <th align="right" valign="middle" scope="row">ราคา</th>
                                                                <th align="right" valign="middle" scope="row">ราคา</th>
                                                                <th align="right" valign="middle" scope="row">ราคา</th>
                                                                <th align="right" valign="middle" scope="row">ราคา</th>
                                                            </tr>
                                                            <tr class="product-take">
                                                                <th align="right" valign="middle" scope="row">
                                                                    <table width="120" border="0" align="center" cellpadding="0" cellspacing="2">
                                                                        <tr>
                                                                            <th width="14" bgcolor="#FF0000" scope="row">&nbsp;</th>
                                                                            <td width="106" align="center" valign="top" bgcolor="#212121">หยิบใส่ตระกร้า</td>
                                                                        </tr>
                                                                    </table>
                                                                </th>
                                                                <th align="right" valign="middle" scope="row"><table width="120" border="0" cellpadding="0" cellspacing="2">
                                                                        <tr>
                                                                            <th bgcolor="#FF0000" scope="row">&nbsp;</th>
                                                                            <td align="center" valign="top" bgcolor="#212121">หยิบใส่ตระกร้า</td>
                                                                        </tr>
                                                                    </table></th>
                                                                <th align="right" valign="middle" scope="row"><table width="120" border="0" cellpadding="0" cellspacing="2">
                                                                        <tr>
                                                                            <th bgcolor="#FF0000" scope="row">&nbsp;</th>
                                                                            <td align="center" valign="top" bgcolor="#212121">หยิบใส่ตระกร้า</td>
                                                                        </tr>
                                                                    </table></th>
                                                                <th align="right" valign="middle" scope="row"><table width="120" border="0" cellpadding="0" cellspacing="2">
                                                                        <tr>
                                                                            <th bgcolor="#FF0000" scope="row">&nbsp;</th>
                                                                            <td align="center" valign="top" bgcolor="#212121">หยิบใส่ตระกร้า</td>
                                                                        </tr>
                                                                    </table></th>
                                                                <th align="right" valign="middle" scope="row"><table width="120" border="0" cellpadding="0" cellspacing="2">
                                                                        <tr>
                                                                            <th bgcolor="#FF0000" scope="row">&nbsp;</th>
                                                                            <td align="center" valign="top" bgcolor="#212121">หยิบใส่ตระกร้า</td>
                                                                        </tr>
                                                                    </table></th>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                </tr>
                                            </table></th>
                                    </tr>
                                </table></th>
                        </tr>
                    </table></th>
            </tr>
        </table>
        <br /><br />
        <div  >
            <table width="650" height="420"  bgcolor="#FFFFFF" border="0" align="center" cellpadding="0" cellspacing="0"  class="round_image">
                <tr>
                    <th align="left" valign="top" scope="row"><img src="images/demo.png" alt="" width="178" height="48" /></th>
                </tr>
                <tr>
                  <th align="center" valign="top" scope="row"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="550" height="400">
                    <param name="movie" value="desing/New folder/เตียวนอน.swf" />
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="swfversion" value="6.0.65.0" />
                    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="desing/New folder/เตียวนอน.swf" width="550" height="400">
                      <!--<![endif]-->
                      <param name="quality" value="high" />
                      <param name="wmode" value="opaque" />
                      <param name="swfversion" value="6.0.65.0" />
                      <param name="expressinstall" value="Scripts/expressInstall.swf" />
                      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                      <div>
                        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                      </div>
                      <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                  </object></th>
                </tr>
                <tr>
                  <th align="center" valign="top" scope="row"><a href="bed.php">ทดลองใช้ Demo Desing &gt;&gt;</a></th>
                </tr>
                <tr>
                  <th align="center" valign="top" scope="row">&nbsp;</th>
                </tr>
            </table>
        </div>
        <br />
        <br />

        <br />


        <div align="center">Copyright 2013. Furniture Design. All Rights Reserved. </div>
    <script type="text/javascript">
swfobject.registerObject("FlashID");
        </script>
    </body>
</html>