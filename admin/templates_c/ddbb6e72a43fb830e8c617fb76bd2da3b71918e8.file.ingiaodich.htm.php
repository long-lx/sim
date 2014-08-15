<?php /* Smarty version Smarty-3.0.7, created on 2013-04-11 12:55:56
         compiled from "./templates/ingiaodich.htm" */ ?>
<?php /*%%SmartyHeaderCode:20752236845166506c365766-55346323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddbb6e72a43fb830e8c617fb76bd2da3b71918e8' => 
    array (
      0 => './templates/ingiaodich.htm',
      1 => 1362802166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20752236845166506c365766-55346323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿						<table style="width: 100%" cellspacing="0" border="1" class="bo2">
							<tr class="b2">
								<td style="height: 22px;" colspan="9" align="center">
								<strong>THỐNG KÊ NHẬP XUẤT&nbsp; CẬP NHẬP NGÀY 
								<?php echo $_smarty_tpl->getVariable('date')->value;?>
</strong></td>
							</tr>
							<tr class="b2">
								<td style="width: 4%; height: 22px;">
								<strong class="chucam">STT</strong></td>
								<td style="width: 10%; height: 22px;" class="chucam"><strong>NGÀY</strong></td>
								<td style="width: 15%; height: 22px;" class="chucam">
								<strong>NGƯỜI MUA</strong></td>
								<td style="width: 15%; height: 22px;" class="chucam"><strong>SỐ SIM</strong></td>
								<td style="border-width: 1px; width: 12%; height: 22px;" class="chucam"><strong>GIÁ NHẬP</strong></td>
								<td style="width: 10%; height: 22px;" class="chucam"><strong>GIÁ BÁN</strong></td>
								<td style="width: 5%; height: 22px;" class="chucam"><strong>CK</strong></td>
								<td style="width: 5%; height: 22px;" class="chucam">
								<strong>PK</strong></td>
								<td style="border-width: 1px; width: 7%; height: 22px;" class="chucam"><strong>TIỀN LÃI</strong></td>
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
?>
							<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['class'];?>
">
								<td style="width: 4%" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['stt'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['ngay'];?>
</td>
								<td style="width: 15%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hovaten'];?>
</td>
								<td style="width: 15%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['sosim'];?>
</td>
								<td style="border-width: 1px; width: 12%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['gianhap'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['giaban'];?>
</td>
								<td style="width: 5%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hoahong'];?>
%</td>
								<td style="width: 5%"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['phikhac'];?>
</strong></td>
								<td style="border-width: 1px; width: 7%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['lai'];?>
</td>
							</tr>
							<?php endfor; endif; ?>
							<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['class'];?>
">
								<td style="width: 4%">&nbsp;</td>
								<td style="width: 10%">&nbsp;</td>
								<td style="width: 15%">&nbsp;</td>
								<td style="width: 15%">&nbsp;</td>
								<td style="border-width: 1px; width: 12%">&nbsp;</td>
								<td style="width: 10%">&nbsp;</td>
								<td colspan="2"><strong>
								<span class="style1">Tổng lãi:</span></strong></td>
								<td style="border-width: 1px; width: 7%"><strong>
								<span class="style1">&nbsp;<?php echo $_smarty_tpl->getVariable('tonglai')->value;?>
</span></strong></td>
							</tr>
							<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['class'];?>
">
								<td colspan="9" align="center"><strong>
								<a href="http://WWW.NGANHANGSIMSODEP.COM">
								WWW.NGANHANGSIMSODEP.COM</a></strong> <br>
								Email:
								<a href="mailto:nganhangsimsodep.com@gmail.com">
								nganhangsimsodep.com@gmail.com</a><br>
								Hotline: 0937.666.886 - 0986.77.8668 - 
								0914.77.9999<br>
								YM: vthy08</td>
							</tr>
							</table>
