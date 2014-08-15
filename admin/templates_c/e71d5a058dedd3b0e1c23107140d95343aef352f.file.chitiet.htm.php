<?php /* Smarty version Smarty-3.0.7, created on 2013-04-14 21:57:56
         compiled from "./templates/chitiet.htm" */ ?>
<?php /*%%SmartyHeaderCode:1019591760516ac3f4997fb1-98723295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71d5a058dedd3b0e1c23107140d95343aef352f' => 
    array (
      0 => './templates/chitiet.htm',
      1 => 1365951471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1019591760516ac3f4997fb1-98723295',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" language="javascript" src="../ajax.js"></script>
<link type="text/css" href="../css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>

<script type="text/javascript" language="javascript" src="admin.js"></script>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script type="text/javascript" src="script.js"></script>
<?php echo $_smarty_tpl->getVariable('notes')->value;?>

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Chi tiết đơn hàng</a> </li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content">
		<table border="0" width="100%" cellspacing="1">
			<tr>
				<td>
				<table style="width: 100%;" cellspacing="0">
					<tr>
						<td>
						<table style="width: 100%" cellspacing="1">
							<tbody style="text-align: center">
								<tr class="ui-widget-header" style="height: 25px">
									<td style="height: 22px; width: 10%;">
									<strong>STT</strong></td>
									<td style="height: 22px; width: 40%;">
									<strong>Số sim</strong></td>
									<td style="width: 30%; height: 22px">
									<strong>Giá tiền</strong></td>
									<td style="width: 20%; height: 22px">
									<strong>Hành động</strong></td>
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
								<tr class="ui-widget-content" style="text-align: center">
									<td style="height: 33px; width: 10%;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
									<td style="height: 33px; width: 40%;">
									<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</strong></td>
									<td style="width: 30%; height: 33px">
									<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giatien'];?>
</strong></td>
									<td style="width: 20%; height: 33px">
									<table style="width: 100%; height: 100%">
										<tr>
											<td style="width: 40%; height: 29px;">
											<a class="go" href="aindex.php?act=chuyen&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">
											Chuyển</a></td>
											<!--<td style="width: 30%; height: 29px;">
											<a id="addnt" class="go" href="add_note.php?id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
">
											note</a></td>-->
											<td style="width: 30%; height: 29px;">
											<a class="go" href="index.php?act=chitiet&id=<?php echo $_smarty_tpl->getVariable('del')->value;?>
">
											Xóa</a></td>
										</tr>
									</table>
									</td>
								</tr>
								<?php endfor; endif; ?> <?php if ($_smarty_tpl->getVariable('tongsim')->value!=1){?>
								<tr class="ui-widget-content">
									<td style="height: 22px; width: 10%;">&nbsp;</td>
									<td style="height: 22px; width: 40%;">
									<strong>Tổng sim <?php echo $_smarty_tpl->getVariable('tongsim')->value;?>
 Số</strong></td>
									<td style="height: 22px" colspan="2">
									<strong>Tổng tiền <?php echo $_smarty_tpl->getVariable('tongtien')->value;?>
 (VNĐ)</strong></td>
								</tr>
								<?php }?>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top">
						<table style="width: 100%" class="ui-widget-content">
							<tr class="ui-widget-header" style="height: 25px">
								<td colspan="2"><strong>Thông tin khách hàng</strong></td>
							</tr>
							<tr>
								<td style="width: 40%">Họ Và Tên:</td>
								<td style="width: 60%"><strong><!--<?php echo $_smarty_tpl->getVariable('data')->value[0]['hovaten'];?>
-->
								</strong></td>
							</tr>
							<tr>
								<td style="width: 40%">Địa chỉ:</td>
								<td style="width: 60%"><strong><?php echo $_smarty_tpl->getVariable('data')->value[0]['diachi'];?>
</strong></td>
							</tr>
							<tr>
								<td style="width: 40%">Điện thoại:</td>
								<td style="width: 60%"><strong><?php echo $_smarty_tpl->getVariable('data')->value[0]['dienthoai'];?>
</strong></td>
							</tr>
							<tr>
								<td style="width: 40%">Email:</td>
								<td style="width: 60%"><strong><?php echo $_smarty_tpl->getVariable('data')->value[0]['email'];?>
</strong></td>
							</tr>
							<tr>
								<td style="text-align: center; font-weight:bold; font-size:14px;" colspan="2">
								Đại lý cung cấp: <font color="#FF0000"><?php echo $_smarty_tpl->getVariable('data')->value[0]['daily'];?>
&nbsp;</font></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		<!--<form method="post">
			<div style="text-align: center">
				<textarea name="txt" style="width: 216px; height: 87px">So <?php echo $_smarty_tpl->getVariable('data')->value[0]['sosim'];?>
 Ben em ko con anh/chi vui long chon so khac
Xin Cam on!
www.<?php echo $_smarty_tpl->getVariable('data')->value[0]['mydomain'];?>

</textarea><br />
				<input type="hidden" name="mobile" type="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[0]['dienthoai'];?>
" />
				<br />
				<input name="submit" type="submit" value="Gửi Tin nhắn tới <?php echo $_smarty_tpl->getVariable('data')->value[0]['dienthoai'];?>
" class="go" style="font-weight: bold" /></div>
		</form>-->
	</div>
</div>

<!--<div style="text-align: center">

<a class="go" href="aindex.php?act=add_cron&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[0]['id'];?>
">Tạo cron </a> | <a class="go" href="aindex.php?act=chitiet&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[0]['id'];?>
&amp;set=1">Chưa giao dịch</a> | 
<a href="aindex.php?act=nhantin&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[0]['id'];?>
" class="go">Nhắn tin </a>
&nbsp; 
<a href="aindex.php?act=nhantin&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[0]['id'];?>
&kiemtra=1" class="go">Kiểm Tra</a></div>-->
