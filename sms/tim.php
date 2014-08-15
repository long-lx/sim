<?php
require("../conf.php");
require("../func/mysql.php");
$where="";
$txtsim=substr($_GET['msg'],4,strlen($_GET['msg']));
$txtsims=split(":",$txtsim);
$txtsim=$txtsims[0];
$gia_tu=split(" ",$txtsims[1]);
$_GET['sgiatu']=$gia_tu[0]*1000000;
$_GET['sgiaden']=$gia_tu[1]*1000000;

if (in_array($txtsims[2],array('VN','vn','Vn')))
$_GET['smang']="VinaPhone";
elseif (in_array($txtsims[2],array('VT','Vt','vt')))
$_GET['smang']="Viettel";
elseif (in_array($txtsims[2],array('Mb','MB','mb')))
$_GET['smang']="MobiFone";
elseif (in_array($txtsims[2],array('SF','Sf','sf')))
$_GET['smang']="Sfone";
elseif (in_array($txtsims[2],array('vb','VB','Vb')))
$_GET['smang']="VietNamobile";
elseif (in_array($txtsims[2],array('be','Be','BE')))
$_GET['smang']="Beeline";
elseif (in_array($txtsims[2],array('ev','EV','Ev')))
$_GET['smang']="EVNTelecom";

$_GET['tongnut']=$txtsims[3];
$txtsim=str_replace(array('.',' '),array('',''),$txtsim);
$spot=strpos($txtsim,"*");
$slen=strlen($txtsim);
if (stristr($txtsim,"*")=== false)
{
$txtsim=str_replace(array('x','X','*'),array('[0-9]','[0-9]','.*'),$txtsim);
$where="WHERE sim2 rlike'.*".$txtsim.".*'";
}
else 
{
$txtsim=str_replace(array('x','X','*'),array('[0-9]','[0-9]','.*'),$txtsim);
if ($spot == 0)
$where="WHERE sim2 rlike '".$txtsim."$'";
elseif ($spot == ($slen -1))
$where="WHERE sim2 rlike '^".$txtsim."'";
else 
$where="WHERE sim2 rlike '^".$txtsim."$'";
}
if (is_array($_GET['n']))
{
	foreach ($_GET['n'] AS &$v)
	{
		$vv.=$v;
	}
$where.=" AND sim2 NOT rlike'[".$vv."]'";
}
if ($_GET['sgiatu'] > 0 && $_GET['sgiaden'] > 0)
{
	$where.=" AND (giaban >=".(replace($_GET['sgiatu'])/1000000)." && giaban <=".(replace($_GET['sgiaden'])/1000000).")";
}
if ($_GET['smang'])
{
	foreach ($mang['s'][$_GET['smang']] AS &$value)
	{
		if (strlen($value)==3)
		$l3[]="'".$value."'";
		else 
		$l4[]="'".$value."'";
		$valuex[]=$value;
	}
	if ($l4  && $l3)
	$where.=" AND(left(sim2,3) IN(".join(", ",$l3).") || left(sim2,4) IN(".join(", ",$l4)."))";
	else if ($l3)
	$where.=" AND(left(sim2,3) IN(".join(", ",$l3)."))";
	else 
	$where.=" AND(left(sim2,4) IN(".join(", ",$l4)."))";
}
if ($_GET['tongnut']!=null)
{

	$where.=" AND (right((substring(sim2,2,1)+substring(sim2,3,1)+substring(sim2,4,1)+substring(sim2,5,1)+substring(sim2,6,1)+substring(sim2,7,1)+substring(sim2,8,1)+substring(sim2,9,1)+substring(sim2,10,1)+substring(sim2,11,1)),1) = ".$_GET['tongnut'].")";
}


if (count(explode("*",$_GET['Textsim']))==2)
{
if (substr($_GET['Textsim'],0,1)=="*")
$like="WHERE sim2 LIKE '%".replace($_GET['Textsim'])."'";
elseif (substr($_GET['Textsim'],-1,1) == "*")
$like="WHERE sim2 LIKE '".replace($_GET['Textsim'])."%'";
else 
{
list($d1,$c1)=split('[*]',$_GET['Textsim']);
$like="WHERE (left(sim2,".strlen($d1).")='".$d1."' AND right(sim2,".strlen($c1).") ='".$c1."')";
}
}
else 
{
$like="WHERE sim2 LIKE '%".replace($_GET['Textsim'])."'";	
}
$sql=query("SELECT simid,sim1,giaban FROM simso $where ORDER BY giaban DESC limit 40");

if ($_GET['page']=="")$i=0;
else $i=$bg;
while ($row=fecth($sql))
{
	echo $row['sim1']." - ".$row['giaban']."\n";
}
?>