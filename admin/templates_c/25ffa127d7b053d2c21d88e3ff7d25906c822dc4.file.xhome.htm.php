<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 22:05:26
         compiled from ".\templates\xhome.htm" */ ?>
<?php /*%%SmartyHeaderCode:7432513609b6eb4e95-04506327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ffa127d7b053d2c21d88e3ff7d25906c822dc4' => 
    array (
      0 => '.\\templates\\xhome.htm',
      1 => 1362495926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7432513609b6eb4e95-04506327',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_select_date')) include 'C:\Program Files\VertrigoServ\www\sim\\libs\plugins\function.html_select_date.php';
if (!is_callable('smarty_function_html_options')) include 'C:\Program Files\VertrigoServ\www\sim\\libs\plugins\function.html_options.php';
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form method="get" action="">
<input type="hidden" name="act" value="buy">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<div align="center" id="main">
	<table style="width: 100%" cellspacing="0" cellpadding="0">
		<tr>
			
			<td class="ui-widget-header">
			<table style="width: 100%" cellspacing="0" cellpadding="0">
				<tr>
					<td width="92">
					<input onclick="this.value=''" type="text" name="fullname" size="26" value="Họ Và tên khách hàng"></td>
					<td>
					<input onclick="this.value=''" type="text" name="number" size="26" value="Số Đặt / Điện Thoại" style="width: 121px"> <b>Theo ngày:<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>
</b> <font color="#FFFF00">
					<select name="ncity">
					<option value="0" selected="selected">Thành Phố</option>
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('citys')->value,'output'=>$_smarty_tpl->getVariable('citys')->value),$_smarty_tpl);?>

					</select>
					<input type="submit" value="Show" name="type" class="go" style="height: 26px">&nbsp;
					<input onclick="window.location.href='<?php echo $_smarty_tpl->getVariable('my_url_query')->value;?>
&group=1'" type="button" value="Group" name="type0" class="go" style="height: 26px">&nbsp;
					<input onclick="window.location.href='index.php?act=buy&rac=1'" type="button" value="Đã xóa" name="rac" class="go" style="height: 26px"></font></td>
					<td>&nbsp;
				</td>
				</tr>
			</table>
			</td>
			
		</tr>
		<tr>
			<td align="center">

<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="0">
	<tr>
		<td>
		<table border="1" width="100%" id="table2" cellspacing="1">
			<tr class="ui-widget-header" align="center">
				<td width="4%" height="20" align="center">
				<p align="center" style="font-weight: 700">STT</td>
				<td height="20" style="width: 16%"><strong>Ngày Giờ Đặt</strong></td>
				<td height="20" style="width: 15%"><strong>Người mua</strong></td>
				<td height="20" style="width: 13%"><strong>Mobile</strong></td>
				<td height="20" style="width: 14%"><strong>Tỉnh
				</strong><strong>thành</strong></td>
				<td width="16%" height="20"><b>Số sim</b></td>
				<td height="20" style="width: 14%"><strong>Giá tiền</strong></td>
				<td width="6%" align="center" height="20" colspan="3" style="width: 15%"></td>
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
" style="height:22px">
				<td width="4%" height="20" align="center"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
				<td height="20" style="width: 16%">
				&nbsp;<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['ngaygio'];?>
</td>
				<td height="20" style="width: 15%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['hovaten'];?>
</td>
				<td height="20" style="width: 13%">
				<em><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dienthoai'];?>
</em></td>
				<td height="20" style="width: 14%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['city'];?>
</td>
				<td width="16%" height="20">
				<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['trangthai']==1){?>
				<font color="#CC9900"><strong><span class="style1"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</span></strong></font>
				<?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['trangthai']==2){?>
				<font color="#0066FF"><span class="style1"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</strong></span></font>
				<?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['trangthai']==4){?>
				<font color="#CCCCCC"><strong><span class="style1"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</span></strong></font>
				<?php }else{ ?>
				<strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sosim'];?>
</strong>
				<?php }?>
				
				<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['notes']>0){?>(<span class="style1" style="color: #FF0000"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['notes'];?>
</strong></span>)<?php }?></td>
				<td height="20" style="width: 14%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giatien'];?>
</td>
				<td align="center" height="20" style="width: 17%">
				<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mydomain'];?>
</td>
				<td width="6%" align="center" height="20">
				<a class="go" style="font:small-caption" href="aindex.php?act=chitiet&id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" rel="lyteframe[catalog]" title="Thông tin đơn đặt hàng" rev="width: 500px; height: 500px; scrolling: no;">Xem</a></td>
				<td width="6%" align="center" height="20">
				<a class="go"  href="<?php echo $_smarty_tpl->getVariable('my_url_query')->value;?>
&delid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id'];?>
" onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['hovaten'];?>
')">Xóa</a></td>
			</tr>
			<?php endfor; endif; ?>
			<tr class="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['class'];?>
">
				<td height="20" align="center" colspan="10"><?php echo $_smarty_tpl->getVariable('paging')->value;?>
</td>
			</tr>
			</table>
		</td>
	</tr>
</table>

</td>
</tr>
</table>
