<?php
$stv=new Smarty();
ob_start();
function xmang($arr)
{
	foreach ($arr AS &$value)
	{
		if (strlen($value)==3)
		$l3[]="'".$value."'";
		else 
		$l4[]="'".$value."'";
		$valuex[]=$value;
	}
	if ($l4  && $l3)
	$where.="(left(sim2,3) IN(".join(", ",$l3).") || left(sim2,4) IN(".join(", ",$l4)."))";
	else if ($l3)
	$where.="(left(sim2,3) IN(".join(", ",$l3)."))";
	else 
	$where.="(left(sim2,4) IN(".join(", ",$l4)."))";
	$q=query("SELECT sim2 FROM simso WHERE $where");
	if (@mysql_num_rows($q) > 0)
	return 1;
	else 
	return 0;
}
$qp=mysql_query("SELECT id, ptitle FROM page WHERE pcode='menu' order by pos asc");
$nav='<table style="width: auto" cellspacing="0">
	<tr>';
$nav.='<td class="selected"><span><a href="'.$myinfo[my_domain].'" target="_self" title="Trang chủ">Home</a></span></td>';
while ($rqp=mysql_fetch_array($qp))
{
	$nav.='<td><span><a href="'.$myinfo[my_domain].'/v'.$rqp['id'].xoadau($rqp['ptitle']).'.html" id='.$rqp['id'].'>'.$rqp['ptitle'].'</a></span></td>';
}
//$nav.='<td><span><a href="'.$myinfo[my_domain].'/ho-tro-khach-hang.support">Hỗ trợ hỏi đáp</a></span></td>';
//$nav.='<td><span><a href="'.$myinfo[my_domain].'/Lien-He">Liên Hệ</a></span></td>';
$nav.='</tr>
</table>';
$stv->assign("nav",$nav);
/*
$sql1=query("SELECT count(sim2) AS so, sim2 AS sim FROM simso GROUP BY left(sim2,4)");
foreach ($mang['s'] AS $skey => $svalue)
{
	if (xmang($mang['s'][$skey])!= 0)
	{
	$i++;
	$hname[] = $skey;
	$hdauso[]=number_format(demsodau($svalue),0,".",".");
	$tongdau+=demsodau($svalue);
	}
	
}
$stv->assign("name",$hname);
$stv->assign("dauso",$hdauso);
$stv->assign("tongdau",number_format($tongdau,0,".","."));



*/
$menu="";
foreach ($mang['s'] AS $mk => $mv)
{

	$menu.='<h3 style="margin:15px"><a href="'.$myinfo[my_domain].'/Sim-'.$mk.'.html">'.$mk.'</a></h3>';
	
}


$stv->assign("menu",$menu);


foreach ($loai['s'] as $name => $value)
{
	$links[]=$myinfo[my_domain]."/".$name.".html";
	$linkname[]=$value;
	
}
$stv->assign("link",$links);
$stv->assign("linkname",$linkname);

