<?php
@require_once("config.php");

$userid = $_GET["userid"];

$str = "select  mc.id ,mc.userid,mc.goodsid,g.goodsname,g.goodsimg,g.goodsprice ,mc.num from  myshopcar mc,goodsinfo g where mc.goodsid = g.id and mc.userid=$userid";

$result = mysql_query($str);
$list = array();

while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsid"] = $item["goodsid"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsnum"] = $item["num"];
    $temp["goodsprice"] = $item["goodsprice"];

    $list[] = $temp;
}

echo json_encode($list);

?>