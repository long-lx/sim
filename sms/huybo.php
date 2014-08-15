<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+0914.77.999.Nguyen Van A.23 Doi Can. Ha Noi.0913880000
require("../conf.php");
require("../func/mysql.php");
$msgs=str_replace("vg huybo ","",urldecode($_GET['msg']));
if ($msgs!="")
{
	$q=query("SELECT * FROM thanhvien WHERE mobile LIKE '%".substr($_GET['mobilenumber'],2,strlen($_GET['mobilenumber']))."' ORDER BY id DESC limit 1");
	if (mysql_num_rows($q) > 0)
	{
		$r=fecth($q);
		$q2=query("SELECT * FROM dondathang WHERE cidmd5='".$r['cidmd5']."' AND sosim='".$msgs."' limit 1");
		if (@mysql_num_rows($q2) > 0)
		{
		$r2=fecth($q2);
		mysql_query("UPDATE dondathang SET xn=2 WHERE sosim='".$msgs."' AND cidmd5='".$r['cidmd5']."'");
		echo "Huy bo don dat hang: ".$r2['sosim']." gia ".number_format($r2['giatien'],0,",",",").". thanh cong, chuc ban tim duoc so vua y hon, Xin cam on!";
		}
		else 
		{
		echo "Huy bo don dat hang khong thanh cong! vui long lien he: 0937666886";	
		}
	}
else 
{
	echo "Huy bo don dat hang khong thanh cong! vui long lien he: 0937666886";
}
}
?>