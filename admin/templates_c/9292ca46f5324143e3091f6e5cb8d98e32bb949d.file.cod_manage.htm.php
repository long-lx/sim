<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 11:34:45
         compiled from "./templates/cod_manage.htm" */ ?>
<?php /*%%SmartyHeaderCode:185000913513abbe5195e16-92956403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9292ca46f5324143e3091f6e5cb8d98e32bb949d' => 
    array (
      0 => './templates/cod_manage.htm',
      1 => 1362802412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185000913513abbe5195e16-92956403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Quản lý Cod</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="0" width="100%" id="table2" cellspacing="1">
			<tr class="ui-widget-content" style="height:35px">
				<td height="20" align="center" style="width: 2%">&nbsp;
				</td>
				<td height="20" style="width: 1%">&nbsp;</td>
				<td height="20" style="width: 3%">&nbsp;</td>
				<td height="20" style="width: 3%">&nbsp;</td>
				<td height="20" style="width: 3%">&nbsp;</td>
				<td width="6%" align="center" height="20" colspan="5">&nbsp;<a class="go" href="index.php?act=cod_manage">Mới</a> <a class="go" href="index.php?act=cod_manage&amp;type=2">Đã có</a>   <a class="go" href="index.php?act=cod_manage&amp;type=3">Đã nhận tiền</a><a class="go" style="font:small-caption; float:right" href="aindex.php?act=add_cod" rel="lyteframe[catalog]" title="Thêm Cron" rev="width: 500px; height: 500px; scrolling: no;">Add</a>
				<a href="index.php?act=cod_manage&amp;type=4" class="go">Thùng rác</a></td>
				<td align="center" height="20" style="width: 3%">&nbsp; </td>
			</tr>
			<tr class="ui-widget-header" style="height:35px">
				<td height="20" align="center" style="width: 2%">
				<p align="center"><b>STT</b></td>
				<td height="20" style="width: 1%"><strong>Ngày chuyển</strong></td>
				<td height="20" style="width: 3%"><strong>Số Sim</strong></td>
				<td height="20" style="width: 3%"><strong>Gía tiền</strong></td>
				<td height="20" style="width: 3%"><strong>Phone</strong></td>
				<td width="6%" align="center" height="20">Mã bưu phẩm</td>
				<td align="center" height="20" style="width: 5%">&nbsp;</td>
				<td width="7%" align="center" height="20">Đã chuyển&nbsp;</td>
				<td align="center" height="20" style="width: 4%"><strong>Cảnh báo</strong></td>
				<td width="7%" align="center" height="20">&nbsp;</td>
				<td align="center" height="20" style="width: 3%">&nbsp;</td>
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
				<td height="20" align="center" style="width: 2%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['st'];?>
</td>
				<td height="20" style="width: 1%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['ngaychuyen'];?>
</td>
				<td height="20" style="width: 3%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</td>
				<td height="20" style="width: 3%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
</td>
				<td height="20" style="width: 3%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['phone'];?>
</td>
				<td width="6%" align="center" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mabuu'];?>
</td>
				<td align="center" height="20" style="width: 5%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sms'];?>
</td>
				<td width="7%" align="center" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dachuyen'];?>
&nbsp; Ngày</td>
				<td align="center" height="20" style="width: 4%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['canhbao'];?>
</td>
				<td width="7%" align="center" height="20"> 
				<a class="go" href="aindex.php?act=edit_cod&id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" rel="lyteframe[catalog]" title="Sửa" rev="width: 500px; height: 500px; scrolling: no;">Sửa</a></td>
				<td align="center" height="20" style="width: 3%"> 
				<input name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">&nbsp;</td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
" style="height:22px">
				<td height="20" align="center" style="width: 2%"></td>
				<td height="20" style="width: 1%"></td>
				<td height="20" style="width: 3%"></td>
				<td height="20" style="width: 3%"><strong><?php echo $_smarty_tpl->getVariable('tongtien')->value;?>
</strong></td>
				<td height="20" style="width: 3%"></td>
				<td width="6%" align="center" height="20"></td>
				<td align="center" height="20" style="width: 5%"></td>
				<td width="7%" align="center" height="20" colspan="4">
                	<input name="daco" type="submit" value="Đã có" class="go" style="height: 26px">&nbsp;<input name="danhan" type="submit" value="Đã Nhận Tiền" class="go">
					<input name="thungrac" type="submit" value="Xóa" class="go">
                </td>
			</tr>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<td height="20" align="center" colspan="11"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</div></div>

