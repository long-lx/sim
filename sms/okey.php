<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+0914.77.999.Nguyen Van A.23 Doi Can. Ha Noi.0913880000
require("../conf.php");
require("../func/mysql.php");
$msgs=str_replace("vg okey ","",urldecode($_GET['msg']));
if ($_GET['mobilenumber']!="")
{
	$q=query("SELECT * FROM yeucausim WHERE mobile LIKE '%".substr($_GET['mobilenumber'],2,strlen($_GET['mobilenumber']))."' ORDER BY id DESC limit 1");
	if (mysql_num_rows($q) > 0)
	{
	query("UPDATE yeucausim SET active=1 WHERE mobile LIKE '%".substr($_GET['mobilenumber'],2,strlen($_GET['mobilenumber']))."'");
	echo "Yeu cau sim da duoc kich hoat che do tim kiem tu dong va bao qua tin nhan neu co sim dung yeu cau!";	
	}
else 
{
	echo "Kich hoat yeu cau sim ko thanh cong, vui long thu lai hoac lien he: 0937666886";
}
}
?>