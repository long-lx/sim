<?php
session_start();
function checkcache($url)
{
	$fname=str_replace(array('http://'.$_SERVER['HTTP_HOST'].'/index.php?','&','='),array('','_','_'),$url);
	$day="cache_";
	if (file_exists("cache/".$day.$fname.".html") and round(filesize("cache/".$day.$fname.".html")/1024,2) > 10 And time()-@filemtime("cache/".$day.$fname.".html") < 7*24*60*60)
	return true;
	else 
	{
		
		$open=@fopen("cache/".$day.$fname.".html","wb");
		$content=file_get_contents($url."&c=yes");
		fwrite($open,$content);
		fclose($open);
	}
}
if ($_GET['c']!="yes" and $_GET['act']!="search" and  $_GET['act']!="dathangthanhcong" and $_GET['page'] < 20 and $_GET['act']!="hotro")
$testcache=checkcache("http://".$_SERVER['HTTP_HOST']."/index.php?".$_SERVER['QUERY_STRING']);
if ($testcache==true)
require("cache/"."cache_".str_replace(array('&','='),"_",$_SERVER['QUERY_STRING']).".html");
else 
{
require("conf.php");
require("libs/Smarty.class.php");
require("func/mysql.php");
require("func/xoadau.php");
require("func/paging.php");
$act=$_GET['act'];
if ($act=="" || $act==null)$act="xhome";
if (file_exists("modules/".$act.".php"))
{
	require("header.php");
	require("modules/".$act.".php");
	require("footer.php");
}
else 
echo "<center><b>Lỗi! :File: $act.php không tồn tại!</b></center>";

}
?>