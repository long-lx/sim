<?php
require("conf.php");
require("func/mysql.php");
$sql=query("select * FROM thanhvien WHERE city='Hà Nội' order by id desc limit 200");
while ($row=fecth($sql))
{
	echo $row['hovaten']."	".$row['hovaten']."	".$row['diachi']."	".$row['city']."\n <br>";
}
?>