<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 11:03:28
         compiled from "./templates/simmoive.htm" */ ?>
<?php /*%%SmartyHeaderCode:1079048631513ab49082d147-55631874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4b030abda7d7de8bec53ded4042167ea364eaf' => 
    array (
      0 => './templates/simmoive.htm',
      1 => 1362801803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079048631513ab49082d147-55631874',
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

		<a>Đăng số lên </a>sim mới về</li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

			<table style="width:100%" cellspacing="1">

				<tr>

					<td style="text-align:center">

					Hoặc&nbsp; copy 2 cột giá và số trong excel Paste vào đây </td>

				</tr>

				<tr>

					<td style="text-align:center">

					<textarea name="list" style="width: 297px; height: 282px"></textarea><br>

					<br>

					<input name="check" type="checkbox" style="width: 20px" value="1">Đăng 
					thêm<br>

					</td>

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
