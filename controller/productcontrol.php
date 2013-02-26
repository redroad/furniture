<?php

include 'DBcontrol.php';
$db = new DBcontrol();
$db->connect();
$act = $_REQUEST['act'];
if ($act == 'add') {
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
    $detail = isset($_REQUEST['detail']) ? $_REQUEST['detail'] : "";
    $price = isset($_REQUEST['price']) ? $_REQUEST['price'] : "";
    $type = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
    $available = isset($_REQUEST['available']) ? $_REQUEST['available'] : 0;


    $path = "../product/";
    $allowedExts = array("jpg", "jpeg", "gif", "png");
    $lists = explode(".", $_FILES["file"]["name"]);
    $extension = end($lists);
    if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg")
            || ($_FILES["file"]["type"] == "image/png")
            || ($_FILES["file"]["type"] == "image/pjpeg"))
            && ($_FILES["file"]["size"] < 2000000)
            && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        } else {
            echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

            if (file_exists($path . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $path . $_FILES["file"]["name"]);
                $sql = "INSERT INTO `product` (`product_name`, `product_detail`, `price`, `img`, `type_id`,`available`) VALUES ('$name', '$detail', $price, '{$_FILES['file']['name']}', $type,$available);";
                $db->exec($sql);
                echo "Stored in: " . $path . $_FILES["file"]["name"];
            }
        }
    } else {
        echo "Invalid file";
    }
    @header('Location:../producttemp.php');
}
if ($act == "del") {
    $id = $_REQUEST['id'];
    $img = $_REQUEST['img'];
    unlink("../product/" . $img);
    $sql = "DELETE FROM `product` WHERE  `id`=$id";
    $db->exec($sql);
    @header('Location:../producttemp.php');
}

if ($act == "update") {
    $id = isset($_REQUEST['pid']) ? $_REQUEST['pid'] : 0;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
    $detail = isset($_REQUEST['detail']) ? $_REQUEST['detail'] : "";
    $price = isset($_REQUEST['price']) ? $_REQUEST['price'] : "";
    $type = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
    $oldimg = isset($_REQUEST['oldimg']) ? $_REQUEST['oldimg'] : "";
    if (!empty($_FILES['file']['name'])) {
        $path = "../product/";
        unlink($path . $oldimg);
        $allowedExts = array("jpg", "jpeg", "gif", "png");
        $lists = explode(".", $_FILES["file"]["name"]);
        $extension = end($lists);
        if ((($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/pjpeg"))
                && ($_FILES["file"]["size"] < 2000000)
                && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                echo "Type: " . $_FILES["file"]["type"] . "<br>";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

                if (file_exists($path . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], $path . $_FILES["file"]["name"]);
                    $sql = "UPDATE `product` SET `img`='{$_FILES['file']['name']}' WHERE  `id`=$id LIMIT 1;";
                    $db->exec($sql);
                    echo "Stored in: " . $path . $_FILES["file"]["name"];
                }
            }
        } else {
            echo "Invalid file";
        }
    }
    $sql = "UPDATE `product` SET `product_name`='$name', `product_detail`='$detail', `price`=$price, `type_id`=$type WHERE  `id`=$id";
    echo $sql;
    $db->exec($sql);
}

if ($act == 'buy') {
    @session_start();
    $list = $_REQUEST['list'];
    $uid = $_SESSION['user']['id'];
    $lists = explode("|", $list);
    $day = date("Y-m-d");
    $sql = "INSERT INTO `cart` (`member_id`, `order_date`, `status`) VALUES ($uid, '$day', '1')";
    echo $sql . "\n";
    $db->exec($sql);
    $sql = "select last_insert_id()";
    $cid = $db->query($sql);
    $cid = $cid[0][0];
    $total = 0;
    foreach ($lists as $id) {
        if (!empty($id)) {
            $pid = (int) $id;
            $sql = "SELECT * FROM product WHERE id=$pid";
            echo $sql . "\n";
            $rs = $db->query($sql);
            $total += $rs[0]['price'];
            $sql = "INSERT INTO `mapping_cart_product` (`cart_id`, `produc_id`, `take`) VALUES ($cid, {$rs[0]['id']}, 1);";
            echo $sql . "\n";
            $db->exec($sql);
        }
    }
    echo $total;
    $sql = "UPDATE `cart` SET `total_price`=$total WHERE  `id`=$cid LIMIT 1;";
    $db->exec($sql);
    @header("Location:../user_report.php");
}

if ($act = 'shipping') {
    $id = $_REQUEST['id'];
    $sql = "UPDATE `cart` SET `status`='3' WHERE  `id`=$id LIMIT 1;";
    $db->exec($sql);
}
if ($act = 'cancel-product') {
    $id = $_REQUEST['id'];
    $sql = "UPDATE `cart` SET `status`='4' WHERE  `id`=$id LIMIT 1;";
    $db->exec($sql);
}
$db->close();
?>