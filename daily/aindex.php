<?php
session_start();
define("wwwdir","../");
if ($_SESSION['mod']=="")header("Location: login.htm");
if (time()-$_SESSION['time'] > 60*60) header("Location: login.htm");
require("../conf.php");
require("../libs/Smarty.class.php");
require("../func/mysql.php");
require("../func/paging.php");
$act=$_GET['act'];
if ($act=="" || $act==null)$act="xhome";
if (file_exists("modules/".$act.".php"))
{
	require("modules/".$act.".php");
}
else 
echo "<center><b>Lỗi! :File: $act.php không tồn tại!</b></center>";
?>