if ($_GET['sloai'] && $_GET['smang'])
{
	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$title=$_GET['sloai']." &laquo; ".str_replace('-','',$_GET['sloai'])." ".$_GET['smang']." &laquo; Danh sanh so dep ".$_GET['sloai']." ".$pagex;
	$title=str_replace("-"," ",$title);
}
elseif ($_GET['sloai'])
{
	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$title="Sim ".str_replace(array('-','sim'),array(' ',''),$_GET['sloai'])." &laquo; Sim ".str_replace(array('-','sim'),array(' ',''),$_GET['sloai'])." dep &laquo; Danh sach so dep ".str_replace(array('-','sim'),array(' ',''),$_GET['sloai'])." ".$pagex;
}
elseif ($_GET['smang'])
{	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	if (!$_GET['act'])$title="sim so dep";
	else 
	$title="Sim ".str_replace("-"," ",$_GET['smang'])." &laquo; Sim ".$_GET['smang']." đẹp &laquo; Danh Sách sim số đẹp ".$_GET['smang'].$pagex;
}
elseif ($_GET['sdauso'])
{
	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$dauso="dau so ".$_GET['sdauso']." ".$pagex;
	$title="dau so ".preg_replace('/[a-zA-Z-]/','',$_GET['sdauso']).", dau so viettel, dau so mobifone, dau so vinaphone";
}
elseif ($_GET['sosim'])
{

	$title=$_GET['sosim']." &laquo; Sim Số Đẹp &laquo; ".$my_title." &laquo; sim468.com.com";
}
elseif ($_GET['link'])
{
	$title=str_replace('-',' ',$_GET['link']);
}
elseif ($_GET['cid'])
{
	if ($_GET['cid']=="gioithieu")$title=$my_title." => Giới Thiệu";
	elseif ($_GET['cid']=="thanhtoan")$title=$my_title."=> Thanh Toán";
	elseif ($_GET['cid']=="hotro")$title=$my_title." => Hỗ trợ";
	elseif ($_GET['cid']=="lienhe")$title=$my_title." => Liên Hệ";
}
elseif ($_GET['tag'])
{
	$xtag=str_replace("-"," ",$_GET['tag']);
	$title=$xtag." rẻ, ".$xtag." dep, ".$xtag." de nho, ".$xtag." vip";
}
else 
{
	$title="Sim Số Đẹp - Sim Tứ Quý - Sim Vip";
}
$stv->assign("title",$title);
if ($_GET['sosim'])
{
	$des="Bạn đang tìm sim số đẹp ".$rxs['sim1']." ? mời bạn vào website ".$myinfo[my_domain]." nơi có hàng triệu sim số đẹp để bạn lựa chọn!";
}
elseif ($_GET['sloai'])
{	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$des=$loai['s'][$_GET['sloai']]." | Sim số đẹp ".$loai['s'][$_GET['sloai']]." | ".$myinfo[my_domain]." - Có hàng nghìn  ".$loai['s'][$_GET['sloai']]."  để bạn lựa chọn. ".$pagex;
}
elseif ($_GET['smang'])
{	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$des="Sim ".$_GET['smang'].", Sim số Đẹp ".$_GET['smang']." | ".$myinfo[my_domain]." - Có Hàng nghìn sim số đẹp ".$_GET['smang']." giá rẻ để bạn lựa chọn. ".$pagex;	
}
elseif ($_GET['link'])
{
	$des=str_replace('-',' ',$_GET['link']);
}
elseif ($_GET['cid'])
{
	if ($_GET['cid']=="gioithieu")$title="Giới Thiệu";
	elseif ($_GET['cid']=="thanhtoan")$title="Thanh Toán";
	elseif ($_GET['cid']=="hotro")$title="Hỗ trợ";
	elseif ($_GET['cid']=="lienhe")$title="Liên Hệ";
	$des=$title." ".$myinfo[my_domain]." - Hàng triệu sim số đẹp giá rẻ để bạn chọn.
Hotline: ".$my_hotline1." - ".$my_hotline2;
}
elseif ($_GET['sdauso'])
{
	if ($_GET['page'])$pagex="Trang ".$_GET['page'];
	$des="dau so ".$_GET['sdauso']." | ".$myinfo[my_domain]." - Hàng triệu sim số đẹp giá rẻ để bạn chọn.
Hotline: ".$my_hotline['my_hl1']." - ".$my_hotline['my_hl2']." ".$pagex;;
}
elseif ($_GET['tag'])
{
	$xtag=str_replace("-"," ",$_GET['tag']);
	$des=$xtag." rẻ, ".$xtag." dep, ".$xtag." de nho, ".$xtag." vip";
	$stv->assign("h1x",$des);
}
else 
{
	$des="Sim Số Đẹp - ".$myinfo[my_domain].", ".$my_title." Vinaphone - Mobifone - Viettel giá rẻ để bạn chọn.
Call: ".$my_hotline1;
}
$stv->assign("des",$des);
if ($_GET['sloai'])
{
$h1x=xds($loai['s'][$_GET['sloai']]).", sim so dep ".$loai['s'][$_GET['sloai']];
$h1link=$myinfo[my_domain]."/".$_GET['sloai'].".html";
}
elseif ($_GET['smang'])
{
$h1x="Sim ".$_GET['smang'].", Sim so dep ".$_GET['smang'];
$h1link=$myinfo[my_domain]."/Sim-".$_GET['smang'].".html";
}
elseif ($_GET['sdauso'])
{
$h1x="Dau so ".$_GET['sdauso'];
$h1link=$myinfo[my_domain]."/dau-so".$_GET['sdauso'].".html";
}
else 
{
$h1x="Sim so dep";
$h1link=$myinfo[my_domain];
}
function page_edith()
{
	$q=mysql_query("SELECT * FROM page WHERE pcode IN('quangcao_left','mucgia')");
	while ($r=mysql_fetch_assoc($q))
	{
		if ($r['pcode']=='quangcao_left')
		$s[p_quangcao_left]=$r['pconment'];
		else 
		$s[p_mucgia]=$r['pconment'];
	}
	return $s;
}
$stv->assign(page_edith());

$stv->assign($myinfo);
$stv->assign("h1",$h1x);
$stv->assign("h1link",$h1link);
if ($_GET['sloai'] && $_GET['smang'])
$shome=' >> <a href="'.$myinfo[my_domain].'/Sim-'.$_GET['smang'].'.html">'.$_GET['smang'].'</a> >> <a href="M-'.$_GET['smang'].'-'.$_GET['sloai'].'.html">'.$loai['s'][$_GET['sloai']].'</a>';
elseif ($_GET['smang'])
$shome=' >> <a href="'.$myinfo[my_domain].'/Sim-'.$_GET['smang'].'.html">'.$_GET['smang'].'</a>';
elseif ($_GET['sloai'])
$shome=' >> <a href="'.$myinfo[my_domain].'/'.$_GET['sloai'].'.html">'.$loai['s'][$_GET['sloai']].'</a>';
$stv->assign("shome",$shome);
ob_clean();

$stv->display("header.htm");
?>