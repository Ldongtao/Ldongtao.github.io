<?php
@require_once("config.php");

$key = $_GET["key"];
$rank = $_GET["rank"];

$skipnum = $_GET["skipnum"];
$shownum = $_GET["shownum"];

$str = "select count(*) from goodsinfo where goodsname like '%$key%' ORDER BY goodsprice $rank limit $skipnum,$shownum";

$result= mysql_query($str);

$item = mysql_fetch_array($result);

$obj=array();

$obj["count"]= $item[0];

echo  json_encode($obj);

// $keyword = $_GET["keyword"];
// $rank = $_GET["rank"];
// $seq = $_GET["seq"];
// $start = $_GET["start"];
// $pos = $_GET["pos"];
// // keyword=&rank=pro_name&seq=asc
// if($start == "null" || $pos == "null"){
//     //有 start pos
//         $str = "select distinct * from product where pro_name like '%$keyword%' or  pro_price like '%$keyword%'  order by $rank $seq";//准备好查询语句
//     }else{
//     //没有 start pos
//         $str = "select distinct * from product where pro_name like '%$keyword%' or  pro_price like '%$keyword%'  order by $rank $seq limit $start,$pos";
//     }
?>