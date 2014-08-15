<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 21:45:46
         compiled from ".\templates\check.htm" */ ?>
<?php /*%%SmartyHeaderCode:23506513604ec4e0555-50316661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ccbd746924bd1f7dfb090e1c4e263a7936c9ba6' => 
    array (
      0 => '.\\templates\\check.htm',
      1 => 1362146540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23506513604ec4e0555-50316661',
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
<title>Untitled 1</title>
</head>

<body>
<script type="text/javascript">
function hget(sosim,mobile,type)
{
	$('#load').html('<img src="loading.gif">');
	$('#load').load('aindex.php?act=check&so='+sosim+'&dlso='+mobile+'&type='+type);
}
function hsend(to,msg)
{
	msg=msg.replace(/&/i,' ');
	msg=msg+' '+document.sms.sendby.value+'';
	if(document.sms.msg.value.length > 100)
	{
	alert('Tin nhắn quá dài! Vui Lòng xóa bớt');
	return fasle;
	}
	$('#load').html('<img src="loading.gif">');
	$.ajax({
	type: 'POST',
	data:'to='+to+'&msg='+msg+'&sendby='+document.sms.sendby.value+'',
	url: 'aindex.php?act=check&so=11111111',
	success:function(data){
	$('#load').html(data);
	}
	});
}
function smsleng()
{
 document.sms.leng.value=100-document.sms.msg.value.length;
}
</script>
<table style="width: 100%" bgcolor="#666666">
	<tr>
		<td style="text-align: center">
		<form method="post">
			<br />
			<div id="thongbao">
			</div>
			<div id="load">
			</div>
			<br />
			<span style="color: #99CC00"><strong>&nbsp;<?php echo $_smarty_tpl->getVariable('thongbao')->value;?>
</strong></span><br /></br>
			<input name="submit" type="button" value="Nhập số" class="go" style="height: 40px" /><input name="sosim" style="width: 183px; height: 32px" value="<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
" /><input name="submit" type="submit" value="Check" class="go" style="height: 40px" /><br />
			<?php if ($_smarty_tpl->getVariable('giaban')->value>0){?>
			<br />
			<strong><?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
 - 
			<?php echo $_smarty_tpl->getVariable('city')->value;?>
<br />
			</strong><br />
			
			&nbsp;<input onclick="hget('<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
','<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
','giu');" name="giu" type="button" value="Báo giữ" class="go" />
			<input onclick="hget('<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
','<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
','kiemtra');" name="kiemtra" type="button" value="Kiểm Tra" class="go" /><br /></br>
			<a style="color:#FF0000; font-size:16px; font-weight:bold;" onclick="$('#show').show('fast');" href="javascript:voiid(0)">Thông Tin</a><br />
			<?php }?>
			<br />
			<div id="show" style="display:none; border-top:solid 1px #FFFFFF; border-bottom:solid 1px #FFFFFF; border-left:solid 1px #FFFFFF; border-right:solid 1px #FFFFFF; font-size:14px; font-weight:bold; color:#FFFFFF;">
			Đại lý: <?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
 <br />
			Địa chỉ: <?php echo $_smarty_tpl->getVariable('diachi')->value;?>
 <br />
			Mobile: <?php echo $_smarty_tpl->getVariable('mobile')->value;?>
 <br />
			Email : <?php echo $_smarty_tpl->getVariable('email')->value;?>
<br/>
			Website: <?php echo $_smarty_tpl->getVariable('website')->value;?>
<br/>
			Thành phố: <?php echo $_smarty_tpl->getVariable('city')->value;?>
<br/>
			
			</div>
			<br />
			<br />
			<br />
		</form>
	</td>
	</tr>
</table>

<form method="post" name="sms">

<table style="width: 100%">
<tr>
<td align="center">
<!--<table style="width: 400px">
		<tr>
			<td style="text-align: left; " valign="top">
			
				
			<strong>To:</strong><input name="to" type="text" /><strong><br />
&nbsp;<a onclick="$('#danhba').show('show');" href="javascript:void(0)">Danh bạ</a></strong><br />
			<br />
			<textarea onkeyup="smsleng()" name="msg" cols="20" style="height: 87px"></textarea><br />
			<input name="sendby" onclick="this.value=''" type="text" value="<?php echo $_smarty_tpl->getVariable('sendby')->value;?>
">
			<input onclick="hsend(document.sms.to.value,document.sms.msg.value)" class="go" name="sms" type="button" value="SEND SMS" /><input name="leng" type="text" style="width: 25px" /></td>
			<td style="text-align: left; ">
			
				
			<table style="width: 100%;display:none" id="danhba">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('danhba')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr>
					<td onclick="document.sms.to.value='<?php echo $_smarty_tpl->getVariable('danhba')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mobile'];?>
'"> <input name="Radio1" type="radio" /><?php echo $_smarty_tpl->getVariable('danhba')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['hovaten'];?>
 (<?php echo $_smarty_tpl->getVariable('danhba')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mobile'];?>
)</td>
				</tr>
			<?php endfor; endif; ?>
			</table>
			</td>
		</tr>
		</table>-->
	</td>
	</tr>
</table>	
	
	
	</form>

</body>

</html>
