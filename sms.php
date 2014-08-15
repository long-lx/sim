<?php
class sms
{
	function check($name,$phone,$address)
	{
		$check=0;
		if (count(explode(" ",$name)) >=2 && count(explode(" ",$name)) <= 5)
		$check=$check+1;
		if (count(explode(" ",$address)) >=2)
		$check=$check+1;
		if ((substr($phone,0,2)=='09' || substr($phone,0,2)=='01')  && (strlen($phone) > 9 && strlen($phone) < 12))
		$check=$check+1;
		return $check;
		
	}
	function send($to,$sms)
	{

	}
}
$sms=new sms();
if ($sms->check($_POST['post']['hovaten'],$_POST['post']['diachi'],$_POST['post']['mobile'])==3)
{
		$to="0914779999";
		$sms=$mailtxt2;
		$curl = new curl();
		$xlogin=$curl->makeRequest( 'post','http://wap.mobifone.com.vn/wap/xhtml/mypage/checkPassword.jsp','username=0937666886&password=anhyeuem&remember=1&submit=Ok');
	if ($xlogin == true)
		$curl->makeRequest('post','http://wap.mobifone.com.vn/wap/xhtml/mypage/sms/result.jsp?lang=vn&action=mypage','phonenum='.$to.'&message='.urlencode($sms).'&submit=Ok');
}
?>