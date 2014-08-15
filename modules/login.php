<?php
$stv=new Smarty();
if ($_GET['text'])
$stv->assign("thongbao",urldecode($_GET['text']));
$stv->display("login.htm");
?>