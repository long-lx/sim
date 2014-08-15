<?php /* Smarty version Smarty-3.0.7, created on 2013-04-14 21:38:50
         compiled from "./templates/menuedit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1565022591516abf7a8cc2d1-68942570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d9aafd305a03a1f6b129edf20ce86cefb5776a' => 
    array (
      0 => './templates/menuedit.htm',
      1 => 1365950326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1565022591516abf7a8cc2d1-68942570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Chỉnh sửa menu </a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" id="table2" cellspacing="1">
			<tr>
				<td width="50%" height="20" style="text-align: left">
				<p style="text-align: left"><b>Tên menu:</b></td>
				<td width="50%" height="20" style="text-align: left">
				<p align="left" style="text-align: left">
				<input type="text" name="menu" size="20" value="<?php echo $_smarty_tpl->getVariable('menu')->value;?>
"></td>
			</tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('stt')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
			<?php endfor; endif; ?>
			<tr >
				<td width="50%" height="20" style="text-align: left">
				<p style="text-align: left"><b>Module link tới:</b></td>
				<td width="50%" height="20" style="text-align: left">
				<input type="text" name="post[mmd]" size="20" value="<?php echo $_smarty_tpl->getVariable('mmd')->value;?>
"></td>
			</tr>
			<tr>
				<td width="50%" height="20" style="text-align: left">
				<p style="text-align: left"><b>Thứ tự hiển thi:</b></td>
				<td width="50%" height="20" style="text-align: left">
				<input type="text" name="post[moder]" size="20" value="<?php echo $_smarty_tpl->getVariable('moder')->value;?>
" style="width: 49px"></td>
			</tr>
			<tr >
				<td width="50%" style="text-align: left">
				Thư mục</td>
				<td width="50%" style="text-align: left">
				<select size="1" name="post[mgr]">
				<option selected value="0">Chuyên mục root</option>
				<?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->getVariable('tenmuc')->value,'values'=>$_smarty_tpl->getVariable('cid')->value,'selected'=>$_smarty_tpl->getVariable('sl')->value),$_smarty_tpl);?>

				</select></td>
			</tr>
			</table>
		<p align="center">
		<input  type="submit" value="Sửa chữa" name="submit" class="go">  </td>
	</tr>
</table>


</div></div></form>
