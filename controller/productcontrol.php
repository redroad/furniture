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
                $sql = "INSERT INTO `product` (`product_name`, `product_detail`, `price`, `img`, `type_id`) VALUES ('$name', '$detail', $price, '{$_FILES['file']['name']}', $type);";
                $db->exec($sql);
                echo "Stored in: " . $path . $_FILES["file"]["name"];
            }
        }
    } else {
        echo "Invalid file";
    }
}
if ($act == "del") {
    $id = $_REQUEST['id'];
    $img = $_REQUEST['img'];
    unlink("../product/" . $img);
    $sql = "DELETE FROM `product` WHERE  `id`=$id";
    $db->exec($sql);    
}
$db->close();
?>
