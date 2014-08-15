<?php
$stv=new Smarty();
$stv->assign($myinfo);
if (!$_SESSION['admin'])
{
	$where=" AND daily='".$_SESSION['daily']."'";
}
$sql=query("SELECT * FROM nhapxuat WHERE xoa='0'$where order by id DESC");
$i=0;
while ($row=fecth($sql))
{
$i++;

if ($i%2==0)$row['class']="ui-widget-content";else $row['class']="";
$row['stt']=$i;
$row['lai']=(($row['giaban']-$row['gianhap']) + ($row['gianhap']*$row['hoahong']/100))+$row['phikhac'];
$tongnhap1+=$row['gianhap'];
$dailythu+=$row['gianhap']-($row['gianhap']*$row['hoahong']/100);
$tonglai+=$row['lai'];
$row['lai']=number_format($row['lai']*1000,0,",",",");
if ($row['trangthai']==1){$row['sosim']="<a href=\"aindex.php?act=trangthai&id=$row[id]&sid=".time()."\" rel=\"lyteframe\" title=\"Trạng thái đơn đặt hàng\" rev=\"width: 400px; height: 300px; scrolling: no;\"><span style='color:orange'>".$row['sosim']."</span></a>";}
elseif ($row['trangthai']==2){$row['sosim']="<a href=\"aindex.php?act=trangthai&id=$row[id]&sid=".time()."\" rel=\"lyteframe\" title=\"Trạng thái đơn đặt hàng\" rev=\"width: 400px; height: 300px; scrolling: no;\"><span style='color:red'>".$row['sosim']."</span></a>";}
else{$row['sosim']="<a href=\"aindex.php?act=chitiet&id=$row[id]&sid=".time()."\" rel=\"lyteframe[catalog]\" title=\"Thông tin đơn đặt hàng\" rev=\"width: 400px; height: 250px; scrolling: no;\">".$row['sosim']."</a>";}
$row['giaban']=number_format($row['giaban']*1000,0,",",",");
$row['gianhap']=number_format($row['gianhap']*1000,0,",",",");
if ($row['giaban']==0)
$row['kieu']="Nhập/G.Ko Thu";
else 
$row['kieu']="Đ.Lý Giao Hộ";

$data[]=$row;
}
$stv->assign("so",$i);
$stv->assign("dailythu",number_format($dailythu*1000,0,",",","));
$stv->assign("tongnhap1",number_format($tongnhap1*1000,0,",",","));
$stv->assign("tongnhap2",number_format($tongnhap2*1000,0,",",","));
$stv->assign("tonglai",number_format($tonglai*1000,0,",",","));
$stv->assign("tongam",number_format($tongam*1000,0,",",","));
$stv->assign("data",$data);
$stv->assign("data2",$data2);
$stv->assign("dates",date('d/m/Y',$ntime));
$stv->assign("datess",$row[$i]['ngay']);
$stv->assign("md5",md5(time()));
//---------------------------------//
$stv->assign("bandang",number_format((0-($tongam+$tonglai)*1000),0,",",","));
$stv->display("xhome.htm");


?>