<?php /* Smarty version Smarty-3.0.7, created on 2011-05-24 00:29:22
         compiled from "./templates/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:10626278584dda99727e53a3-42699222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392c227f1c93bb5c160057a309217e6bb3639f8c' => 
    array (
      0 => './templates/header.htm',
      1 => 1306171718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10626278584dda99727e53a3-42699222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hệ thống dành cho đại lý</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="../lytebox.css" type="text/css" media="screen" />
<link type="text/css" href="http://muabansimdep.vn/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="http://muabansimdep.vn/js/jquery-1.5.1.min.js"></script>

<script type="text/javascript" src="http://muabansimdep.vn/js/jquery-ui-1.8.13.custom.min.js"></script><script type="text/javascript"  language="javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/adminpc/admin.js" ></script>

<script src="../ajax.js" type="text/javascript">
</script>
<script type="text/javascript" language="javascript" src="../lytebox.js"></script>
</head>

<body>

<div style="position: absolute; width: 1px; height: 1px; z-index: 1; left: -60px; top: -60px" id="main">
	<table style="width: 100%; height: 100%;">
		<tr>
			<td valign="baseline" align="center">
			<table style="width: 100%; height: 100%;">
				<tr>
					<td style="height: 22px; background-color:white" align="right">
					<a href="javascript:wdc()"><span style="color:red; font-weight:bolder">Đóng cửa sổ</span></a> </td>
				</tr>
				<tr>
					<td>
					<div id="mv">
					</div>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>
<div align="center">
<table style="width: 100%" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td class="dv" align="center">
		<table style="width: 100%" cellspacing="0" cellpadding="0">
			<tr>
				<td class="style1">
				<div align="right">
				<table style="width: 75%" cellspacing="1">
					<tr class="ui-widget-header" style="height:30px">
						<td style="text-align: center" ><a href="index.php">
							Thống kê</a></td>
						<td style="text-align: center" ><a href="?act=dangso">
														Đăng số</a></td>
						<td style="text-align: center" ><a href="?act=quanlyso">
							Quản lý số</a></td>
						<td style="text-align: center" ><a href="?act=doimatkhau">
							Đổi mật khẩu</a></td>
						<td style="text-align: center" ><a href="logincheck.php?act=logoff">
							Thoát</a></td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr>
				<td valign="top" align="center">
