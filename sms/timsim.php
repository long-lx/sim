<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+message
require("../conf.php");
require("../func/mysql.php");
$msgs=explode(" ",urldecode($_GET['msg']));
if ($msgs[2]!="")
{
$q=query("SELECT * FROM simso WHERE sim2='".preg_replace('/[^0-9]/','',$msgs[2])."'");
if (@mysql_num_rows($q) > 0)
{
	$r=fecth($q);
	echo $r['sim1']." Gia ".($r['giaban']/1000000)."(Tr)";
	echo "Lien He: 0937.666.886 De dat mua sim, Thanks!";
}
else 
{
	for ($i=0;$i<=strlen($msgs[2]);$i++)
	{
		$q=query("SELECT * FROM simso WHERE sim2 LIKE '%".substr(preg_replace('/[^0-9]/','',$msgs[2]),$i,strlen($msgs[2]))."' limit 6");
		if (@mysql_num_rows($q) > 0) $i=strlen($msgs[2]);
	}
	$s=0;
	while ($r=fecth($q))
	{
	$s++;
	echo $r['sim2']."-".($r['giaban']/1000000)."Tr\n";
	
	}
	
	echo "LH:0937.666.886";
	if ($s < 6)
	echo "De mua sim!";
}
		
}
?>