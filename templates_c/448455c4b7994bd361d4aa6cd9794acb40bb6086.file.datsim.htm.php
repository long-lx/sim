<?php /* Smarty version Smarty-3.0.7, created on 2012-03-24 17:31:50
         compiled from "./templates/datsim.htm" */ ?>
<?php /*%%SmartyHeaderCode:17184690194f6da296b91ae2-19674723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '448455c4b7994bd361d4aa6cd9794acb40bb6086' => 
    array (
      0 => './templates/datsim.htm',
      1 => 1297709824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17184690194f6da296b91ae2-19674723',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<form method="post" action="dat-mua-sim-so-dep.html">
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default" style="width:100px">
		<a>Đặt mua sim</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content">
		<table border="0" width="100%" cellspacing="1">
			<tr>
				<td>
				Bạn nhập số bạn cần đặt mua rồi nhấn đặt mua:<table style="width: 100%">
					<tr>
						<td>
						<table style="width: 100%" cellspacing="0" cellpadding="0">
							<tr style="width: 50%">
								<td a align="right" style="height: 20px">
							
								</td>
								<td style="height: 20px">
								
								</td>
							</tr>
							<tr style="width: 50%">
								<td align="center" style="height: 25px; font-weight: 700;" colspan="2">
							
									Số bạn cần đặt: <input name="sosim" type="text">
																
									<input name="submit" type="submit" value="Đặt mua" class="sub">
								</td>
							</tr>
						
							<tr>
								<td align="right" colspan="2" class="dvc">
							<?php if ($_smarty_tpl->getVariable('mo')->value==1){?>
								<table style="width: 100%" cellspacing="1">
									<tr class="chucam">
										<td style="height: 22px" colspan="5">
										&nbsp;</td>
									</tr>
									<tr class="chucam">
										<td style="height: 22px" colspan="5">
										<strong>Số bạn cần mua hiện không có trên 
										website của chúng tôi.<br>
										</strong><strong>Bạn có thể lựa chọn những số gần giống 
										bên dưới</strong></td>
									</tr>
									<tr class="chucam">
										<td style="width: 7%; height: 22px" class="style10">
										<strong>STT</strong></td>
										<td style="width: 20%; height: 22px" class="style10">
										<strong class="chucam">Số Sim</strong></td>
										<td style="width: 20%; height: 22px" class="style10">
										<strong class="chucam">Giá Tiền</strong></td>
										<td style="width: 20%; height: 22px" class="style10">
										<strong class="chucam">Mạng</strong></td>
										<td style="width: 15%; height: 22px" class="style10">
										<strong class="chucam">Đặt Mua</strong></td>
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
										<td style="width: 7%" class="dv"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
										<td style="width: 20%" class="tampx">
										<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
</strong></td>
										<td style="width: 20%" class="tampx">
										<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
</td>
										<td style="width: 20%" class="dv">
										<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mang'];?>
</strong></td>
										<td style="width: 15%" class="dv">
										<strong>
										<a class="sub" href="dat-mua-sim-<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim2'];?>
-cid<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
.html">Đặt 
										Mua</a></strong></td>
									</tr>
									<?php endfor; endif; ?>
									
									<tr class="b2">
										<td class="dv" colspan="5">
										<?php echo $_smarty_tpl->getVariable('paging')->value;?>

										</td>
									</tr>
								</table>
								<?php }?>
								</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
			</table>
		
	</div></div>

		</form>