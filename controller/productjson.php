<?php

include './DBcontrol.php';
header('Content-type: application/json');
$db = new DBcontrol();
$db->connect();
$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";
if ($act == "getproduct") {
    $type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 1;
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $sql = "SELECT count(id) FROM product WHERE type_id=$type";
    $max = 5;
    $all = $db->query($sql);
    $all = $all[0][0];
    $start = ($page - 1) * $max;
    $pagecount = floor($all / $max) + 1;
    $sql = "SELECT * FROM product WHERE type_id=$type LIMIT $start,5";
    $rs = $db->query($sql);
    $result = array('pagecount' => $pagecount, 'page' => (int) $page, 'products' => $rs);
    echo json_encode($result);
}
if ($act == 'transfer') {
    $ref = $_REQUEST['refid'];
    $tdate = $_REQUEST['tdate'];
    $ttime = $_REQUEST['ttime'];
    $amount = floatval($_REQUEST['amount']);
    $now = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `transfer` (`ref`,`amount`, `date`, `time`, `status`, `create`) VALUES ('$ref',$amount, '$tdate', '$ttime', 'new', '$now');";

    $rs = $db->exec($sql);
    echo json_encode($rs);
}
if ($act == 'check') {
    $id = $_REQUEST['id'];
    $cid = $_REQUEST['cid'];
    $sql = "UPDATE `transfer` SET `status`='checked' WHERE  `id`=$id LIMIT 1;";
    $rs = $db->exec($sql);
    $sql = "UPDATE `cart` SET `status`='2' WHERE  `id`=$cid LIMIT 1;";
    $rs = $db->exec($sql);
    echo json_decode($rs);
}

if ($act == 'del-tlist') {
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM `transfer` WHERE  `id`=$id LIMIT 1;";
    $db->exec($sql);
    $rs = $db->exec($sql);
    echo json_decode($rs);
}
$db->close();
?>
