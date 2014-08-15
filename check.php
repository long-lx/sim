<?php

if ($_POST['check'])
{
	$q=mysql_query("SELECT * FROM simso WHERE sim2='".replace($_POST['sosim'])."'");
	$r=mysql_fetch_array($q);
	$q2=mysql_query("SELECT * FROM thanhvien WHERE id='".$r['simdl']."'");
	$r2=mysql_fetch_array($q2);
	if (@mysql_num_rows($q) >0)
	{
		$hh=hoahong($r['sim2']);
	?>

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Check sim</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

	
<div align="center">
		<table style="width: 60%">
			<tr>
				<td colspan="2" style="height: 22px; text-align: center;">
				<strong><?=$r[sim1]?></strong> <br><strong>Giá đăng:</strong> <?=number_format($r[giaban]*1000000,0,".",".");?> 
				<strong>Giá Đại lý:</strong> <?=number_format($r[gianhap]*1000000,0,".",".");?></td>
			</tr>
			<tr>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong>Hoa Hồng: <?=$hh?> %</strong></p>
				</td>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong>Giá đại lý thu về:<?=number_format(($r[gianhap]*1000000)*(100-$hh)/100,0,".",".");?></strong></p>
				</td>
			</tr>
			<tr class="">
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong>Đại lý: </strong> </p>
				</td>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong><?=$r2[hovaten]?></strong></p>
				</td>
			</tr>
			<tr>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong>Điện thoại:
				</strong> </p>
				</td>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong><?=$r2[mobile]?></strong></p>
				</td>
			</tr>
			<tr>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong>Địa chỉ:</strong></p>
				</td>
				<td style="width: 50%; height: 22px; text-align: left;">
				<p style="margin-left: 10px"><strong><?=$r2[diachi]?></strong></p>
				</td>
			</tr>
			<tr>
				<td style="width: 50%; height: 22px;"></td>
				<td style="width: 50%"></td>
			</tr>
		</table>
</div>
	
	<?
	}
	else 
	{
		?>
	<p style="text-align: center; color: #FF0000; font-family: Arial; font-size: large">
<strong>Số <?=$_POST[sosim]?> không có trên website!</strong></p>

	<?
	}
}
?>


<form method="post">
	<div style="text-align: center">
		<input name="sosim" type="text" style="width: 188px; height: 56px" /><input name="check" type="submit" value="Check" style="width: 91px; height: 53px" /></div>
</form>
</div></div>