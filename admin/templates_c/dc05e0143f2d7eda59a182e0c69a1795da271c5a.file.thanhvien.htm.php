<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 10:56:59
         compiled from "./templates/thanhvien.htm" */ ?>
<?php /*%%SmartyHeaderCode:2141449052513ab30b789df4-93075243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc05e0143f2d7eda59a182e0c69a1795da271c5a' => 
    array (
      0 => './templates/thanhvien.htm',
      1 => 1362801418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2141449052513ab30b789df4-93075243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿
<form method="get" action="">
<input name="act" value="thanhvien" type="hidden">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Thành Viên & đại lý</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table style="width: 100%">
			<tr>
				<td style="text-align: left"><input name="text" style="width:250px; height:20px;" type="text">&nbsp;<input name="search" type="submit" value="Tìm kiếm" class="go"></td>
				<td style="width: 10%">
				<input onclick="window.location.href='?act=thanhvienadd'" name="Button1" type="button" value="Thêm Mới" class="go">&nbsp;</td>
			</tr>
		</table>
		<table border="1" width="100%" id="table2" cellspacing="1" bgcolor="#FFFFFF" style="font-weight:bold;" >
			<tr class="ui-widget-header" style="height:40px">
				<td width="3%" align="center" style="height: 12px; font-weight: bold">
			  <p align="center">STT</td>
				<td width="25%" style="height: 12px"><b>Họ và tên</b></td>
				<td width="20%" style="height: 12px"><b>Mobile</b></td>
				<td width="5%" style="height: 12px"><b>Chiết khấu</b></td>
				<td width="7%" style="height: 12px"><b>Username</b></td>
				<td width="20%" style="height: 12px"><b>Email</b></td>
				<td width="20%" style="height: 12px"><b>Website</b></td>
				<td align="center" colspan="2" style="width: 15%; height: 12px;"><b>
				HĐ</b></td>
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
" style="height:22px; text-align:left;">
				<td width="3%" height="20" align="center" style="color:#FF0000; font-weight:normal;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
				<td width="25%" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['hovaten'];?>
</td>
				<td width="25%" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mobile'];?>
</td>
				<td width="5%" height="20" align="center" style="color:#FF0000;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['pt'];?>
&nbsp;%</td>
				<td width="7%" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['username'];?>
</td>
				<td width="20%" height="20">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['email'];?>
</td>
				<td width="20%" height="20" align="center">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['website'];?>
</td>
				<td width="10%" height="20" align="center">				
				  <a  class="go"href="?act=thanhvienedit&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">Sửa</a></td>
				<td width="10%" align="center" height="20">
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
</div>
