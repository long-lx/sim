<?php /* Smarty version Smarty-3.0.7, created on 2013-04-05 15:44:30
         compiled from "./templates/chuyen.htm" */ ?>
<?php /*%%SmartyHeaderCode:1558656822515e8eee6966a0-93424023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cada8d8189bb3e06bb3fd359222352e93cace828' => 
    array (
      0 => './templates/chuyen.htm',
      1 => 1365151463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558656822515e8eee6966a0-93424023',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/home/sim468/public_html/libs/plugins/function.html_options.php';
?>﻿<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" language="javascript" src="../ajax.js"></script>
<link type="text/css" href="../css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="admin.js"></script>

<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script type="text/javascript" src="script.js"></script>

<form action="" method="post">
	<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
		<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
			<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">
			<a>Đua vào danh sách chuyển</a> </li>
		</ul>
		<div class="ui-tabs-panel ui-widget-content">
			<table style="width: 100%;" cellspacing="1" class="ui-widget-content">
				<tr>
					<td colspan="2">
					<table style="width: 100%; height: 22px;" cellspacing="1" class="ui-widget-content">
						<tr>
							<td colspan="3" style="text-align: center"><b>Bộ gõ 
							tiếng việ</b>t<input onfocus="setTypingMode(0)" type="radio" checked value="OFF" name="switch">Tắt&nbsp;&nbsp;&nbsp;
							<input class="bvclass" onfocus="setTypingMode(1)" type="radio" value="TELEX" name="switch">Bật&nbsp;
							<a class="go" onclick="window.back()" href="javascript:voiid(0)">back</a></td>
						</tr>
						<tr>
							<td style="height: 22px; width: 50%; text-align: center;">
							<strong>Số sim</strong></td>
							<td style="width: 50%; height: 22px; text-align: center;">
							<strong>Giá tiền</strong></td>
							<td style="width: 50%; height: 22px; text-align: center;">&nbsp;
							</td>
						</tr>
						<tr>
							<td style="height: 22px; width: 50%; text-align: center;">
							<strong><?php echo $_smarty_tpl->getVariable('sosim')->value;?>
<input name="post[sosim]" value="<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
" type="hidden"></strong></td>
							<td style="width: 50%; height: 22px; text-align: center;">
							<strong><?php echo $_smarty_tpl->getVariable('giatien')->value;?>
</strong></td>
							<!--<td style="width: 50%; height: 22px; text-align: center;">
							<a id="addnt" class="go" href="add_note.php?id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
">
											note</a></td>-->
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td style="width: 50%">&nbsp;</td>
					<td style="width: 50%">&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 50%">Họ và Tên: </td>
					<td style="width: 50%">
					<input onkeyup="initTyper(this);" name="post[hovaten]" type="text" value="<?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
"></td>
				</tr>
				<tr>
					<td style="width: 50%">Địa chỉ: </td>
					<td style="width: 50%">
					<input onkeyup="initTyper(this);" name="post[diachi]" type="text" value="<?php echo $_smarty_tpl->getVariable('diachi')->value;?>
 <?php echo $_smarty_tpl->getVariable('city')->value;?>
" style="height: 22px"></td>
				</tr>
				<tr>
					<td style="width: 50%">Số di động: </td>
					<td style="width: 50%">
					<input name="post[mobile]" type="text" value="<?php echo $_smarty_tpl->getVariable('dienthoai')->value;?>
"></td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('tel')->value){?> <?php }?> <?php if ($_smarty_tpl->getVariable('email')->value){?> <?php }?> <?php if ($_smarty_tpl->getVariable('text')->value){?>
				<tr>
					<td style="height: 29px; width: 50%">Thông tin kèm theo:</td>
					<td style="height: 29px; width: 50%">
					<textarea name="post[text]" cols="20" rows="2"><?php echo $_smarty_tpl->getVariable('text')->value;?>
</textarea></td>
				</tr>
				<?php }?>
				<tr>
					<td style="height: 29px; width: 50%">Giá bán:</td>
					<td style="height: 29px; width: 50%">
					<input name="post[giaban]" type="text" style="width: 80px;" value="<?php echo $_smarty_tpl->getVariable('giatien')->value;?>
"></td>
				</tr>
				<tr>
					<td style="height: 29px; width: 50%">Giá nhập:</td>
					<td style="height: 29px; width: 50%">
					<input name="post[gianhap]" type="text" style="width: 80px;" value="<?php echo $_smarty_tpl->getVariable('gianhap')->value;?>
"></td>
				</tr>
				<tr>
					<td style="height: 29px; width: 50%">Hoa hồng:</td>
					<td style="height: 29px; width: 50%">
					<input name="post[hoahong]" type="text" style="width: 49px;" value="<?php echo $_smarty_tpl->getVariable('hoahong')->value;?>
"></td>
				</tr>
				<tr>
					<td style="height: 29px; width: 50%">Phí khác:</td>
					<td style="height: 29px; width: 50%">
					<input name="post[phikhac]" type="text" style="width: 80px;"><select name="post[daily]">
					<option value="no">Ko có đại lý</option>
					<?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->getVariable('dlname')->value,'values'=>$_smarty_tpl->getVariable('dlid')->value,'selected'=>$_smarty_tpl->getVariable('daily')->value),$_smarty_tpl);?>

					</select></td>
				</tr>
				<tr>
					<td style="height: 29px; text-align: center;" colspan="2">
					<input name="submit" type="submit" value="Chuyển sim" class="go">

					<!--<input onclick="window.location.href='aindex.php?act=nhantin&id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
';" type="button" value="Nhắn tin" class="go">&nbsp; 
<a href="aindex.php?act=nhantin&amp;id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
&kiemtra=1" class="go">Kiểm Tra</a>--></td>
				</tr>
			</table>
		</div>
	</div>
</form>
