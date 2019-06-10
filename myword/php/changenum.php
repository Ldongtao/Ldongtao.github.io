<?php
@require_once("config.php");
$num = $_GET["num"];
$id = $_GET["id"];
$str = "update  myshopcar SET num = $num where  id=$id";
// echo $str;
mysql_query($str);

$count = mysql_affected_rows();

$obj= array();
if($count>0){
    $obj["code"]=1;
    $obj["msg"] ="成功";
}else{
    $obj["code"]=0;
    $obj["msg"]= "失败";
}
echo json_encode($obj);

?>