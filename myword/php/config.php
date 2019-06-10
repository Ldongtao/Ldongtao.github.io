<?php

@header("Access-Control-Allow-Origin:*");
@header("content-type:text/html;charset=utf8");
mysql_connect("localhost:3306","root","root");
mysql_select_db("myword");
mysql_query("set character set 'utf8'"); 



// @header("Access-Control-Allow-Origin:*");
// @header("content-type:text/html;charset=utf8");
// mysql_connect("b-3py1nhboh4c0xi.bch.rds.gz.baidubce.com:3306","b_3py1nhboh4c0xi","XDXhA66oM6aBWXBO");
// mysql_select_db("b_3py1nhboh4c0xi");
// mysql_query("set character set 'utf8'"); 

?>