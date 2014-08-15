<?php
require("conf.php");
require("func/mysql.php");
if ($_GET['sosim']!="")
{
$q=query("SELECT * FROM simso WHERE sim2='".replace($_GET['sosim'])."'");
if (@mysql_num_rows($q) > 0)
{
$r=fecth($q);
$q2=query("SELECT * FROM thanhvien WHERE id='".$r['simdl']."'");
$r2=fecth($q2);
echo "<center>".$_GET[sosim]."<br>".number_format($r['giaban']*1000000,0,".",".")." VNĐ<br/>";
echo"<strong>". $r2['city']."</strong><br/>";
?>
	<input onclick="document.fr.text.value='Kiem tra ho em so <?=$_GET['sosim']?> xem con ko?';document.fr.mobile.value='<?=$r2['mobile']?>'" name="Button3" type="button" value="Kiểm tra" /><br/>
	
	<input onclick="document.fr.text.value='Giu cho em so <?=$_GET['sosim']?> nhe';document.fr.mobile.value='<?=$r2['mobile']?>'" name="Button2" type="button" value="Báo giữ" /><br/>
	
	<input onclick="document.fr.text.value='Chuyen cho em so <?=$_GET['sosim']?> Den 76 Quan Nhan - TX - HN!';document.fr.mobile.value='<?=$r2['mobile']?>'" name="Button1" type="button" value="Chuyển" /><br/>
<?
}
else 
echo "<center>Số <strong>".$_GET['sosim']."</strong> Không có!";
}
else 
{
	if ($_GET['tims']!="")
{

	$q=query("SELECT mobile, hovaten From nhapxuat WHERE sosim LIKE '%".replace($_GET['tims'])."' limit 10");
	$stext="forms[0].text.value='Moi Anh/chi den 76 Quan Nhan - Thanh Xuan - HN, Nhan Sim :".$_GET['tims'].", Xin cam on!';";
}
else 
{
	
	$q=query("SELECT mobile, hovaten From thanhvien WHERE live=1 ORDER BY hovaten ASC");	
}
if (@mysql_num_rows($q) <1 )echo "<center>Không tìm thấy:<strong> ".$_GET['tims']."</strong>";
while ($r=fecth($q))
			{?>
				<tr>
				<td style="height: 22px; background-color: #FFFFFF; text-align: left;" onclick="this.className='hi'">
				<a onclick="forms[0].mobile.value='<?=$r['mobile']?>';<?=$stext?>" href="javascript:void(0)"><?=$r['hovaten']?><b> 
				(<?=$r['mobile']?>)</b></a></td>
			</tr>

			<?
}
}
?>