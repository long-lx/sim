<?php /* Smarty version Smarty-3.0.7, created on 2011-05-27 11:09:42
         compiled from "./templates/dangso.htm" */ ?>
<?php /*%%SmartyHeaderCode:14742864294ddf2406a62a61-33822672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575843f34275c24e35901a91ff9798bb5fe7e91b' => 
    array (
      0 => './templates/dangso.htm',
      1 => 1301972066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14742864294ddf2406a62a61-33822672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿

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

					&nbsp;<br>

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

