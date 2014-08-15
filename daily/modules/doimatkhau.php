<?php
$stv=new Smarty();
if ($_POST['submit'])
{
	$sql=query("SELECT * FROM thanhvien WHERE username='".$_SESSION['username']."'");
	$row=fecth($sql);
	if ($row['password']!=md5(md5(md5($_POST['password']))) || strlen($_POST['password'])=="")
	thongbao("Bạn không nhập đúng mật khẩu hiện thời!");
	elseif ($_POST['password1']!=$_POST['password2'] || strlen($_POST['password1'])=="")
	if (strlen($_POST['password1'])=="")
	thongbao("Bạn quên chưa nhập mật khẩu mới");
	else 
	thongbao("Mật khẩu mới và mật khẩu nhập lại không khớp nhau!");
	else 
	{
	$_POST['p']['password']=$_POST['password1'];
	$_POST['p']['password']=md5(md5(md5($_POST['p']['password'])));
	update($_POST['p'],"thanhvien","username='".$_SESSION['username']."'");
	thongbao("Đổi mật khẩu thành công!");

	session_destroy();
	}
}
$stv->display("doimatkhau.htm");
?>