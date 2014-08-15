<?php
$stv =new Smarty();


if ($_GET['macod'])
{
	$where="";
	if ($_GET['trangthai']==1)
	$where.="AND trangthai='1'";
	else 
	$where.="AND trangthai='3'";
	
	$where.="AND macod LIKE '%".$_GET['macod']."%'";
}
if ($_GET['staus'])
{
	$where="AND trangthai='".$_GET['staus']."'";
	
}
else 
{
	
	$where="AND trangthai!='3'";
}
$masp=80;
$page=$_GET['page'];
if ($page)$page--;
$bg=$masp*$page;
if ($page=="")
$page=1;
else 
$page=$_GET['page'];
$dem=mysql_num_rows(query("SELECT * FROM cod WHERE daily='".$_SESSION['daily']."' $where"));
$sql=query("SELECT * FROM cod WHERE  (daily='".$_SESSION['daily']."' AND daily!='') $where ORDER BY id DESC limit $bg,$masp");
$i=0;
while ($row=fecth($sql))
{
	$i++;
	$row['stt']=$i;
	if ($i%2==0)$row['class']="b1";
	else $row['class']="b2";
	$row['tt']=$row['trangthai'];
	if ($row['trangthai']==0)
	$row['trangthai']="Chưa chuyển";
	elseif ($row['trangthai']==1)
	$row['trangthai']="Đang chuyển";
	elseif ($row['trangthai']==2)
	$row['trangthai']="Lưa Ý";
	elseif ($row['trangthai']==3)
	$row['trangthai']="Đã xong";
	else 
	$row['trangthai']="Hủy";
	$row['gianhap']=number_format($row['gianhap'],0,".",".");
	$row['giaban']=number_format($row['giaban'],0,".",".");
	$row['phichuyen']=number_format($row['phichuyen'],0,".",".");
	$data[]=$row;
}
$stv->assign("data",$data);
$stv->assign("staus",$_GET['staus']);
$stv->assign("paging",paging($dem,$page,10,$masp));
$stv->display("quanlycod.htm");
?>