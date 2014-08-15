<?php /* Smarty version Smarty-3.0.7, created on 2013-05-31 09:00:08
         compiled from "./templates/taive.htm" */ ?>
<?php /*%%SmartyHeaderCode:119591622651a804281fc708-52376757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e5d19ea54960f072108772e395bf8e860a2806f' => 
    array (
      0 => './templates/taive.htm',
      1 => 1362801750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119591622651a804281fc708-52376757',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿		<table style="border-style: solid; border-width: 1px;" cellspacing="1">
			<tr>
			<td style="width: 40px; height: 30px; text-align: center; background-color: #66C1FF; font-family: Arial, Helvetica, sans-serif;">
				<strong class="chucam">STT</strong></td>
			<td style="width: 100px; height: 30px; background-color: #66C1FF; text-align: center; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>NGÀY</strong></td>
			<td style="width: 120px; height: 30px; background-color: #66C1FF; text-align: center; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>SỐ SIM</strong></td>
			<td style="width: 100px; height: 30px; background-color: #66C1FF; text-align: left; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>GIÁ ĐẠI LÝ</strong></td>
			<td style="width: 120px; height: 30px; background-color: #66C1FF; text-align: left; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>GIÁ GIAO KHÁCH</strong></td>
			<td style="width: 40px; height: 30px; background-color: #66C1FF; text-align: center; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>CK</strong></td>
			<td style="width: 80px; height: 30px; background-color: #66C1FF; text-align: center; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>PHÍ PS</strong></td>
			<td style="width: 100px; height: 30px; background-color: #66C1FF; text-align: center; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>(+) (-)</strong></td>
			<td style="height: 30px; width: 120px; background-color: #66C1FF; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				<strong>GIAO DỊCH</strong></td>
			<td style="height: 30px; width: 120px; background-color: #66C1FF; font-family: Arial, Helvetica, sans-serif;" class="chucam">
				&nbsp;</td>
			</tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['name'] = 'd1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d1']['total']);
?> <tr>
			<td style="border-width: 1px; width: 40px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['stt'];?>
</strong></td>
			<td style="border-width: 1px; width: 100px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['ngay'];?>
</td>
			<td style="border-width: 1px; width: 120px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['sosim'];?>
</strong></td>
			<td style="border-width: 1px; width: 100px; text-align: left; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['gianhap'];?>
</strong></td>
			<td style="border-width: 1px; width: 120px; text-align: left; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['giaban'];?>
</strong></td>
			<td style="border-width: 1px; width: 40px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hoahong'];?>
%</td>
			<td style="border-width: 1px; width: 80px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['phikhac'];?>
</td>
			<td style="border-width: 1px; width: 100px; text-align: left; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['lai'];?>
</strong></td>
			<td style="border-width: 1px; width: 120px; font-size: x-small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['kieu'];?>
</td>
			<td style="border-width: 1px; width: 120px; font-size: x-small; font-family: Arial, Helvetica, sans-serif; color: #333333;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['daily'];?>
</td>
			</tr>
			<?php endfor; endif; ?> <tr>
			<td style="border-width: 1px; width: 40px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				<strong><span style="font-family: Arial, Helvetica, sans-serif">&nbsp;</span></strong></td>
			<td style="border-width: 1px; width: 100px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			<td style="border-width: 1px; width: 120px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				<strong><span style="font-family: Arial, Helvetica, sans-serif"><?php echo $_smarty_tpl->getVariable('so')->value;?>
 SIM</span></strong></td>
			<td style="border-width: 1px; width: 100px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				<strong><span style="font-family: Arial, Helvetica, sans-serif">&nbsp;<?php echo $_smarty_tpl->getVariable('tongnhap1')->value;?>
</span></strong></td>
			<td style="border-width: 1px; width: 120px; text-align: left; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			<td style="border-width: 1px; width: 40px; text-align: center; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			<td style="border-width: 1px; width: 80px; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			<td style="border-width: 1px; width: 100px; text-align: left; font-size: small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				<strong><span style="font-family: Arial, Helvetica, sans-serif">
				<?php echo $_smarty_tpl->getVariable('tonglai')->value;?>
</span></strong></td>
			<td style="border-width: 1px; width: 120px; font-size: x-small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			<td style="border-width: 1px; width: 120px; font-size: x-small; font-family: Arial, Helvetica, sans-serif; color: #333333; height: 30px; background-color: #E9E9E9;">
				&nbsp;</td>
			</tr>
			</table>