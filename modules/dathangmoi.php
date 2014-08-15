<?php
$stv=new Smarty();
if ($_GET['t']==1)
$trangthai="AND trangthai IN('2')";
else if ($_GET['t']==0) 
$trangthai="AND trangthai IN('','1')";	
$sql=query("SELECT * from my_order where mydomain='".str_replace('www.','',$_SERVER['HTTP_HOST'])."' $trangthai ORDER BY id DESC limit 30");
while ($row=fecth($sql))
{	if ($_GET['t']==0)
	$row['sosim']=substr($row['sosim'],0,strlen($row['sosim'])-2)."xx";
	if ($row['xn']==1)
	$row['sosim']="<span style='color: #33CC33'>".$row['sosim']."</span>";
	elseif ($row['xn']==2)
	$row['sosim']="<span style='color: #C0C0C0; text-decoration: line-through;'>".$row['sosim']."</span>";
	$data[]=$row;
}
$stv->assign("data",$data);
$stv->display("dathangmoi.htm");

?>