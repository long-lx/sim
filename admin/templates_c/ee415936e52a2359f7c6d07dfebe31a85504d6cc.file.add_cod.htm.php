<?php /* Smarty version Smarty-3.0.7, created on 2012-03-24 23:53:41
         compiled from "./templates/add_cod.htm" */ ?>
<?php /*%%SmartyHeaderCode:19050207144f6dfc15840ff4-64723302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee415936e52a2359f7c6d07dfebe31a85504d6cc' => 
    array (
      0 => './templates/add_cod.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19050207144f6dfc15840ff4-64723302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_select_time')) include '/home/tiexim/public_html/sim/libs/plugins/function.html_select_time.php';
?>﻿<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" language="javascript" src="../ajax.js"></script>
<link type="text/css" href="../css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="admin.js"></script>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script type="text/javascript" src="script.js"></script>
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
		<a>ADD chuyển phát</a></li>
	</ul>
	<div class="ui-tabs-panel ui-widget-content">
	
	
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	</script>
		<form method="post">
			<div class="demo">
				<p>Giờ/phút/giây :<?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>

				<a class="go" onclick="window.back()" href="javascript:voiid(0)">
				back</a></p>
				<p>Ngày:
				<input name="d_s" id="datepicker" type="text" value="<?php echo $_smarty_tpl->getVariable('days')->value;?>
"></p>
			</div>
			<table style="width: 100%" cellspacing="0" cellpadding="0">
				<tr>
					<td style="text-align: center">
					<div id="sms">
						<table style="width: 400px">
							<tr>
								<td style="width: 50%"><strong>Số Sim:</strong></td>
								<td style="width: 50%">
								<input name="post[sosim]" type="text" value="<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
" style="height: 22px">&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 50%"><strong>Giá Thu:</strong></td>
								<td style="width: 50%">
								<input onkeyup="executeComma(event,document.getElementById('gia'))" name="post[giaban]" type="text" value="<?php echo $_smarty_tpl->getVariable('giaban')->value;?>
" id="gia"></td>
							</tr>
							<tr>
								<td style="width: 50%"><strong>Mobile:</strong></td>
								<td style="width: 50%">
								<input name="post[phone]" type="text" value="<?php echo $_smarty_tpl->getVariable('phone')->value;?>
"></td>
							</tr>
							<tr>
								<td style="width: 50%"><strong>Mã Bưu:</strong></td>
								<td style="width: 50%">
								<input name="post[mabuu]" type="text" value="<?php echo $_smarty_tpl->getVariable('mabuu')->value;?>
" style="height: 22px"></td>
							</tr>
						</table>
						<br>
					</div>
					
					<input class="go" name="submit" type="submit" value="ADD">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</form>
