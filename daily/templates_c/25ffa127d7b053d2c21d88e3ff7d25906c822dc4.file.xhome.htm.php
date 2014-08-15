<?php /* Smarty version Smarty-3.0.7, created on 2011-05-29 11:01:26
         compiled from ".\templates\xhome.htm" */ ?>
<?php /*%%SmartyHeaderCode:126964de1b706b04717-12288688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ffa127d7b053d2c21d88e3ff7d25906c822dc4' => 
    array (
      0 => '.\\templates\\xhome.htm',
      1 => 1302154380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126964de1b706b04717-12288688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<script src="dcok.js" type="text/javascript"></script>
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Giao dịch</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

		<table style="width: 95%" cellspacing="0" cellpadding="0">
			<tr>
			<td>
				<table style="width: 100%" cellspacing="1">
					<tbody style="text-align: center">
					<tr class="ui-widget-header" style="height:30px; text-align: center;">
					<td style="width: 4%; height: 22px; text-align: left;">
						<strong>STT</strong></td>
					<td style="width: 10%; height: 22px;">
						<strong>NGÀY</strong></td>
					<td style="width: 9%; height: 22px;">
						<strong>SỐ SIM</strong></td>
					<td style="width: 10%; height: 22px;">
						<strong>GIÁ ĐẠI LÝ</strong></td>
					<td style="width: 10%; height: 22px;">
						<strong>GIÁ GIAO KHÁCH</strong></td>
					<td style="width: 5%; height: 22px;">
						<strong>CK</strong></td>
					<td style="width: 5%; height: 22px;">
						<strong>PHÍ PS</strong></td>
					<td style="width: 10%; height: 22px;">
						<strong>(+) (-)</strong></td>
					<td style="height: 22px; width: 11%;">
						<strong>GIAO DỊCH</strong></td>
					<td style="height: 22px; width: 7%;">
						<strong>BÁO</strong></td>
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
?> <tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['class'];?>
">
					<td style="width: 4%; text-align: center;">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['stt'];?>
</td>
					<td style="width: 10%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['ngay'];?>
</td>
					<td style="width: 9%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['sosim'];?>
</td>
					<td style="width: 10%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['gianhap'];?>
</td>
					<td style="width: 10%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['giaban'];?>
</td>
					<td style="width: 5%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hoahong'];?>
%</td>
					<td style="width: 5%">
						<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['phikhac'];?>
</strong></td>
					<td style="width: 10%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['lai'];?>
</td>
					<td style="width: 11%">
						<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['kieu'];?>
</td>
					<td style="width: 7%">
						<a href="aindex.php?act=baosai&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['id'];?>
" rel="lyteframe" title="Báo sai lệch" rev="width: 400px; height: 300px; scrolling: no;">
						Sai </a>/&nbsp;
						<a href="aindex.php?act=baohuy&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['id'];?>
" rel="lyteframe" title="Báo hủy" rev="width: 400px; height: 300px; scrolling: no;">
						Hủy</a></td>
					</tr>
					<?php endfor; endif; ?> <tr>
					<td colspan="10" style="height: 46px">
						<strong>&nbsp;Tính&nbsp;Đến
						<?php echo $_smarty_tpl->getVariable('dates')->value;?>
 Tổng đã bán: <?php echo $_smarty_tpl->getVariable('so')->value;?>
 Số, Tồng thu về: <?php echo $_smarty_tpl->getVariable('tongnhap1')->value;?>
&nbsp; 
						Đại lý thu về <?php echo $_smarty_tpl->getVariable('dailythu')->value;?>
&nbsp;&nbsp; <?php echo $_smarty_tpl->getVariable('my_add_web')->value;?>
 Thu Về: <?php echo $_smarty_tpl->getVariable('tonglai')->value;?>
</strong></td>
					</tr>
				</table></td>
			</tr>
		</table></div>
</div></div>