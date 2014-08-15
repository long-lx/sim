<table style="width: 100%" cellspacing="1">
<?php
$i=0;
foreach ($mang[s] AS $key => $arrvalue)

{
	$i++;
	if ($i%2==0)$class="ui-widget-content";else $class="";

	$dem=demsimml($mang[s][$key],$arrvalue);
	
	echo '<tr calss='.$class.'>
		<td style="text-align: left">'.$key.':</td>
		<td style="text-align: left"><b><font color=red>'.number_format($dem,0,".",".").'</font></b></td>
	</tr>
';

	$total+=$dem;

}

echo '	<tr>
		<td colspan="2" style="text-align: left"><b>Tổng số:&nbsp;&nbsp;<font color=red>'.number_format($total,0,".",".").'</font> Sim</b></td>
	</tr>
';
?>

</table>
