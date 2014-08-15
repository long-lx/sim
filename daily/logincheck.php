<?php
session_start();
#ini_set('session.cookie_lifetime',1800);//
require("../conf.php");
require("../func/mysql.php");
if ($_POST['submit'])
{
	$pass=md5(md5(md5($_POST['password'])));
	$sql=query("SELECT * FROM thanhvien WHERE (username='$_POST[username]' AND password='$pass') AND live > 0");
	if (mysql_num_rows($sql) > 0  && ($_POST['username']!="" && $_POST['password']!=""))
	{
		$_SESSION['mod']="ok";
		$_SESSION['username']=$_POST['username'];
		$_SESSION['time']=time();
		$row=fecth($sql);
		$_SESSION['pt']=$row['pt'];
		$_SESSION['daily']=$row['hovaten'];
		$_SESSION['dailyid']=$row['id'];
		if ($row['live']==2)
			{
				$_SESSION['admin']="ok";
				
			}
	header("Location: index.php?sid=".md5(time())."");
	}
	else 
	{
	header("Location: login.htm");
	}
	
}
if ($_GET['act']=="logoff")
{
		$_SESSION['mod']="";
		$_SESSION['username']="";
		$_SESSION['time']="";
		$_SESSION['admin']="";
		$_SESSION['daily']="";
		session_destroy();
		header("Location: login.htm");
}
?>