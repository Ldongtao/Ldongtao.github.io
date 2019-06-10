<?php
@require_once("config.php");

$id = $_GET["id"];

$str = "select * from goodsinfo WHERE id=$id";

$result = mysql_query($str);
$list = array();

while($item = mysql_fetch_array($result)){
    $temp = array();

    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsmallimg"] = $item["goodsmallimg"];
    $temp["goodsbigimg"] = $item["goodsbigimg"];
    $temp["goodsprice"] = $item["goodsprice"];

    $list[] = $temp;

}

echo json_encode($list);


?>