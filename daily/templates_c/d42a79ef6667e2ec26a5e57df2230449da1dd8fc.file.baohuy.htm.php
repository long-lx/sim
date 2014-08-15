<?php /* Smarty version Smarty-3.0.7, created on 2012-04-01 11:10:57
         compiled from "./templates/baohuy.htm" */ ?>
<?php /*%%SmartyHeaderCode:1778009804f77d551c312b8-46878384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42a79ef6667e2ec26a5e57df2230449da1dd8fc' => 
    array (
      0 => './templates/baohuy.htm',
      1 => 1300902860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1778009804f77d551c312b8-46878384',
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
<script language="JavaScript1.2" src="../js/vietuni.js" type='text/javascript'></script>
<link type="text/css" href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/css/jquery-ui-1.8.9.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript"  language="javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/adminpc/admin.js" ></script>

<script language="JavaScript1.2" src="../js/vietuni.js" type='text/javascript'></script>

</head>

<body>

<form method="post" action="" onsubmit="return checktext();">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>Thông báo về việc khách hủy </a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

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
</legend>
		<div align="left">
		<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['text'];?>

		</div>
		</fieldset>
		</td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="b1">
				<td style="height: 22px" class="dv">
				Nội dung lý do</td>
			</tr>
			<tr class="b1">
				<td style="height: 22px" class="dv">
		<textarea onkeyup="initTyper(this);" name="post[text]" style="width: 257px; height: 59px" id="text" rows="1" cols="20"></textarea>
		<input type="hidden" name="post[nid]" value="<?php echo $_smarty_tpl->getVariable('nid')->value;?>
"/>	
		<input type="hidden" name="po[trangthai]" value="2"  /></td>
			</tr>
			<tr class="b1">
				<td style="height: 22px" class="dv">
				<input class="go" name="submit" type="submit" value="Submit"/>&nbsp;<input class="go" name="Reset1" type="reset" value="Reset"/></td>
			</tr>
			<tr class="menucx">
				<td style="height: 22px" class="style28">&nbsp;</td>
			</tr>
		</table>
		</div>
</form>
</body>
</html>

