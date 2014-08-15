<?php
$stv=new Smarty();
$sql=query("SELECT tieude AS ntieude, noidung AS nnoidung FROM news WHERE id='".$_GET['newid']."'");
$stv->assign(fecth($sql));
if ($_SESSION['admin'])
{
	$stv->assign("sua","<a href='adminpc/index.php?act=newsedit&editid=".$_GET['newid']."'><b>Sửa</b></a>");
}
$q=query("SELECT id AS aid, tieude AS atieude FROM news WHERE id!='".$_GET['newid']."' AND domain='".str_replace("www.","",$_SERVER['HTTP_HOST'])."' order by STT DESC");
while ($r=fecth($q))
{
	$r['tieude']=xoadau($r['atieude']);
	$nd[]=$r;
}
$stv->assign("nd",$nd);
$stv->display("news.htm");
?>