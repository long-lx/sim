<?php /* Smarty version Smarty-3.0.7, created on 2013-03-13 11:32:54
         compiled from "./templates/download.htm" */ ?>
<?php /*%%SmartyHeaderCode:101479288251400176653548-95873376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0a2228df0cd4c42dee61002aa1d9c314122b14' => 
    array (
      0 => './templates/download.htm',
      1 => 1362711436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101479288251400176653548-95873376',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<table border="1px">
	<tr>
		<td style="width: 47px" align="center"><strong>STT</strong></td>
		<td style="width: 152px"><strong>Số Sim</strong></td>
		<td style="width: 128px"><strong>Giá Bán</strong></td>
		<td style="width: 121px"><strong>Thể Loại</strong></td>
		<td style="width: 107px"><strong>Mạng</strong></td>
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
	<tr>
		<td style="width: 47px" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
		<td style="width: 152px">&nbsp; <?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
</td>
		<td style="width: 128px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
</td>
		<td style="width: 121px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['loai'];?>
</td>
		<td style="width: 107px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mang'];?>
</td>
	</tr>
	<?php endfor; endif; ?>
	<tr>
		<td style="font-weight: 700;" align="center" colspan="5" class="style1">		
		<a target="_blank" href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
"><?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
</a><br>
		Hotline: <?php echo $_smarty_tpl->getVariable('my_hl1')->value;?>
 - <?php echo $_smarty_tpl->getVariable('my_hl2')->value;?>
 - <?php echo $_smarty_tpl->getVariable('my_hl3')->value;?>
<br>
		Email: <a href="mailto:<?php echo $_smarty_tpl->getVariable('my_email')->value;?>
"><?php echo $_smarty_tpl->getVariable('my_email')->value;?>
</a></td>
	</tr>
	</table>

