<?php
	require("conf.php");
	require("func/mysql.php");
	if(isset($_GET['del']))
	setcookie("my_cart[".$_GET['del']."]","",time()-1);
	if (isset($_GET['sim']))
	setcookie("my_cart[".$_GET['sim']."]",$_GET['gia'],time()+3600*24);
echo '<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-hover">
		<a>Giỏ hàng</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">';
	$my_cart=$_COOKIE['my_cart'];
	if (is_array($my_cart))
{
	?>
	<table style="width: 100%">
	<tr class="ui-widget-header">
		<td style="height: 22px">Số sim</td>
		<td style="height: 22px">Giá</td>
		<td style="height: 22px">Xóa</td>
	</tr>

	<?
	$i=0;
	foreach ($my_cart AS $sosim => $giatien)
	{
		$i++;
		if ($i%2==0)$class="ui-widget-content"; else $class="";
		?>
		
		<tr class="<?=$class?>">
		<td style="height: 22px"><?=$sosim?></td>
		<td style="height: 22px"><?=$giatien?></td>
		<td style="height: 22px"><a href="javascript:void(0)" onclick="$('#mycart').load('card.php?del=<?=$sosim?>')">Xóa</a></td>
		</tr>

		
		
		<?

	}
	?>
	</table>
	<a class="sub" href="dat-mua-sim-so-dep-0.html">Đặt mua sim đã chọn</a>
	<?
}
	else 
	echo "Giỏ hàng chưa có gì!";
	
echo '
	</div>

</div>';
?>
