<?php
if (isset($_POST['submit']))
{
	$a=explode("*",$_POST['dauso']);
	if (count($a) < 2)
	{
	$slen=strlen($_POST['dauso']);
	$slenduoi=10-$slen;
	for ($j=0;$j<=$slenduoi;$j++)
	{
		$max.=9;
		$min.=0;
	}
	for ($i=$min;$i<=$max;$i++)
	{	
		if (strlen($_POST['dauso'].$i)==10)
		$data.= $_POST['dauso'].$i."\n";
		
	}
	}
	else 
	{
		$e=explode("*",$_POST['dauso']);
		$slen=10-strlen($e[0].$e[1]);
		for ($j=0;$j<=$slen;$j++)
		{
			$max.=9;
			$min.=0;
		}
		for ($i=$min;$i<=$max;$i++)
		{
			if (strlen($e[0].$i.$e[1])==10)
			$data.=$e[0].$i.$e[1]."\n";
		}
		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tạo Danh Sách Điện Thoại</title>
</head>

<body>

<table style="width: 100%; height: 249px; background-color: #C0C0C0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="text-align: center; height: 28px; background-color: #C0C0C0">
		<strong>Tạo Danh Sách Điện Thoại</strong></td>
	</tr>
	<tr>
		<td style="height: 196px; text-align: center; background-color: #FFFFFF" valign="top">
		<form method="post">
			<input name="dauso" type="text" /><input name="submit" type="submit" value="Tạo danh sách" /><br />
			<textarea name="TextArea1" cols="20" style="height: 351px"><?=$data?></textarea></form>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>

</body>

</html>
