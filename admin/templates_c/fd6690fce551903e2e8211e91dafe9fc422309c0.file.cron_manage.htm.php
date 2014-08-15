<?php /* Smarty version Smarty-3.0.7, created on 2012-03-25 01:15:22
         compiled from "./templates/cron_manage.htm" */ ?>
<?php /*%%SmartyHeaderCode:21155931614f6e0f3aa3d393-68000789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd6690fce551903e2e8211e91dafe9fc422309c0' => 
    array (
      0 => './templates/cron_manage.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21155931614f6e0f3aa3d393-68000789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿
<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Quản lý Cron</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" id="table2" cellspacing="1">
			<tr class="ui-widget-content" style="height:35px">
				<td width="4%" height="20" align="center">
				&nbsp;</td>
				<td height="20" style="width: 7%">&nbsp;</td>
				<td height="20" style="width: 7%">&nbsp;</td>
				<td height="20" style="width: 17%">&nbsp;</td>
				<td width="19%" height="20">&nbsp;</td>
				<td width="6%" align="center" height="20">&nbsp;</td>
				<td width="7%" align="center" height="20">&nbsp;</td>
				<td width="7%" align="center" height="20"> <a class="go" style="font:small-caption; float:right" href="aindex.php?act=add_cron" rel="lyteframe[catalog]" title="Thêm Cron" rev="width: 500px; height: 500px; scrolling: no;">
		Add</a></td>
			</tr>
			<tr class="ui-widget-header" style="height:35px">
				<td width="4%" height="20" align="center">
				<p align="center"><b>STT</b></td>
				<td height="20" style="width: 7%"><strong>Thời gian</strong></td>
				<td height="20" style="width: 7%"><strong>Còn Lại</strong></td>
				<td height="20" style="width: 17%"><strong>To:</strong></td>
				<td width="19%" height="20"><strong>Nội dung</strong></td>
				<td width="6%" align="center" height="20">Trạng Thái</td>
				<td width="7%" align="center" height="20">Kiểu</td>
				<td width="7%" align="center" height="20"><b>Xóa</b></td>
			</tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
" style="height:22px">
				<td width="4%" height="20" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['st'];?>
</td>
				<td height="20" style="width: 7%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_date'];?>
</td>
				<td height="20" style="width: 7%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_end'];?>
</td>
				<td height="20" style="width: 17%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_to'];?>
</td>
				<td width="19%" height="20" class="left50px">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_msg'];?>
</td>
				<td width="6%" align="center" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_staus'];?>
</td>
				<td width="7%" align="center" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['cr_type'];?>
</td>
				<td width="7%" align="center" height="20">
				<a class="go"  href="?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&delid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['tieude'];?>
')">Xóa</a></td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<td height="20" align="center" colspan="8"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</div></div>
