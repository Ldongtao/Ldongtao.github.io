<?php
@require_once("config.php");

$username = $_GET["username"];
$userpwd = $_GET["userpwd"];

$str = "SELECT * FROM userinfo WHERE type=1 and username='$username'";

$result = mysql_query($str);
$item = mysql_fetch_array($result);

$obj = array();

if($item){
    $existPwd = $item["userpwd"];
    if($existPwd == $userpwd){
        $obj["code"] = 1;
        $obj["msg"] = "登录成功";
        $obj["userid"] = $item["userid"];
    }else{
        $obj["code"] = 0;
        $obj["msg"] = "用户名和密码不匹配";
    }
}else{
    $obj["code"] = 0;
    $obj["msg"] = "用户名不存在";
}



echo json_encode($obj);

?>