<?php
$stv=new Smarty();
if (isset($_POST['dangky']) && $_GET['cid']!="")
{

$p=$_POST['post'];
$stv->assign($p);
if ($p['username']=="")$t['user']="Chưa nhập";
if ($p['password']=="")$t['pass']="Chưa nhập";
if ($_POST['password2']=="")$t['pass2']="Chưa nhập";
if ($p['password']!=$_POST['password2'])$thongbao="<font color='red'>Mật khẩu</font> và <font color='red'>mật khẩu nhập</font> lại không khớp!";
$q=query("SELECT * FROM thanhvien WHERE (username!='') AND username='".$p['username']."'");
if (mysql_num_rows($q) > 0)
{
	$r=fecth($q);
	if ($r['username']==$p['username'])$thongbao="Trên truy cập <font color='red'>".$p['username']."</font> đã có người dùng bạn vui lòng chọn tên khác!";
}
$stv->assign($t);
$stv->assign("thongbao",$thongbao);
$stv->assign("password2",$_POST['password2']);
if (!$thongbao AND !$t)
{
update($_POST['post'],"thanhvien","cidmd5='".$_GET['cid']."'");
$_SESSION['username']=$_POST['post']['username'];
$_SESSION['password']=$_POST['post']['password'];
$_SESSION['time']=time();
$mxsql=query("SELECT * FROM thanhvien WHERE cidmd5='".$_GET['cid']."'");
$mxf=fecth($mxsql);
		$noidung="Chao ban ".$mxf['hovaten']." !\n";
		$noidung.="Tai khoan cua ban tai nganhangsimsodep.com da duoc kich hoat \n";
		$noidung.="Voi thong tin nhu sau \n";
		$noidung.="Ten dang nhap: ".$_POST['post']['username']." \n";
		$noidung.="Mat khau: ".$_POST['post']['password']." \n \n";
		$noidung.="Thong tin ca nhan cua ban \n";
		$noidung.="Ho va Ten: ".$mxf['hovaten']." \n";
		$noidung.="Dia chi: ".$mxf['diachi']." \n";
		$noidung.="mobile: ".$mxf['mobile']." \n";
		$noidung.="Tel: ".$mxf['tel']."\n";
		$noidung.="Email: ".$mxf['email']."\n \n";
		$noidung.="Neu thong tin chua chinh sac ban vui long truy cap dia chi \n";
		$noidung.="http://nganhangsimsodep.com/login.html de sua doi! \n \n";
		$noidung.="Ban co tai khoan nay ban mua sim so dep tai nganhangsimsodep.com se duoc tinh gia uu dai! \n";
		$noidung.="Nganhangsimsodep.com Xin cam on ban da su dung dich vu cua chung toi!";
		$headers = "From: nganhangsimsodep.com@gmail.com\r\n";
		$headers .= "Reply-To: nganhangsimsodep.com@gmail.com\r\n";
		mail($mxf['email'],"Tai khoan cua ban tai nganhangsimsodep.com da duoc kich hoat!",$noidung,$headers);
echo thongbao("Đăng ký tài khoản thành công với tên đăng nhập ".$p['username']." mật khẩu truy cập ".$p['password']);
loca("index.php?act=dondathang");
}

}
else 
{
	$q=query("SELECT * FROM thanhvien WHERE cidmd5='".$_GET['cid']."'");
	if (mysql_num_rows($q) > 0)
	{
		$r=fecth($q);
		if ($r['username']!="")
		{
		echo thongbao("Tài khoản của bạn đã được kích hoạt với username: ".$r['username']." password:".$r['password']."");
		loca("index.html");
		}
		
	}
	else 
	{
		echo thongbao("Thông tin của bạn đã bị xóa bạn vui lòng đăng ký lại!");
		loca("index.html");
	}
}
$stv->display("activeacc.htm");
?>