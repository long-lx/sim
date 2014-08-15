<?php /* Smarty version Smarty-3.0.7, created on 2013-04-05 15:20:03
         compiled from "./templates/giaodichedit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1293252017515e89339895e5-74473168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9318f2004427feaf78e53ddf3f74484674ed85' => 
    array (
      0 => './templates/giaodichedit.htm',
      1 => 1362800163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293252017515e89339895e5-74473168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript"  language="javascript" src="../ajax.js" ></script>
<link type="text/css" href="../css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript"  language="javascript" src="admin.js" ></script>

</head>

<body>

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Sửa giao dịch</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
			<form method="post" action="">
			<table style="width: 100%;" cellspacing="1" cellpadding="0">
				<td colspan="2">
						<div align="center" class="bo">
							<b>Bộ gõ tiếng việ</b>t<input onfocus="setTypingMode(0)" type="radio" CHECKED value="OFF" name="switch" />Tắt&nbsp;&nbsp;&nbsp;
							<input class="bvclass" onfocus="setTypingMode(1)" type="radio" value="TELEX" name="switch" />Bật</div>
</td>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Họ Và Tên:</td>
					<td class="left50px" style="width: 50%">
					<input onkeyup="initTyper(this);" name="post[hovaten]" type="text" value="<?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
" style="height: 15px" /></td>
				</tr>
				<tr>
					<td class="left50px" style="width: 50%">Địa chỉ:</td>
					<td class="left50px" style="width: 50%">
					<input onkeyup="initTyper(this);" name="post[diachi]" type="text" style="width: 170px" value="<?php echo $_smarty_tpl->getVariable('diachi')->value;?>
" /></td>
				</tr>
				<tr>
					<td class="left50px" style="width: 50%">Mobile:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[mobile]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Tel:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[tel]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('tel')->value;?>
" />&nbsp;</td>
				</tr>
				<tr>
					<td class="left50px" style="width: 50%; height: 23px;">Ngày:</td>
					<td class="left50px" style="width: 50%; height: 23px;">
					<input name="post[ngay]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('ngay')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%; height: 23px;">Số 
					sim:</td>
					<td class="left50px" style="width: 50%; height: 23px;">
					<input name="post[sosim]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Giá nhập:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[gianhap]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('gianhap')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Giá bán:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[giaban]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('giaban')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Hoa hồng:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[hoahong]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('hoahong')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Phí khác:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[phikhac]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('phikhac')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Đại lý:</td>
					<td class="left50px" style="width: 50%">
					<select name="post[daily]">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('xvalue')->value,'output'=>$_smarty_tpl->getVariable('xname')->value,'selected'=>$_smarty_tpl->getVariable('xselect')->value),$_smarty_tpl);?>

					</select>&nbsp;</td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%">Xóa:</td>
					<td class="left50px" style="width: 50%">
					<input name="post[xoa]" style="width: 32px" value="<?php echo $_smarty_tpl->getVariable('xoa')->value;?>
" /></td>
				</tr>
				<tr class="b2">
					<td class="left50px" style="width: 50%; height: 23px;">Trạng 
					thái:</td>
					<td class="left50px" style="width: 50%; height: 23px;">
					<input name="post[trangthai]" style="width: 32px" value="<?php echo $_smarty_tpl->getVariable('trangthai')->value;?>
" /></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center">
					<input name="submit" type="submit" value="Cập nhập" class="go" />&nbsp;<input name="Reset1" type="reset" value="Làm lại" class="go" /><input name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" type="hidden"></td>
				</tr>
				</table>
			</form>
</div></div>

</body>
</html>
