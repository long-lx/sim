<?php
session_start();
define("wwwdir","../");
#ini_set('session.cookie_lifetime',3600);//
if (!$_SESSION['mod'])header("Location: login.htm");
if (time()-$_SESSION['time'] > 3600) header("Location: logincheck.php?act=logoff");
require("../conf.php");
require("../libs/Smarty.class.php");
require("../func/mysql.php");
require("../func/paging.php");
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
?>