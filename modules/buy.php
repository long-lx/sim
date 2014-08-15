<?php
$stv=new Smarty();
$masp=30;
$page=$_GET['page'];
if ($page)$page--;
$bg=$page*$masp;
if ($_GET['page']=="")
{
$page=1;	
$i=0;
}
else
{
$page=$_GET['page'];
$i=$bg;
}
$where="WHERE trangthai!='Xóa'";
$gdate=$_GET[Date_Day]."/".$_GET[Date_Month]."/".$_GET[Date_Year];
if ($gdate!=date('d/m/Y'))
$where.=" AND right(ngaygio,11)='".$gdate."'";
if ($_GET['ncity']!=0)
$where.=" AND city='".$_GET['ncity']."'";
if ($_GET['number'] > 0)
$where.="AND sosim like'%".$_GET['number']."%'";
if ($_GET['fullname']!='Họ Và tên khách hàng' && $_GET['fullname']!="")
$where.="AND fname LIKE'%".$_GET['fullname']."%'";
if ($_GET['group']==1)
$where.=" GROUP BY oid";


$sql=mysql_query("SELECT * FROM my_order $where limit $bg,$masp");
while ($row=mysql_fetch_array($sql))
{
	$i++;
	$row['stt']=$i;
	$data[]=$row;
}
$stv->assign("data",$data);
$stv->assign("citys",$city[s]);
$stv->assign($myinfo);
$stv->display("xhome.htm");
?>