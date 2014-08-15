<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+message
require("../conf.php");
require("../func/mysql.php");
$msgs=explode(" ",urldecode($_GET['msg']));
$arr=array('8491477999','84986778668','84937666886','84989660000','84946836789','84949396789');
if (in_array($_GET['mobilenumber'],$arr))
{
if ($msgs[2]!="")
{
$q=query("SELECT sim1,giaban,gianhap,hovaten,mobile FROM simso INNER JOIN thanhvien ON thanhvien.id = simso.simdl WHERE sim2='".preg_replace('/[^0-9]/','',$msgs[2])."'");
if (mysql_num_rows($q) > 0)
{
$r=fecth($q);
echo $r['sim1']." Gia Ban".(number_format($r['giaban'],0,".","."))."VND \n";
echo "GN: ".number_format($r['gianhap'],0,".",".")."VND \n ".$r['hovaten']."\n";
echo $r['mobile'];
}
else 
echo "Sim: ".$msgs[2]."Khong co tren website!";
}
}
?>