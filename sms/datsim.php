<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+0914.77.999.Nguyen Van A.23 Doi Can. Ha Noi.0913880000
require("../conf.php");
require("../func/mysql.php");
$msgs=str_replace("vg datsim ","",urldecode($_GET['msg']));
if ($msgs!="")
{
$d=explode(".",$msgs);
$q=query("SELECT * FROM simso WHERE sim2='".$d[0]."'");
$s=md5(time());
$h=date('H:j:s');
if (@mysql_num_rows($q) > 0)
{
	$r=fecth($q);
	$p['ngaymua']=date('d/m/Y');
	$p['sosim']=$d[0];
	$p['giatien']=$r['giaban'];
	$p['cidmd5']=$s;
	$p['giomua']=$h;
	insert($p,"dondathang");
	
	$t['hovaten']=$d[1];
	$t['diachi']=$d[2];
	$t['city']=$d[3];
	$t['mobile']=$_GET['mobilenumber'];
	$t['cidmd5']=$s;
	insert($t,"thanhvien");
	echo "Cam on ban dat mua sim: ".$d[0]." gia ".number_format($r['giaban'],0,",",",")." chung toi se lien he voi ban som nhat!";
	
	
}
else 
{
	echo "So ".$d[0]." khong co tren website, Ban ko the dat mua! Lien He: 0937666886";
}
}
?>