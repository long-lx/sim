<?php	

$stv=new Smarty();

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



/**

foreach ($mang['s'] as $key => $value)

{

	$tenmang[]=$key;

}

$stv->assign("tenmang",$tenmang);

*/

$stv->assign("gpage",$_GET['page']);

$stv->assign("thiskey","Nhập số sim bạn cần tìm kiếm!");

$xurl="Sim-So-Dep-";

$stv->assign("cid");

$stv->assign("h1",$h1x);

foreach ($mang['s'] as $key => $value)

{

	$tenmang[]=$key;

}

$stv->assign("tenmang",$tenmang);







$stv->assign("muc","Danh Sách Sim");

$masp=30;
//$where="(".join(" AND ",$kieu['sim-tu-quy']).")";
$dem=mysql_query("SELECT count(simid) AS numrows FROM simso");

$dem=fecth($dem);

$dem=$dem['numrows'];

$page=$_GET['page'];
if ($page)$page--;
$bg=$masp*$page;
if ($page=="")
$page=1;
else 
$page=$_GET['page'];
$sql=query("SELECT simid,sim1,giaban FROM simso ORDER BY simid DESC limit $bg,$masp");

if ($_GET['page']=="")$i=0;else $i=$bg;



while ($row=fecth($sql))

{

	$i++;

	$row['sim2']=str_replace('.','',$row['sim1']);

	if ($i%2==0)$row['class']="";else $row['class']="ui-widget-content";

	$row['stt']=$i;

$row['mang']='<img src="images/'.checkmang($row['sim1'],$mang['s']).'.gif" border="0" alt="sim so dep '.checkmang($row['sim1'],$mang['s']).' '.$row['sim2'].'">';
//	$row['mang']='<span style="font-size: 12px; font-family:Tahoma; color:orange;font-weight:bold">'.checkmang($row['sim1'],$mang['s']).'</span>';
	$row['giaban']=number_format($row['giaban']*1000000,0,",",",");

	$data[]=$row;

}

$stv->assign("data",$data);

$i=0;

foreach ($loai['s'] as $name => $value)

{

	$i++;

	$j[]=$i;

	$link[]=$myinfo[my_domain]."/sim-so-dep--".$name.".html";

	$linkname[]=$value;

	if ($i==4)$i=0;

	

}

$stv->assign("j",$j);

$stv->assign("link",$link);

$stv->assign("linkname",$linkname);

$xurl="Sim-So-Dep-";

$stv->assign("cid");

$stv->assign("h1",$h1x);



$stv->assign("paging",strang($dem,$page,10,$masp,$xurl,".SimSoDep"));

$stv->display("xhome.htm");

?>