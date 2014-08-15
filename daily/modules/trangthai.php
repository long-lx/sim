<?php
$stv=new Smarty();
if($_SESSION['admin'] == "ok" AND $_GET['del'])
query("DELETE FROM nhapxuat_chat WHERE id='".$_GET['del']."'");
$sql=@query("SELECT * FROM nhapxuat_chat WHERE nid=".$_GET['id']);
if (@mysql_num_rows($q) < 1 && $_GET['del'])
{
	$p['trangthai']=0;
	update($p,"nhapxuat","id=".$_GET['id']);
}
$i=0;
while ($row=@fecth($sql))
{
		$i++;
	if ($i%2==0)$row['class']="b2";else $row['class']="b1";
	$data[]=$row;
}
$stv->assign("data",$data);
if ($_SESSION['admin']=="ok")
{
	$stv->assign("admin",1);
}


$stv->assign("cid",intval($_GET['id']));
$stv->assign("c_url",$c_url);

$q=query("SELECT * FROM nhapxuat WHERE id='".$_GET['id']."'");
$row=fecth($q);
$row['giaban']=number_format($row['giaban']*1000,0,".",".");
$stv->assign($row);
$stv->display("trangthai.htm");
?>