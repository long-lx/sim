<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 11:16:58
         compiled from "./templates/giaodich.htm" */ ?>
<?php /*%%SmartyHeaderCode:1705536204513ab7ba69c295-82285416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1573a94105ead64f04601474621ac65ac353dee0' => 
    array (
      0 => './templates/giaodich.htm',
      1 => 1362802206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705536204513ab7ba69c295-82285416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿				

				<table style="width: 100%" cellspacing="0" cellpadding="0">
					<tr>
						<td style="height: 22px; width: 50%">
						<table style="width: 100%" cellspacing="0" cellpadding="0">
							<tr>
								<td colspan="3">
										<form method="GET">
										<input type="hidden" name="act" value="giaodich">
											<input name="v" type="checkbox" value="1"><input name="text" type="text">&nbsp;
											<input name="submit" type="submit" value="Tìm kiếm" class="go">&nbsp;&nbsp;&nbsp;
											<select name="Select1" onchange="window.location.href='index.php?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&daily='+this.options[selectedIndex].value+'';">
											<option value="0" selected="">Xem theo đại lý
											</option>
											<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('xvalues')->value,'output'=>$_smarty_tpl->getVariable('xnames')->value),$_smarty_tpl);?>

											</select>
											<input onclick="window.location.href='index.php?act=giaodich'" name="Button1" type="button" value="Mới" class="go">
											<input onclick="window.location.href='index.php?act=giaodich&daxoa=1'" name="Button2" type="button" value="Đã Xóa" class="go"> <input onclick="window.location.href='aindex.php?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&in=1'" name="Button3" type="button" value="IN Giao dịch" class="go"><input onclick="window.location.href='aindex.php?<?php echo $_smarty_tpl->getVariable('urls')->value;?>
'" name="Button4" type="button" value="Xuất Excel" class="go"></form>
										&nbsp;</td>
							</tr>
					
						</table>
						</td>
				
					</tr>
					<tr class="chudam">
						<td valign="top">
						<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Thống kê giao dịch</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

						<table style="width: 100%" cellspacing="1">
							<tr class="ui-widget-header" style="height:40px">
								<td style="width: 5%; height: 22px;">
								<strong>STT</strong></td>
								<td style="width: 10%; height: 22px;"><strong>NGÀY</strong></td>
								<td style="width: 15%; height: 22px;">
								<strong>NGƯỜI MUA</strong></td>
								<td style="width: 15%; height: 22px;"><strong>SỐ SIM</strong></td>
								<td style="width: 10%; height: 22px;"><strong>GIÁ NHẬP</strong></td>
								<td style="width: 10%; height: 22px;"><strong>GIÁ BÁN</strong></td>
								<td style="width: 5%; height: 22px;"><strong>CK</strong></td>
								<td style="width: 5%; height: 22px;">
								<strong>PK</strong></td>
								<td style="width: 10%; height: 22px;"><strong>TIỀN LÃI</strong></td>
								<td style="height: 22px; width: 10%;"><strong>BÁO</strong></td>
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
" style="height:22px;">
								<td style="width: 5%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['stt'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['ngay'];?>
</td>
								<td style="width: 15%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hovaten'];?>
</td>
								<td style="width: 15%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['sosim'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['gianhap'];?>
</td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['giaban'];?>
</td>
								<td style="width: 5%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hoahong'];?>
%</td>
								<td style="width: 5%"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['phikhac'];?>
</strong></td>
								<td style="width: 10%"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['lai'];?>
</td>
								<td style="width: 10%"><a href="../daily/aindex.php?act=baosai&id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['id'];?>
" rel="lyteframe" title="Báo sai lệch" rev="width: 400px; height: 300px; scrolling: no;">
						Báo </a>
							<?php if ($_smarty_tpl->getVariable('admins')->value==1){?>
								/<a href="aindex.php?act=giaodichedit&id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['id'];?>
" rel="lyteframe" title="Sửa giao dịch" rev="width: 400px; height: 420px; scrolling: yes;">Sửa 
								</a>/&nbsp; 
								<a onclick="return conf('giao dịch của <?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hovaten'];?>
')" href="index.php?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&del=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['id'];?>
">Xóa</a>
								<?php }?>
								</td>
							</tr>
							<?php endfor; endif; ?>
							<tr >
								<td colspan="10"><strong>Tổng đã bán : 
								<?php echo $_smarty_tpl->getVariable('tongnhap1')->value;?>
&nbsp;&nbsp; Tổng lãi: <?php echo $_smarty_tpl->getVariable('tonglai')->value;?>
</strong></td>
							</tr>
							<tr>
								<td colspan="10" align="center"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
							</tr>
						</table>
						</div></div>
						</td>
						
					</tr>
				</table>
				
