<?php
require("func/email.php");
if (isset($_POST['submit']))
{
if (strlen($_POST['noidung']) > 30)
{
$from="sevice@".$_SERVER['HTTP_HOST'];
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$email=@mail("my.sevice@gmail.com","Tin nhan cua ".$_POST['name']." vao luc ".date('H:i:s',$ntime)." ".date('d/m/Y')."",$_POST['noidung'],$headers);
if ($email === true)
echo "<center>Tin nhắn đã được gửi thành công!</center>";
else 
echo "<center>Chưa gửi được tin nhắn, vui lòng thử lại!</center>";
}
else 
echo "<center>Nội dung gửi quá ngắn, vui lòng làm lại!</center>";
}
?>
<html lang="vi"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gửi tin nhắn đến</title>
</head>

<body>
<form method="post">
		<div align="center">
				<table style="width: 400px; background-color: #3399FF;" cellspacing="1" cellpadding="0">
					<tr>
					<td colspan="2" style="text-align: center; background-color: #8AC5FF;">
						<strong>Gửi tin nhắn đến 0914779999</strong></td>
					</tr>
					<tr>
					<td style="background-color: #F2F2F2">
						<strong>Nội dung gửi:</strong></td>
					<td style="width: 50%; background-color: #F2F2F2;">
						<textarea name="noidung" style="width: 209px; height: 100px"></textarea></td>
					</tr>
					<tr>
					<td style="background-color: #F2F2F2">
						<strong>Số điện thoại của bạn:</strong></td>
					<td style="width: 50%; background-color: #F2F2F2;">
						<input name="name" type="text" /></td>
					</tr>
					<tr>
					<td colspan="2" style="text-align: center; background-color: #F2F2F2;">
						<strong>
						<input name="submit" type="submit" value="Gửi tin nhắn" style="font-weight: bold" /></strong></td>
					</tr>
				</table>
				</div>

</form>

</body>

</html>
