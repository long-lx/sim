<?php
$stv=new Smarty();
$q=query("SELECT * FROM nhapxuat WHERE id='".$_GET['id']."'");
$row=fecth($q);
$row['giaban']=number_format($row['giaban']*1000,0,".",".");
$stv->assign($row);
$stv->display("chitiet.htm");
?>