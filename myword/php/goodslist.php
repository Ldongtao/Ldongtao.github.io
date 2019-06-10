<?php
@require_once("config.php");

// $key = $_GET["key"];
// $rank = $_GET["rank"];

// $skipnum = $_GET["skipnum"];
// $shownum = $_GET["shownum"];
$str = "select * from goodsinfo ";

$result = mysql_query($str);


$list = array();

while($item = mysql_fetch_array($result)) {
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsprice"] = $item["goodsprice"];

    $list[] = $temp;
}


echo json_encode($list);


?>