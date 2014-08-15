<?php
$stv=new Smarty();
if (isset($_POST['submit']))
{
$q2=query("SELECT * FROM thanhvien WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'");
if (mysql_num_rows($q2) > 0)
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	$_SESSION['time']=time();
}
}
if ($_SESSION['username']=="" || $_SESSION['password']=="" || time()-$_SESSION['time'] > 30*60)loca("index.php?act=login&text=Tên đăng nhập hoặc mật khẩu không đúng!");
if ($_GET['thoat']==1)
{
	session_destroy();
	loca("index.php?act=login");
}
$q=query("SELECT * FROM thanhvien WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'");
$stv->assign($r=fecth($q));
$masp=20;
$page=$_GET['page'];
if ($page)$page--;
$bg=$page*$masp;
if ($page=="")
$page=1;
else 
$page=$page+1;
$dem=mysql_num_rows(query("SELECT * FROM dondathang  WHERE cidmd5='".$r['cidmd5']."'"));
$sql=query("SELECT dondathang.trangthai AS trangthai, dondathang.sosim AS sosim, dondathang.ngaymua AS ngaymua, dondathang.giatien AS giatien, cod.mabuu AS mabuupham, cod.ngaychuyen AS ngaychuyen FROM dondathang LEFT JOIN cod ON dondathang.sosim = cod.sosim WHERE dondathang.cidmd5='".$r['cidmd5']."' ORDER BY dondathang.id DESC limit $bg, $masp");
$i=0;
while ($row=fecth($sql))
{
	$i++;
	$row['stt']=$i;
	if ($i%2==0)$row['class']="b2";
	else $row['class']="b1";
	if ($row['trangthai']==0)$row['trangthai']="Chưa xem";
	elseif ($row['trangthai']==1)$row['trangthai']="Đang duyệt";
	elseif ($row['trangthai']==2)$row['trangthai']="Đang chuyển";
	else $row['trangthai']="Bị từ chối";
	$row['giatien']=number_format($row['giatien'],0,".",".");
	$data[]=$row;
}
$stv->assign("data",$data);
$stv->assign("paging",paging($dem,$page,10,$masp));
$stv->display("dondathang.htm");
?>