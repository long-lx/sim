<?php
$stv=new Smarty();
function notes($id)
{
	$sql=mysql_query("SELECT * FROM notes where mid='".$id."'");
	$dem=@mysql_numrows($sql);
	if ($dem >0)
	return $dem;
}
$masp=50;
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
if (intval($_GET['delid']) > 0)
{
if ($_GET['rac']=='1')
mysql_query("UPDATE my_order SET trangthai='' WHERE id='".$_GET[delid]."'");
else 
mysql_query("UPDATE my_order SET trangthai='Xóa' WHERE id='".$_GET[delid]."'");
}
if ($_GET['rac']=='1')
$where="WHERE trangthai='Xóa'";
elseif ($_GET['type']=="Show")
$where="WHERE sosim";
else 
$where="WHERE trangthai!='Xóa'";
if ($_GET['type']=="Show")
{
$gdate=$_GET[Date_Day]."/".$_GET[Date_Month]."/".$_GET[Date_Year];
if ($gdate!=date('j/m/Y'))
$where.=" AND ngaygio LIKE '%".$gdate."'";
if ($_GET['ncity']!='0')
$where.=" AND city='".$_GET['ncity']."' AND trangthai!='Xóa'";
if ($_GET['number'] > 0)
$where.=" AND sosim like '%".preg_replace('/[^0-9]/',''$_GET['number'])."%'";
if ($_GET['fullname']!='Họ Và tên khách hàng' && $_GET['fullname']!="")
$where.=" AND fname LIKE '%".$_GET['fullname']."%'";
if ($_GET['group']==1)
$where.=" GROUP BY oid";
}
$sql=mysql_query("SELECT * FROM my_order $where order by id desc limit $bg,$masp");
while ($row=mysql_fetch_array($sql))
{
	$i++;
	$row['stt']=$i;
	$row['notes']=notes($row['id']);
	$row['giatien']=number_format($row['giatien'],0,".",".");
	$data[]=$row;
}
$stv->assign("data",$data);
$stv->assign("citys",$city[s]);
$stv->assign($myinfo);
$querys=mysql_query("SELECT id FROM my_order $where limit 300");
$numrow=mysql_num_rows($querys);
$stv->assign("paging",paging($numrow,$page,10,$masp));
$stv->display("xhome.htm");
?>