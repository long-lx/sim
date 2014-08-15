<?php /* Smarty version Smarty-3.0.7, created on 2013-05-28 22:29:36
         compiled from "./templates/check.htm" */ ?>
<?php /*%%SmartyHeaderCode:134693284051a4cd60b88245-63333717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e634f11812ab42001c909884cf834427e46e4b9' => 
    array (
      0 => './templates/check.htm',
      1 => 1369754974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134693284051a4cd60b88245-63333717',
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
<table style="width: 100%" bgcolor="#CCCCCC">
	<tr>
		<td style="text-align: center">
		<form method="post">
			<br />
			<div id="thongbao">
			</div>
			<div id="load">
			</div>
			<br />
			<span style="color: #FF0000; font-weight:bold; font-size:18px;"><strong>&nbsp;<?php echo $_smarty_tpl->getVariable('thongbao')->value;?>
</strong></span><br /></br>
			<input name="submit" type="button" value="Nhập số" class="go" style="height: 40px" /><input name="sosim" style="width: 183px; height: 32px" value="<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
" /><input name="submit" type="submit" value="Check" class="go" style="height: 40px" /><br />
			<?php if ($_smarty_tpl->getVariable('giaban')->value>0){?>
			<br />
			<!--<strong><?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
 - 
			<?php echo $_smarty_tpl->getVariable('city')->value;?>
<br />
			</strong><br />-->
			
			&nbsp;<!--<input onclick="hget('<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
','<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
','giu');" name="giu" type="button" value="Báo giữ" class="go" />
			<input onclick="hget('<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
','<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
','kiemtra');" name="kiemtra" type="button" value="Kiểm Tra" class="go" />--><br /></br>
			<span style="color:#FF0000; font-size:20px; font-weight:bold;" onclick="$('#show').show('fast');" href="javascript:voiid(0)">THÔNG TIN VỀ SIM BẠN ĐÃ KIỂM TRA</span><br />
<center>
			<?php }?>
			<br />
		<table onclick="$('#show').show('fast');" href="javascript:voiid(0)" style="border:1px solid #999;text-align:left;margin-left:10px;background:#fff;font-weight:bold" cellpadding="0" cellspacing="0">
			<tbody><tr style="height:30px">
			<td colspan="2" style="text-align:center;background:#16b;color:#fff">THÔNG TIN CHECK SIM</td>
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Số SIM</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"> 	<?php echo $_smarty_tpl->getVariable('sim2')->value;?>
</td>			
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Giá khách</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999;color:#f00"><?php echo $_smarty_tpl->getVariable('giaban')->value*1000000;?>
&nbsp;<font color="#000000">VNĐ</font></td>			
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Giá gốc</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999;color:#f00"><?php echo ($_smarty_tpl->getVariable('giaban')->value*1000000)-($_smarty_tpl->getVariable('giaban')->value*1000000)*$_smarty_tpl->getVariable('pt')->value/100;?>
&nbsp;<font color="#000000">VNĐ</font></td>			
			</tr>
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Lãi được</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999;color:#f00"><?php echo ($_smarty_tpl->getVariable('giaban')->value*1000000)*$_smarty_tpl->getVariable('pt')->value/100;?>
&nbsp;<font color="#000000">VNĐ</font></td>			
			</tr>
			
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Hoa hồng</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999; color:#f00"><?php echo $_smarty_tpl->getVariable('pt')->value;?>
&nbsp;<font color="#000000">%</font></td>			
			</tr>			
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Đại lý</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"><?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
</td>			
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Địa chỉ</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"><?php echo $_smarty_tpl->getVariable('diachi')->value;?>
</td>			
			</tr>	
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Hotline</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"><?php echo $_smarty_tpl->getVariable('mobile')->value;?>
</td>			
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Email</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"><?php echo $_smarty_tpl->getVariable('email')->value;?>
</td>			
			</tr>
			<tr style="height:30px">
			<td style="padding:0px 10px;width:60px;border-bottom:1px solid #999;border-right:1px solid #999">Website</td>
			<td style="padding:0px 10px;border-bottom:1px solid #999"><?php echo $_smarty_tpl->getVariable('website')->value;?>
</td>			
			</tr>				
	</tbody></table>
<!--<table border="1" cellpadding="5" cellpadding="5" width="1000">		
   <tr style="background:#FFFFFF; font-size:20px; font-weight:bold; text-align:center;">
   	<td>Số sim</td>
	<td>Hoa hồng</td>
	<td>Giá bán</td>
	<td>Giá nhập</td>
	<td>Được lãi</td>
    <td>Đại lý</td>
    <td>Địa chỉ</td>
    <td>Mobile</td>
    <td>Email</td>
    <td>Website</td>
    <td>Thành phố</td>
  </tr>
  
  <tr style="background:#FFFFFF; color:#FF0000; font-size:18px; font-weight:bold; text-align:center;">
    <td><?php echo $_smarty_tpl->getVariable('sim2')->value;?>
</td>
	<td><?php echo $_smarty_tpl->getVariable('pt')->value;?>
&nbsp;%</td>
	<td><?php echo $_smarty_tpl->getVariable('giaban')->value*1000000;?>
&nbsp;VNĐ</td>
	<td><?php echo ($_smarty_tpl->getVariable('giaban')->value*1000000)-($_smarty_tpl->getVariable('giaban')->value*1000000)*$_smarty_tpl->getVariable('pt')->value/100;?>
&nbsp;VNĐ</td>
	<td><?php echo ($_smarty_tpl->getVariable('giaban')->value*1000000)*$_smarty_tpl->getVariable('pt')->value/100;?>
&nbsp;VNĐ</td>
	<td><?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('diachi')->value;?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('mobile')->value;?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('email')->value;?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('website')->value;?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('city')->value;?>
</td>
  </tr>

<!--			Đại lý: <?php echo $_smarty_tpl->getVariable('hovaten')->value;?>
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
<br/>-->
<!--<table>-->
			
			<br />
			<br />
			<br />
		</form>
	</td>
	</tr>
</table>
</center>
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
