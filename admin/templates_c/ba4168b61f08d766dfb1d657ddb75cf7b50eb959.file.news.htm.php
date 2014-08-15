<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 22:08:35
         compiled from ".\templates\news.htm" */ ?>
<?php /*%%SmartyHeaderCode:3190551360a73dc6627-28885426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4168b61f08d766dfb1d657ddb75cf7b50eb959' => 
    array (
      0 => '.\\templates\\news.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3190551360a73dc6627-28885426',
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
		<a>Quản lý tin tức </a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td height="20">
		<table style="width: 100%">
			<tr>
				<td style="width: 689px">&nbsp;</td>
				<td style="width: 12%">
				<input onclick="window.location.href='?act=newsadd&domains=<?php echo $_smarty_tpl->getVariable('indexd')->value;?>
'" name="Button1" type="button" value="Thêm M&#7899;i" class="go">&nbsp;</td>
				<td style="width: 12%">
				<input name="submit" type="submit" value="C&#7853;p nh&#7853;p" class="go">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" id="table2" cellspacing="1">
			<tr class="ui-widget-content">
				<td width="4%" height="20" align="center">
				<p align="center"><b>STT</b></td>
				<td width="19%" height="20"><b>B&#7843;n tin</b></td>
				<td width="16%" height="20"><b>S&#7855;p X&#7871;p</b></td>
				<td width="6%" align="center" height="20"><b>S&#7917;a</b></td>
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
				<td width="19%" height="20" class="left50px">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['tieude'];?>
</td>
				<td width="16%" height="20">
				<input name="pot[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
]" type="text" style="width: 34px" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
"></td>
				<td width="6%" align="center" height="20">
				<a class="go" href="?act=newsedit&editid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">S&#7917;a</a></td>
				<td width="7%" align="center" height="20">
				<a class="go"  href="?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&delid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['tieude'];?>
')">Xóa</a></td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<td height="20" align="center" colspan="5"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</div></div>
