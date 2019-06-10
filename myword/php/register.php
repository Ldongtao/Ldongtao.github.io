<?php
@require_once("config.php");

$username = $_GET["username"];
$useremail = $_GET["useremail"];
$userpwd = $_GET["userpwd"];

$str = "SELECT * FROM userinfo where username='$username'";

$result = mysql_query($str);

$item = mysql_fetch_array($result);

if($item[0]>1){
    $obj["code"] = 0;
    $obj["msg"] = "用户名已存在,请重新输入";
}else{
    $str = "INSERT INTO userinfo(username,useremail,userpwd) VALUES('$username','$useremail','$userpwd')";
    mysql_query($str);

    $count = mysql_affected_rows();
    if($count>0){
        $obj["code"] = 1;
        $obj["msg"] = "注册成功";
    }else{
        $obj["code"] = 0;
        $obj["msg"] = "注册失败";
    }
}

echo(json_encode($obj));

?>