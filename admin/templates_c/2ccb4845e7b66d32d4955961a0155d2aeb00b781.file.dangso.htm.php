<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 21:47:15
         compiled from ".\templates\dangso.htm" */ ?>
<?php /*%%SmartyHeaderCode:502451360573bb77f0-88697456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ccb4845e7b66d32d4955961a0155d2aeb00b781' => 
    array (
      0 => '.\\templates\\dangso.htm',
      1 => 1362494822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502451360573bb77f0-88697456',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\Program Files\VertrigoServ\www\sim\\libs\plugins\function.html_options.php';
?>﻿

<form method="post" enctype="application/x-www-form-urlencoded" action="" onsubmit="return admds()">

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Đăng số lên website</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

			<table style="width:100%" cellspacing="1">

				<tr>

					<td style="text-align:center">

					Hoặc&nbsp; copy 2 cột giá và số trong excel Paste vào đây </td>

				</tr>

				<tr>

					<td style="text-align:center">

					<textarea name="textsim" style="width: 297px; height: 282px"></textarea><br>

					<select name="select" id="select">

				

					<option selected="" value="0">Lựa chọn đại lý</option>

					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('oid')->value,'output'=>$_smarty_tpl->getVariable('oname')->value),$_smarty_tpl);?>


					</select>

					<br>

					<input name="c" type="checkbox" style="width: 20px" value="Y">Xóa 

					số nếu có trên website<br>

					<input name="donvi" type="radio" checked="checked" value="0">Định 

					dạng giá tiền chuẩn (1.000.000 = 1tr)

					<input name="donvi" type="radio" style="height: 20px" value="1">Viết 

					tắt (1.000 = 1tr)

					<input name="donvi" type="radio" style="height: 20px" value="2">Viết 

					tắt (1 = 1tr)</td>

				</tr>

				<tr>

					<td style="text-align: center">

					

					<input name="submit" type="submit" value="Đăng số" class="go">
					<input name="Reset1" type="reset" value="Làm lại" class="go"></td>

				</tr>

				</table>

		</div>

</div>

</form>

