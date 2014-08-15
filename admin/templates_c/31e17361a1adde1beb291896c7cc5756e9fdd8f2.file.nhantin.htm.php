<?php /* Smarty version Smarty-3.0.7, created on 2013-04-05 15:42:51
         compiled from "./templates/nhantin.htm" */ ?>
<?php /*%%SmartyHeaderCode:676131860515e8e8bdf15e9-05845464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e17361a1adde1beb291896c7cc5756e9fdd8f2' => 
    array (
      0 => './templates/nhantin.htm',
      1 => 1365151360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676131860515e8e8bdf15e9-05845464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript"  language="javascript" src="../ajax.js" ></script>
<link type="text/css" href="../css/jquery-ui-1.8.9.custom.css" rel="stylesheet" />	

<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<script type="text/javascript"  language="javascript" src="admin.js" ></script>

<script type="text/javascript" src="../js/jquery-ui-1.8.9.custom.min.js"></script>


</head>

<body>

<form method="post" action="<?php echo $_smarty_tpl->getVariable('urlpost')->value;?>
" name="myfrom" onsubmit="return confs('Bạn muốn gửi tới: ('+document.myfrom.mobile.value+')\n Với Nội Dung: \n--------------------\n'+document.myfrom.txt.value+'');">
		<input name="post[sosim]" value="<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
" type="hidden" />
		<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Nhắn tin cho đại lý</a> </li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content">	
						<table style="width: 100%;" cellspacing="1">
							<tr>
							<td style="text-align: center">
								<textarea onkeyup="document.myfrom.dodai.value = document.myfrom.txt.value.length" name="txt" style="height: 128px; width: 100%; margin-right: 0px;"><?php echo $_smarty_tpl->getVariable('noidung')->value;?>
</textarea>
								<br />
								STD:<input name="mobile" type="text" value="<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
" /><input name="dodai" type="text" style="width: 27px" /><br />
								<?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
<br />
								<input type="submit" value="Send SMS" class="go" name="submit" />
							<a class="go" onclick="window.back()" href="javascript:voiid(0)">back</a></td>
							</tr>
						</table>
						</div>
						</div>
</form>

</body>

</html>
