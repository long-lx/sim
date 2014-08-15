<?php
$stv=new Smarty();
$sql=query("SELECT * FROM page WHERE id='".$_GET['pid']."'");
$row=fecth($sql);
$stv->assign("box_title",$row['ptitle']);
$stv->assign("pconment",$row['pconment']);
$stv->display("page.htm");
?>