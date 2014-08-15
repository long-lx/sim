<?php /* Smarty version Smarty-3.0.7, created on 2012-03-24 19:46:08
         compiled from "./templates/mysms.htm" */ ?>
<?php /*%%SmartyHeaderCode:11785726744f6dc2105a37b8-07801302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7111b3d3a234a145640d08cfc234e19908066c' => 
    array (
      0 => './templates/mysms.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11785726744f6dc2105a37b8-07801302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="view"></div>
<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Quản lý tin nhắn</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td height="20">
		<table style="width: 100%">
			<tr>
				<td style="width: 294px; text-align: left;">
				<input name="search" type="text" style="height: 22px; width: 186px;"><input name="tim" type="submit" value="Tìm" class="go"></td>
				<td style="text-align: right;">
				<input onclick="window.location.href='index.php?act=mysms&type=0'" name="submit1" type="button" value="SEND" class="go"><input onclick="window.location.href='index.php?act=mysms&type=1'" name="submit2" type="button" value="Inbox" class="go"><input onclick="window.location.href='index.php?act=mysms&type=3'" name="submit0" type="button" value="Thùng rác" class="go"><input name="submit" type="submit" value="Cập nhập" class="go"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<table border="0" width="100%" id="table2" bgcolor="#EBEBEB" cellspacing="1">
			<tr class="chucam">
				<td width="4%" align="center" style="font-weight: bold; height: 20px;">
				<p align="center" style="font-weight: 700" class="style10">STT</td>
				<td class="style10" style="font-weight: bold; width: 14%; height: 20px;">
				Ngày giờ</td>
				<td class="style10" style="font-weight: bold; width: 7%; height: 20px;">
				To</td>
				<td class="style10" style="font-weight: bold; width: 42%; height: 20px;">
				Nội dung</td>
				<td class="style10" style="font-weight: bold; width: 9%; height: 20px;">
				Send</td>
				<td align="center" class="style10" colspan="4" style="width: 14%; height: 20px;">
				</td>
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
				<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['type']==1){?>
				<tr style="border:2 lime solid;background-color:#E4FBE3">
				<?php }else{ ?>		
				<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<?php }?>
				<td width="4%" height="20" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
				<td height="20" style="width: 14%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sdate'];?>
</td>
				<td height="20" style="width: 7%; text-align: left;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sto'];?>
</td>
				<td height="20" style="width: 42%; text-align: left;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['scontent'];?>
</td>
				<td height="20" style="width: 9%; text-align: center;">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['ssend'];?>
</td>
				<td width="7%" align="center" height="20">
				<a onclick="return conf2('Bạn muốn bỏ tin nhắn tới <?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sto'];?>
 vào thùng rác?');" href="<?php echo $_smarty_tpl->getVariable('my_url')->value;?>
&del=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">Xóa</a></td>
				<td width="7%" align="center" height="20">
				<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['staus']==1){?>
				<strong style="color: #008000">OK</strong>
				<?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sstaus']==0){?>
				<div id="v<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">
				<strong style="color: #FF9900">
				<span style="color: #FF00FF">Lỗi</span></strong></div>
				<?php }?>
				</td>
				<td align="center" height="20" style="width: 11%">
				<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['staus']==0){?>
				<strong><a onclick="$('#view').load('aindex.php<?php echo $_smarty_tpl->getVariable('my_url')->value;?>
&action=1&send=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
');" href="javascript:void(0)">
				SEND</a></strong><?php }?></td>
				<td width="7%" align="center" height="20">
				<input name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
"></td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<td height="20" align="center" colspan="9"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</div></div>
