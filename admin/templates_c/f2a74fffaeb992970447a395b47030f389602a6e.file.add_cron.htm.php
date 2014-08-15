<?php /* Smarty version Smarty-3.0.7, created on 2012-03-25 00:02:35
         compiled from "./templates/add_cron.htm" */ ?>
<?php /*%%SmartyHeaderCode:17694761384f6dfe2b1a9353-04087444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a74fffaeb992970447a395b47030f389602a6e' => 
    array (
      0 => './templates/add_cron.htm',
      1 => 1247247794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17694761384f6dfe2b1a9353-04087444',
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
		<a>Tạo Cron</a> </li>
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

							<a class="go" onclick="window.back()" href="javascript:voiid(0)">back</a></p>
<p>Ngày: <input name="d_s" id="datepicker" type="text" value="<?php echo $_smarty_tpl->getVariable('days')->value;?>
"></p>



</div>
	<table style="width: 100%" cellspacing="0" cellpadding="0">
		<tr class="ui-widget-header" style="height:30px">
			<td>Lệnh Thực Thi&nbsp; <br>
			Nhắn tin:<input onclick="$('#sms').show('show'); $('#url').hide('show');" name="post[cr_type]" type="radio" checked="checked" style="width: 20px" value="sms"> Get URl:<input onclick="$('#sms').hide('show'); $('#url').show('show');"  name="post[cr_type]" type="radio" value="get"></td>
		</tr>
		<tr>
			<td style="text-align: center">
			<div id="sms">
				Danh sách nhận tin<br>
				<input name="post[cr_to]" type="text" style="width: 212px; height: 32px" id="to"><br>
				Nội dung tin nhắn<br>
				<textarea name="post[cr_msg]" style="height: 147px; width: 213px"></textarea><br>
				<br>
				<a onclick="document.getElementById('to').value='<?php echo $_smarty_tpl->getVariable('khach')->value;?>
';" href="javascript:void(0)">Khách <?php echo $_smarty_tpl->getVariable('khach')->value;?>
</a> --&nbsp;
				<a onclick="document.getElementById('to').value='<?php echo $_smarty_tpl->getVariable('daily')->value;?>
';" href="javascript:void(0)">Đại lý <?php echo $_smarty_tpl->getVariable('daily')->value;?>
</a><br>
			
				
			</div>
			<div id="url" style="display:none">
				URL:<input name="cr_url" type="text" style="width: 212px; height: 32px"></div>
				<input class="go" name="submit" type="submit" value="Tạo Cron">
			</td>
			
		</tr>
	</table>

			</div>
</div>
</form>
