<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 21:41:14
         compiled from ".\templates\giaodichtrongngay.htm" */ ?>
<?php /*%%SmartyHeaderCode:64335136040a4929a7-23312532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c499a6c8ce5bf7104f2cc42b632a2831d65d153' => 
    array (
      0 => '.\\templates\\giaodichtrongngay.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64335136040a4929a7-23312532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Giao Dịch Trong Ngày</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
						<table style="width: 100%" cellspacing="1">
							<tr style="height:35px" class="ui-widget-header">
								<td style="width: 1%; height: 22px;">
								<strong >STT</strong></td>
								<td style="width: 3%; height: 22px;" >
								<strong>SỐ SIM</strong></td>
								<td style="width: 7%; height: 22px;" >
								<strong>HỌ VÀ TÊN</strong></td>
								<td style="width: 10%; height: 22px;" >
								&nbsp;</td>
								<td style="width: 6%; height: 22px;" ><strong>GIÁ NHẬP</strong></td>
								<td style="width: 10%; height: 22px;" ><strong>GIÁ BÁN</strong></td>
								<td style="width: 10%; height: 22px;" >
								<strong>Đại lý</strong></td>
								<td style="width: 10%; height: 22px;" >
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
?>
							<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['class'];?>
">
								<td style="width: 1%; font-size: medium;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['stt'];?>
</td>
								<td style="width: 3%; font-size: medium;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['sosim'];?>
</td>
								<td style="width: 7%; font-size: medium;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['hovaten'];?>
</td>
								<td style="width: 10%; font-size: small;">
								<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['diachi'];?>
</td>
								<td style="width: 6%; font-size: medium;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['gianhap'];?>
</td>
								<td style="width: 10%; font-size: medium;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['giaban'];?>
</td>
								<td style="width: 10%; font-size: small;">
								<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d1']['index']]['daily'];?>
</strong></td>
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
												</table>
						</div></div>
				
