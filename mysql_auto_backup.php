<?php
set_time_limit(0);
require("conf.php");
require("func/mysql.php");
$sql=mysql_query("SELECT * FROM my_order limit 10");
while ($row=mysql_fetch_assoc($sql))
{
	$join[]=$row;
}
$curl = new curl();
print_r($join);
echo $curl->makeRequest( 'post','http://cp.stv.vn/sql.php','data='.$join.'&y=1');
?>