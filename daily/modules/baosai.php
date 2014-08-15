<?php
$stv=new Smarty();
if ($_POST['submit'])
{
	$_POST['post']['user']=$_SESSION['username'];
	$_POST['post']['time']=date('H:i:s d/m/Y',time());
	insert($_POST['post'],"nhapxuat_chat");
	
	update($_POST['po'],"nhapxuat","id=".$_POST['post']['nid']);
}
$sql=query("SELECT * FROM nhapxuat_chat WHERE nid=".$_GET['id']);
$i=0;
while ($row=fecth($sql))
{
	$i++;
	if ($i%2==0)$row['class']="b2";else $row['class']="b1";
	$data[]=$row;
}
$stv->assign("data",$data);

$stv->assign("nid",$_GET['id']);
$stv->display("baosai.htm");
?>