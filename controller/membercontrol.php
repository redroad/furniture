<?php

include 'DBcontrol.php';
header('Content-Type: application/json');
$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";
$db = new DBcontrol();
$db->connect();
if ($act == "register") {
    $displayname = isset($_REQUEST['display_name']) ? $_REQUEST['display_name'] : "";
    $birthdate = isset($_REQUEST['birthday']) ? $_REQUEST['birthday'] : "";
    $building = isset($_REQUEST['building']) ? $_REQUEST['building'] : "";
    $district = isset($_REQUEST['district']) ? $_REQUEST['district'] : "";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $re_email = isset($_REQUEST['re_email']) ? $_REQUEST['re_email'] : "";
    $firstname = isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : "";
    $floor = isset($_REQUEST['floor']) ? $_REQUEST['floor'] : "";
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
    $houseno = isset($_REQUEST['houseno']) ? $_REQUEST['houseno'] : "";
    $lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : "";
    $moo = isset($_REQUEST['moo']) ? $_REQUEST['moo'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    $re_password = isset($_REQUEST['re_password']) ? $_REQUEST['re_password'] : "";
    $province = isset($_REQUEST['province']) ? $_REQUEST['province'] : "";
    $road = isset($_REQUEST['road']) ? $_REQUEST['road'] : "";
    $room = isset($_REQUEST['room']) ? $_REQUEST['room'] : "";
    $soi = isset($_REQUEST['soi']) ? $_REQUEST['soi'] : "";
    $subdistrict = isset($_REQUEST['subdistrict']) ? $_REQUEST['subdistrict'] : "";
    $telephone = isset($_REQUEST['telephone']) ? $_REQUEST['telephone'] : "";
    $village = isset($_REQUEST['village']) ? $_REQUEST['village'] : "";
    $zipcode = isset($_REQUEST['zipcode']) ? $_REQUEST['zipcode'] : "";
    $result = array('success' => false, 'desc' => "");
    if (empty($displayname)
            || empty($firstname)
            || empty($lastname)
            || empty($email)
            || empty($password)
            || empty($gender)
            || empty($birthdate)) {
        echo "some * field is empty";
    } else if ($email != $re_email) {
        echo "email not match";
    } else if ($password != $re_password) {
        echo 'password not match';
    } else {
        $sql = "SELECT * FROM member WHERE email='$email'";
        $rs = $db->query($sql);
        if (empty($rs)) {
            $sql = "INSERT INTO `member` (`name_display`, `name`, `last_name`, `email`, `password`, `gender`, `birthdate`, `phone`, `number`, `room`, `floor`, `building`, `village`, `group`, `alley`, `road`, `subdistrict`, `district`, `province`, `zipcode`) VALUES ('$displayname', '$firstname', '$lastname', '$email', '" . md5($password) . "', '$gender', '$birthdate', '$telephone', '$houseno', '$room', '$floor', '$building', '$village', '$moo', '$soi', '$road', '$subdistrict', '$district', '$province', '$zipcode')";
            $db->exec($sql);
            $result['success'] = true;
            $result['desc'] = "success";
            echo "success";
            // sleep(10);
            // header('Location: ../index.php'); 
        } else {
            echo "duplicate email";
            $result['success'] = false;
            $result['desc'] = "duplicate email";
        }
    }

    //echo "<a href ='../index.php'>Home</a>";
    //  echo json_encode($result);
}

if ($act == "login") {

    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    $sql = "SELECT * FROM member WHERE email='$email'";
    $rs = $db->query($sql);
    $result = array("success" => false, "desc" => "", "data" => array());
    if (empty($rs)) {
        $result['desc'] = "email not found";
    } else {
        if (md5($password) != $rs[0]['password']) {
            $result['desc'] = "wrong password";
        } else {
            $result['success'] = TRUE;
            $result['desc'] = "success";
            $result['data'] = $rs[0];
            @session_start();
            $_SESSION['user'] = $rs[0];
            // var_dump($_SESSION['user']);
            //   header('Location: ../index.php');
        }
    }
    echo json_encode($result);
}

if ($act == "getMember") {
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
    $sql = "SELECT * FROM member WHERE id='$id'";
    $rs = $db->query($sql);
    $result = array("success" => false, "desc" => "", "data" => array());
    if (empty($rs)) {
        $result['desc'] = "user not found";
    } else {
        $result['success'] = TRUE;
        $result['desc'] = "success";
        $result['data'] = $rs[0];
    }
    echo json_encode($result);
}

if ($act == "update") {
    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
    $displayname = isset($_REQUEST['display_name']) ? $_REQUEST['display_name'] : "";
    $birthdate = isset($_REQUEST['birthday']) ? $_REQUEST['birthday'] : "";
    $building = isset($_REQUEST['building']) ? $_REQUEST['building'] : "";
    $district = isset($_REQUEST['district']) ? $_REQUEST['district'] : "";
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
    $re_email = isset($_REQUEST['re_email']) ? $_REQUEST['re_email'] : "";
    $firstname = isset($_REQUEST['firstname']) ? $_REQUEST['firstname'] : "";
    $floor = isset($_REQUEST['floor']) ? $_REQUEST['floor'] : "";
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
    $houseno = isset($_REQUEST['houseno']) ? $_REQUEST['houseno'] : "";
    $lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : "";
    $moo = isset($_REQUEST['moo']) ? $_REQUEST['moo'] : "";
    $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
    $re_password = isset($_REQUEST['re_password']) ? $_REQUEST['re_password'] : "";
    $province = isset($_REQUEST['province']) ? $_REQUEST['province'] : "";
    $road = isset($_REQUEST['road']) ? $_REQUEST['road'] : "";
    $room = isset($_REQUEST['room']) ? $_REQUEST['room'] : "";
    $soi = isset($_REQUEST['soi']) ? $_REQUEST['soi'] : "";
    $subdistrict = isset($_REQUEST['subdistrict']) ? $_REQUEST['subdistrict'] : "";
    $telephone = isset($_REQUEST['telephone']) ? $_REQUEST['telephone'] : "";
    $village = isset($_REQUEST['village']) ? $_REQUEST['village'] : "";
    $zipcode = isset($_REQUEST['zipcode']) ? $_REQUEST['zipcode'] : "";

    if (empty($displayname)
            || empty($firstname)
            || empty($lastname)
            || empty($email)
            || empty($password)
            || empty($gender)
            || empty($birthdate)) {
        echo "some * field is empty";
    } else if ($email != $re_email) {
        echo "email not match";
    } else if ($password != $re_password) {
        echo 'password not match';
    } else {
        $sql = "SELECT * FROM member WHERE email='$email'";
        $rs = $db->query($sql);
        if (empty($rs)) {
            $sql = "UPDATE `member` SET `name_display`='$displayname', `name`='$firstname', `last_name`='$lastname', `email`='$email', `password`='" . md5($password) . "', `gender`='$gender', `birthdate`='$birthdate', `phone`='$telephone', `number`='$houseno', `room`='$room', `floor`='$floor', `building`='$building', `village`='$village', `group`='$moo', `alley`='$soi', `road`='$road', `subdistrict`='$subdistrict', `district`='$district', `province`='$province', `zipcode`='$zipcode' WHERE  `id`=$id LIMIT 1";
            $db->exec($sql);
            $result['success'] = true;
            $result['desc'] = "success";
            echo "success";
        } else {
            echo "duplicate email";
            $result['success'] = false;
            $result['desc'] = "duplicate email";
        }
    }
}

if ($act == "logout") {
    @session_start();
    session_destroy();
    header('Location: ../index.php');    
}

$db->close();
?>
