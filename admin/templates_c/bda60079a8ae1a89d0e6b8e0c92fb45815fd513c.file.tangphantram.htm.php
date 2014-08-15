<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 11:03:33
         compiled from "./templates/tangphantram.htm" */ ?>
<?php /*%%SmartyHeaderCode:1635436086513ab4957c6121-46178150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda60079a8ae1a89d0e6b8e0c92fb45815fd513c' => 
    array (
      0 => './templates/tangphantram.htm',
      1 => 1362801724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635436086513ab4957c6121-46178150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿

<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Cài đặt tăng phần trăm tự động</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">


<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">

	<tr>

		<td>

		<table border="0" width="100%" id="table2" cellspacing="1">

			<tr>

				<td height="20" align="center" colspan="5">

											<select name="Select1" onchange="window.location.href='index.php?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&daily='+this.options[selectedIndex].value+'';">

											<option selected="">Xem theo đại lý

											</option>

											<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('xvalues')->value,'output'=>$_smarty_tpl->getVariable('xnames')->value,'selected'=>$_smarty_tpl->getVariable('sl')->value),$_smarty_tpl);?>


											</select>ĐK1<input name="post[dk1]" type="text" style="width: 82px">&nbsp;ĐK2<input name="post[dk2]" type="text" style="width: 82px">Phần 

				trăm<input name="post[phantram]" type="text" style="width: 29px"><input name="submit" type="submit" value="Thêm" class="go"></td>

			</tr>

			<tr class="ui-widget-header">

				<td width="4%" height="20" align="center">

				<p align="center" style="font-weight: 700">STT</td>

				<td width="19%" height="20"><b>Điều kiện (&gt;)</b></td>

				<td width="16%" height="20">Điều kiện 2 (&lt;=)</td>

				<td height="20" style="width: 15%">Phần trăm 

				tăng</td>

				<td width="6%" align="center" height="20" style="width: 15%"><b>

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
">

				<td width="4%" height="20" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>

				<td width="19%" height="20">

				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dk1'];?>
</td>

				<td width="16%" height="20">

				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dk2'];?>
</td>

				<td height="20" style="width: 15%">

				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['phantram'];?>
%</td>

				

				<td width="7%" align="center" height="20">

				<a  href="?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&ptid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dk2'];?>
 >= Gía ><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dk1'];?>
')">Xóa</a></td>

			</tr>

			<?php endfor; endif; ?>

			</table>

		</td>

	</tr>

</table>

</div>
</div>

