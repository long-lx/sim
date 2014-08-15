<?php
$stv=new Smarty();
$stv->assign($myinfo);
if ($_GET['taive']!=1)
$stv->display("header.htm");
?>