<?php
$c_url=split("&",$_SERVER['QUERY_STRING']);
$cid=intval($c_url[2]);
switch ($c_url[1])
{
	case 'delnx':
	$p['p']['xoa']=1;
	update($p['p'],"nhapxuat","id='".$cid."'");
	break;
	case 'trangthai':
	if ($_SESSION['admin']=="ok")
	query("delete from nhapxuat_chat where id='".$cid."'");
	break;
	case 'xoaso':
	query("DELETE FROM simso WHERE simid='".$cid."'");
	break;
	case 'suaso':
	$_POST['p']['sim1']=soreplace($c_url[2]);
	$_POST['p']['sim2']=replace($c_url[2]);
	$_POST['p']['giaban']=replace($c_url[3]);
	if (checkso($c_url[2],$c_url[3]))
	{
	update($_POST['p'],"simso","simid='".$c_url[4]."'");
	}
	break;

	case 'xoacod':
	if ($c_url[3]==3)
	{
	query("DELETE FROM cod WHERE id='".$cid."'");
	}
	else 
	{
	$_POST['p']['trangthai']=3;
	update($_POST['p'],"cod","id='".$cid."'");		
	}
	break;
	case 'suacod':
	$p['p']['sosim']=$c_url[2];
	$p['p']['giaban']=replace($c_url[3]);
	$p['p']['gianhap']=replace($c_url[4]);
	$p['p']['phichuyen']=replace($c_url[5]);
	$p['p']['mabuu']=urldecode($c_url[6]);
	$p['p']['macod']=urldecode($c_url[7]);
	$p['p']['ngaychuyen']=$c_url[8];
	$p['p']['trangthai']=$c_url[9];
	update($p['p'],"cod","id='".$c_url[10]."'");
	break;
		
}
?>