<?php
$stv=new Smarty();
$masp=80;
$page=$_GET['page'];
if ($page)$page--;
$bg=$masp*$page;
if ($page=="")
$page=1;
else 
$page=$_GET['page'];
$where="";
$txtsim=$_GET['Textsim'];
$txtsim=str_replace(array('.',' '),array('',''),$txtsim);
if ($txtsim!="")
$stv->assign("thiskey",$txtsim);
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
if ($_GET['tongnut']!=11)
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



$sql=query("SELECT simid,sim1,giaban FROM simso $where ORDER BY giaban DESC limit $bg,$masp");


$lrow=mysql_query("SELECT simid FROM simso $where");
$dem=@mysql_num_rows($lrow);
@mysql_free_result($lrow);
if (stristr($_GET['Textsim'],"*")==true)
{
	$chuoix=explode("*",$_GET['Textsim']);
	if ($chuoix[0]!="")$chuoidau="chuỗi đầu <font color='red'>".$chuoix[0]."</font>";
	if ($chuoix[1]!="")$chuoicuoi="chuỗi cuối <font color='red'>".$chuoix[1]."</font>";
	$txts=$chuoidau." ".$chuoicuoi;
}
else 
{
	$txts="<font color='red'>".$_GET['Textsim']."</font> mọi vị trí";
}
if ($_GET['smang']!='0')
{
	$txtmangs=" mạng <font color='red'>".$_GET['smang']."</font>";
}
if ($_GET['sgiatu'] > 0 AND $_GET['sgiaden'] >0)
{
	$txtgia=" giá từ <font color='red'>".$_GET['sgiatu']."</font> Đến <font color='red'>".$_GET['sgiaden']."</font>";
}
if ($_GET['tongnut']!=11)
{
	if ($_GET['tongnut']==0)$txtdau=1;
	$txtnut=" Tổng nút/điểm <font color='red'>".$txtdau."".$_GET['tongnut']."</font>";
}

$stv->assign("muc"," (".$dem.") Kết quả tìm kiếm với ".$txts."".$txtmangs."".$txtgia."".$txtnut."");

if ($_GET['page']=="")$i=0;
else $i=$bg;
while ($row=fecth($sql))
{
	$i++;
	$row['sim2']=str_replace('.','',$row['sim1']);
	if ($i%2==0)$row['class']="";else $row['class']="ui-widget-content";
	$row['stt']=$i;
	if (count(explode("*",$_GET['Textsim']==2)) && $d1!="" && $c1!="")
	$row['sim1']=str_replace(array($d1,$c1),array("<span class='chucam'>".$d1."</span>","<span class='chucam'>".$c1."</span>"),$row['sim1']);
	else 
	$row['sim1']=str_replace(replace($_GET['Textsim']),"<span class='chucam'>".replace($_GET['Textsim'])."</span>",$row['sim1']);
	//$row['mang']='<div id="'.checkmang($row['sim1'],$mang['s']).'"></div>';
	$row['mang']='<img src="images/'.checkmang($row['sim1'],$mang['s']).'.gif" width="65" height="22" border="0" alt="sim so dep '.checkmang($row['sim1'],$mang['s']).' '.$row['sim2'].'">';
	//$row['mang']='<span style="font-size: 12px; font-family:Tahoma; color:orange;font-weight:bold">'.checkmang($row['sim1'],$mang['s']).'</span>';
	$row['giaban']=number_format($row['giaban']*1000000,0,",",",");
	
	$data[]=$row;
}
@mysql_free_result($sql);
$stv->assign("data",$data);

$k=0;
foreach ($loai['s'] as $name => $value)
{
	$k++;
	$j[]=$k;
	$link[]="sim-so-dep--".$name.".html";
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
		elseif (in_array($dauso,$mang['s']['VietNamobile']))
	$dauVietNamobile[]=$row2['dauso'];
		elseif (in_array($dauso,$mang['s']['Gmobile']))
	$dauBeeline[]=$row2['dauso'];
}
$stv->assign("dauvina",$dauvina);
$stv->assign("daumobi",$daumobi);
$stv->assign("dauviettel",$dauviettel);
$stv->assign("dauVietNamobile",$dauVietNamobile);
$stv->assign("dauBeeline",$dauBeeline);


foreach ($mang['s'] as $key => $value)
{
	$tenmang[]=$key;
}
$stv->assign("tenmang",$tenmang);

$stv->assign("paging",xstrang($dem,$page,10,$masp,"index.php?".$_SERVER['QUERY_STRING']."&page="));
//$stv->assign("paging",paging($dem,$page,10,$masp));
if (strlen($_GET['Textsim'])== 10 || strlen($_GET['Textsim'])== 11)
{
if (substr($_GET['Textsim'],0,2)== '09' || substr($_GET['Textsim'],0,2)== '01')
{
if ($dem==0)
$stv->assign("dem",1);
$stv->assign("sotim",$_GET['Textsim']);
}
}
$stv->display("xhome.htm");
?>