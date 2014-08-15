<?php
$stv=new Smarty();
$stv->assign("muc","Kết quả tìm kiếm với <font color='red'>".$_GET['Textsim']."</font>");
$masp=30;
$page=$_GET['page'];
if ($page)$page--;
$bg=$masp*$page;
if ($page=="")
$page=1;
else 
$page=$_GET['page'];
$where="";
if ($_GET['sgiatu'] > 0 && $_GET['sgiaden'] > 0)
{
	$where.="AND (giaban >=".replace($_GET['sgiatu'])." && giaban <=".replace($_GET['sgiaden']).")";
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
	$where.="AND(left(sim2,3) IN(".join(", ",$l3).") || left(sim2,4) IN(".join(", ",$l4)."))";
	else if ($l3)
	$where.="AND(left(sim2,3) IN(".join(", ",$l3)."))";
	else 
	$where.="AND(left(sim2,4) IN(".join(", ",$l4)."))";
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
$like="WHERE sim2 LIKE '%".replace($_GET['Textsim'])."%'";	
}
$sql=query("SELECT * FROM simso $like $where ORDER BY giaban DESC limit $bg,$masp");
$dem=mysql_num_rows(query("SELECT * FROM simso $like $where"));

if ($_GET['page']=="")$i=0;
else $i=$bg;
while ($row=fecth($sql))
{
	$i++;
	$row['stt']=$i;
	$row['giaban']=$row['giaban']/1000000;
	$data[]=$row;
}
$stv->assign("data",$data);
$k=0;
foreach ($loai['s'] as $name => $value)
{
	$k++;
	$j[]=$k;
	$link[]="index.php?act=sim&sloai=".$name;
	$linkname[]=$value;
	if ($k==4)$k=0;
	
}
$stv->assign("j",$j);
$stv->assign("link",$link);
$stv->assign("linkname",$linkname);
$sql2=query("SELECT left(sim2, 4) AS dauso FROM simso GROUP BY left(sim2, 4) ORDER BY left(sim2, 4) DESC");
while ($row2=fecth($sql2))
{
	if (substr($row2['dauso'],0,2)=='09')$dauso=substr($row2['dauso'],0,3); else $dauso=$row2['dauso'];
	if (in_array($dauso,$mang['s']['VinaPhone']))
	$dauvina[]=$row2['dauso'];
	elseif (in_array($dauso,$mang['s']['MobiFone']))
	$daumobi[]=$row2['dauso'];
	elseif (in_array($dauso,$mang['s']['Viettel']))
	$dauviettel[]=$row2['dauso'];
}
$stv->assign("dauvina",$dauvina);
$stv->assign("daumobi",$daumobi);
$stv->assign("dauviettel",$dauviettel);
foreach ($mang['s'] as $key => $value)
{
	$tenmang[]=$key;
}
$stv->assign("tenmang",$tenmang);
$stv->assign("paging",paging($dem,$page,10,$masp));
$stv->display("xsearch.htm");
?>