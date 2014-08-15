<?

$msp=30;

$p=$_GET['p'];

if ($p)$p--;

$bg=$msp*$p;

$nsql=query("SELECT id AS nid, tieude AS ntieude FROM news ORDER BY stt ASC limit $bg,$msp");

while ($rn=fecth($nsql))

{

	$rn['tieude']=xoadau($rn['ntieude']);

	echo '<a href="'.$myinfo['my_domain'].'/sim-so-dep-gia-re-viettel-mobifone-vinaphone-'.$rn['nid'].'-'.$rn['tieude'].'.html">'.$rn['ntieude'].'</a><br/>';



}

?>

