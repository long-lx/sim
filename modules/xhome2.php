<?php

$stv=new Smarty();

$stv->assign("muc","<h1><a href='http://nganhangsimsodep.com'><span style='color:white'>Sim Số Đẹp<a/></span> Ngẫu Nhiên</h1>");

$masp=50;

$dem=mysql_query("SELECT count(simid) AS numrows FROM simso WHERE giaban >= 15 AND  giaban < 200");

$dem=fecth($dem);

$dem=$dem['numrows'];

$page=$_GET['page'];

if ($page)$page--;

if (!$page)

$bg=$masp*rand(1,ceil(($dem/$masp))-1);

else 

$bg=$masp*$page;

if ($page=="")

$page=1;

else 

$page=$_GET['page'];

$sql=query("SELECT simid,sim1,giaban FROM simso ORDER BY giaban DESC limit $bg,$masp");

if ($_GET['page']=="")$i=0;else $i=$bg;



while ($row=fecth($sql))

{

	$i++;

	$row['sim2']=str_replace('.','',$row['sim1']);

	if ($i%2==0)$row['class']="b1";else $row['class']="b2";

	$row['stt']=$i;

	$row['mang']='<img src="images/'.checkmang($row['sim1'],$mang['s']).'.gif" border="0" alt="sim so dep '.checkmang($row['sim1'],$mang['s']).' '.$row['sim2'].'">';

	$row['giaban']=number_format($row['giaban']*1000000,0,",",",");

	$data[]=$row;

}

$stv->assign("data",$data);

$i=0;

foreach ($loai['s'] as $name => $value)

{

	$i++;

	$j[]=$i;

	$link[]="http://nganhangsimsodep.com/sim-so-dep--".$name.".html";

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

$stv->display("xhome2.htm");

?>