<?php
@require_once("config.php");
$userid= $_GET["userid"];

$str = "SELECT sum(num) as sum FROM myshopcar where userid=$userid";

$result =mysql_query($str);//执行sql语句

$item = mysql_fetch_array($result);

$obj =array();


$obj["code"]=1;
$obj["sum"]= $item["sum"];


echo json_encode($obj);

?>