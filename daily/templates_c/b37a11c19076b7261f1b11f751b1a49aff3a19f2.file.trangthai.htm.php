<?php /* Smarty version Smarty-3.0.7, created on 2012-04-01 11:16:56
         compiled from "./templates/trangthai.htm" */ ?>
<?php /*%%SmartyHeaderCode:17085427154f77d6b874a785-49189932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37a11c19076b7261f1b11f751b1a49aff3a19f2' => 
    array (
      0 => './templates/trangthai.htm',
      1 => 1300902872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17085427154f77d6b874a785-49189932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hệ thống dành cho đại lý</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="../ajax.js" type="text/javascript">
</script>
</head>

<body>

<form method="post" action="" onsubmit="return checktext();">
		<input type="hidden" name="po[trangthai]" value="2"  />
		<input type="hidden" name="post[nid]" value="<?php echo $_smarty_tpl->getVariable('nid')->value;?>
"/>	
<div align="center">
<table style="width: 100%" cellspacing="0" cellpadding="0">
	<tr>
		
		<td>
		<table style="width: 100%" cellspacing="0" cellpadding="0">
			<tr>
				<td>
										<img alt="" src="../images/bgd1.gif" /></td>
				<td class="style18x"><strong>Thông tin</strong></td>
				<td>
										<img alt="" src="../images/bgd2.gif" /></td>
			</tr>
		</table>
		</td>
		
	</tr>
	<tr>
		<td class="bo2">
		<form method="post" action="?act=dathangthanhcong&cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" onsubmit="return checkdk()">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="menu2">
		<table style="width: 100%" cellspacing="0" cellpadding="0">
			<tr>
				<td style="width: 213px">
										<img alt="" src="../images/bg1.gif" width="20" height="22" /></td>
				<td class="mainbg"><span style="color:white"><strong>Chi tiết đơn đặt hàng</strong></span></td>
				<td>
										<img alt="" src="../images/bg2.gif" width="20" height="22" /></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td class="timb">
		<table border="0" width="100%" cellspacing="1" bgcolor="#C0C0C0">
			<tr>
				<td bgcolor="#FFFFFF">
				<table style="width: 100%; " cellspacing="1" class="b2">
					<tr style="text-align: center; font-weight: 700">
						<td class="cl30" style="width: 50%; text-align: left;">Số sim</td>
						<td style="width: 50%; text-align: left;" class="cl30">
						Giá bán</td>
					</tr>
					<tr style="text-align: center; font-weight: 700" class="b2">
						<td class="b2" style="width: 50%; text-align: left;"><?php echo $_smarty_tpl->getVariable('sosim')->value;?>
</td>
						<td style="width: 50%; text-align: left;" class="b2">
						<?php echo $_smarty_tpl->getVariable('giaban')->value;?>
</td>
					</tr>
					<tr>
						<td class="cl30" style="width: 50%">&nbsp;</td>
						<td style="width: 50%" class="cl30">
						&nbsp;</td>
					</tr>
					<tr>
						<td class="cl30" style="width: 50%; text-align: left;">Họ và Tên: </td>
						<td style="width: 50%; text-align: left;" class="cl30">
						<?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
</td>
					</tr>
					<tr>
						<td class="cl30" style="width: 50%; text-align: left;">Địa chỉ: </td>
						<td style="width: 50%; text-align: left;" class="cl30">
						<?php echo $_smarty_tpl->getVariable('diachi')->value;?>
 <?php echo $_smarty_tpl->getVariable('city')->value;?>
</td>
					</tr>
					<tr>
						<td class="cl30" style="width: 50%; text-align: left;">Số di động: </td>
						<td style="width: 50%; text-align: left;" class="cl30">
						<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
</td>
					</tr>
					<?php if ($_smarty_tpl->getVariable('tel')->value){?>
					<tr>
						<td class="cl30" style="width: 50%; height: 21px; text-align: left;">Số máy bàn: </td>
						<td style="width: 50%; height: 21px; text-align: left;" class="cl30">
						<?php echo $_smarty_tpl->getVariable('tel')->value;?>
</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->getVariable('email')->value){?>
					<tr>
						<td class="cl30" style="height: 29px; width: 50%; text-align: left;">Email: </td>
						<td style="height: 29px; width: 50%; text-align: left;" class="cl30">
						<?php echo $_smarty_tpl->getVariable('email')->value;?>
</td>
					</tr>
					<?php }?>
					<?php if ($_smarty_tpl->getVariable('text')->value){?>
					<tr>
						<td colspan="2" class="dvc">
						
							Thông tin kèm theo</td>
					</tr>
					<tr>
						<td colspan="2" class="dvc">
						
							<?php echo $_smarty_tpl->getVariable('text')->value;?>
</td>
					</tr>
					<?php }?>
					</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</td>
	</tr>
	<tr>
		<td class="bo2">
		<table style="background-color:#EBEBEB; width:100%" cellspacing="1" cellpadding="0">
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
				<td style="height: 22px" class="dv">
						<fieldset name="Group1">
									<legend>Nguyên Văn Bởi: <?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['user'];?>
&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp; Viết 
		<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['time'];?>
&nbsp; <?php if ($_smarty_tpl->getVariable('admin')->value==1){?> <a href="aindex.php?<?php echo $_smarty_tpl->getVariable('c_url')->value;?>
&del=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
"> Xóa </a> <?php }?></legend>
		<div align="left" >
		<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['text'];?>

		</div>
		</fieldset>
		</td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="b1">
				<td style="height: 22px" class="dv"><div class="dv">
					</div>
</td>
			</tr>
			<tr class="menucx">
				<td style="height: 22px" class="style28">	
</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</div>
</form>
</body>
</html>

