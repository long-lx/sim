<?php /* Smarty version Smarty-3.0.7, created on 2013-05-29 09:05:25
         compiled from "./templates/thanhvienedit.htm" */ ?>
<?php /*%%SmartyHeaderCode:98097110051a5626519bb90-16365659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188859b2337a8d7fbf1d7ee632f35e3c478172ef' => 
    array (
      0 => './templates/thanhvienedit.htm',
      1 => 1369793123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98097110051a5626519bb90-16365659',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Sửa thành viên</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
			<form method="post" action="">
			<table style="width: 100%; " cellspacing="1" cellpadding="0">
				<td colspan="2">
						<div align="center">
							<b>Bộ gõ tiếng việ</b>t<input onfocus="setTypingMode(0)" type="radio" CHECKED value="OFF" name="switch">Tắt&nbsp;&nbsp;&nbsp;
							<input class="bvclass" onfocus="setTypingMode(1)" type="radio" value="TELEX" name="switch">Bật</div>
</td>
				<tr class="ui-widget-content">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Họ Và Tên:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input onkeyup="initTyper(this);" name="post[hovaten]" type="text" value="<?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
" style="height: 15px" /></p>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Địa chỉ:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input onkeyup="initTyper(this);" name="post[diachi]" type="text" style="width: 170px" value="<?php echo $_smarty_tpl->getVariable('diachi')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Tỉnh thành:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
						<p style="margin-left: 15px; margin-top: 0">
						<select name="post[city]" id="c2">
		<option value="" selected="">-- Tỉnh thành --</option>
		<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('cityn')->value,'output'=>$_smarty_tpl->getVariable('cityn')->value,'selected'=>$_smarty_tpl->getVariable('select')->value),$_smarty_tpl);?>

		</select></p>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Mobile:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[mobile]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content" style="display:none">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Tel:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[tel]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('tel')->value;?>
" />&nbsp;</p>
					</td>
				</tr>
				<tr style="display:none">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Fax:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[fax]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('fax')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Website:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[website]" type="text" value="<?php echo $_smarty_tpl->getVariable('website')->value;?>
" /></p>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Email:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[email]" type="text" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content" style="display:none">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>CMTNND:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[cmtnd]" type="text" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('cmtnd')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong style="color:#FF0000; font-weight:bold;">% Hoa hồng:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[pt]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('pt')->value;?>
" /></p>
					</td>
				</tr>
				<tr class="ui-widget-content">
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Tên đăng nhập:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[username]" style="width: 107px" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" /></p>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0"><strong>Mật khẩu:</strong></p>
					</td>
					<td style="width: 50%; height: 22px; text-align: left;">
					<p style="margin-left: 15px; margin-top: 0">
					<input name="post[password]" style="width: 107px" /></p>
					</td>
				</tr>
				<tr  class="ui-widget-content">
					<td style="width: 50%">
					<p style="margin-left: 15px; margin-top: 0"><strong>Quyền:</strong></p>
					</td>
					<td style="width: 50%">
					<p style="margin-left: 15px; margin-top: 0; text-align: left;">
					<select name="post[live]">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('value')->value,'output'=>$_smarty_tpl->getVariable('name')->value,'selected'=>$_smarty_tpl->getVariable('sele')->value),$_smarty_tpl);?>

					</select></p>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center">
					<input name="submit" type="submit" value="Cập nhập" class="go" />&nbsp;<input name="Reset1" type="reset" value="Làm lại" class="go" /></td>
				</tr>
				</table>
			</div></div>