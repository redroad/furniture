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
    $result = array('pagecount' => $pagecount, 'page' => (int)$page, 'products' => $rs);
    echo json_encode($result);
}
?>
