<?php
if ($_POST['submit'] AND $_POST['txtsim']!="")
{
	$es=explode("
",str_replace(array(' ','.',","),array('','',''),$_POST['txtsim']));
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body>
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="menu2">
		<table style="width: 100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="width: 30px">
										<img alt="sim so dep" src="images/sk1.gif" style="width: 30px; height: 25px"></td>
				<td class="mainbg" style="width: 932px; background-image: url('images/sk2.gif'); color: #FFFFFF;"><strong>Công cụ tính tổng điểm</strong></td>
				<td>
										<img alt="sim so dep" src="images/sk3.gif" style="width: 33px; height: 25px"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td style="border:1px #b3a4fa solid; border-top-style:none; height: 300px;">
		<table border="0" width="100%" cellspacing="0">
			<tr>
				<td bgcolor="#FFFFFF" style="font-weight: 700">
			
<p align="center"><b>Công cụ tính tổng điểm của số điện thoại </b></p>
<p align="center">để tính tổng điểm của số điệm thoại bạn chỉ cần nhập tất cả những số cần 
tính điểm mỗi số 1 dòng rồi nhấn tính điểm</p>
<form method="POST" action="">
	<p align="center"><textarea rows="14" name="txtsim" cols="18"></textarea></p>
	<p align="center">
	<input type="submit" value="Tính điểm" name="submit" style="font-weight: 700"></p>
</form>

<table border="0" width="100%" id="table1" cellspacing="1" bgcolor="#BFEFFF">
	<tr>
		<td height="22" bgcolor="#C0C0C0"><b>&nbsp;Số điện thoại</b></td>
		<td height="22" bgcolor="#C0C0C0"><b>Điểm cộng được</b></td>
	</tr>
<?php
for ($is=0; $is<= count($es)-1; $is++)
{
	$diem[$is]=substr((substr($es[$is],0,1)+substr($es[$is],1,1)+substr($es[$is],2,1)+substr($es[$is],3,1)+substr($es[$is],4,1)+substr($es[$is],5,1)+substr($es[$is],6,1)+substr($es[$is],7,1)+substr($es[$is],8,1)+substr($es[$is],9,1)+substr($es[$is],10,1)),-1,1);
	if ($diem[$is]==0)$diem[$is]=10;
	if ($is%2 == 0)
	{?>
	<tr>
		<td height="22" bgcolor="#F4F4FF"><?=$es[$is]?></td>
		<td height="22" bgcolor="#F4F4FF"><?=$diem[$is]?></td>
	</tr>	
	<?	
	}
	else 
	{
	?>
	<tr>
		<td height="22" bgcolor="#FFFFFF"><?=$es[$is]?></td>
		<td height="22" bgcolor="#FFFFFF"><?=$diem[$is]?></td>
	</tr>
	<?		
	}
}
?>
</table>

				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
	<td style="background-image: url('images/bgt.gif'); height:4px"></td>
	</tr>
</table>
</body>

</html>