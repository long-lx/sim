<?php
$stv=new Smarty();
if ($_POST['submit'])
{	$_POST['post']['daily']=$_SESSION['daily'];
	$_POST['post']['gianhap']=replace($_POST['gianhap']);
	$_POST['post']['giaban']=replace($_POST['giaban']);
	$_POST['post']['phichuyen']=replace($_POST['phichuyen']);
	insert($_POST['post'],"cod");
	loca("index.php?act=quanlycod");
}
$stv->display("themcod.htm");

?>