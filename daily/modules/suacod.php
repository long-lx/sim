<?php
$stv=new Smarty();

if ($_POST['suacod'])
{
	$_POST['post']['giaban']=replace($_POST['giaban']);
	$_POST['post']['gianhap']=replace($_POST['gianhap']);
	$_POST['post']['phichuyen']=replace($_POST['phichuyen']);
	update($_POST['post'],"cod","id='".$_GET['mid']."'");
	loca("index.php?act=quanlycod");
}
$sql=query("SELECT * FROM cod WHERE id='".$_GET['mid']."'");
$stv->assign($r=fecth($sql));
$stv->assign("oname",array('Chưa chuyển','Đang chuyển','Lưu ý','Đã xong','Hủy'));
$stv->assign("ovalues",array(0,1,2,3,4));
$stv->assign("oselected",$r['trangthai']);
$stv->display("suacod.htm");
?>