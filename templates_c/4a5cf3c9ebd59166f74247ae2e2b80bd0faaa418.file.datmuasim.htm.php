<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 21:35:06
         compiled from ".\templates\datmuasim.htm" */ ?>
<?php /*%%SmartyHeaderCode:232225136029a73a9e2-88284139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a5cf3c9ebd59166f74247ae2e2b80bd0faaa418' => 
    array (
      0 => '.\\templates\\datmuasim.htm',
      1 => 1302610072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232225136029a73a9e2-88284139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\Program Files\VertrigoServ\www\sim\\libs\plugins\function.html_options.php';
?>﻿<script type="text/javascript" src="js/vi.js"></script>

<form action="index.php?act=dathangthanhcong&cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" method="post" name="fr" onsubmit="return checkdh();">

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Đặt mua sim <?php echo $_smarty_tpl->getVariable('sosim')->value;?>
</a> </li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content">	

		<table border="0" width="100%" cellspacing="0">

		

			<tr>

				<td>

			

				<table style="width: 100%; " cellspacing="0" cellpadding="0" >

			

					<tr>

						<td colspan="2">

						

						<table style="width: 100%" cellspacing="0" cellpadding="0">

							<tr>

								<td>

						

						<table style="width: 100%" cellspacing="1" cellpadding="0">

							<tr class="style10">

								<td style="height: 22px; width: 50%;"><strong>S&#7889; 

								sim</strong></td>

								<td style="width: 50%; height: 22px;">

								<strong>Giá ti&#7873;n</strong></td>

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
							
							<tr style="text-align: center">

								<td style="height: 22px; width: 50%;"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
<input name="sims[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
]" type="hidden" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
 " /></strong></td>

								<td style="width: 50%; height: 22px;"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
 

								</strong><sup>(VN&#272;)<br>
								<span style="font-size: x-small">( <?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['doctien'];?>
 
								)</span></sup></td>

							</tr>

							<?php endfor; endif; ?>

							<?php if ($_smarty_tpl->getVariable('chon')->value==1){?>

							<?php }?>

							</table>

								</td>

							</tr>

						</table>

</td>

					</tr>

				

					<tr>

						<td colspan="2">
						&nbsp;</td>

					</tr>

				

					<tr>

						<td colspan="2">

						<div style="text-align:center">

							B&#7897; gõ ti&#7871;ng vi&#7879;t <input onfocus="setTypingMode(0)" type="radio" value="V1" name="switch" />T&#7855;t&nbsp;&nbsp;&nbsp;

							<input class="bvclass" onfocus="setTypingMode(1)" type="radio" value="V1" name="switch" checked/>B&#7853;t</div>

</td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">&nbsp;</td>

						<td style="width: 50%" class="cl30">

						&nbsp;</td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">H&#7885; và Tên: (*)</td>

						<td style="width: 50%" class="cl30">

						<input onkeyup="initTyper(this);" name="post[hovaten]" type="text" style="width: 112px" id="c0" /><span id="namea" style="display:none;font-family:Arial; font-size:10px; color:#999999">VD: Nguyễn Văn A, Nguyễn A</span><input name="sosim" type="hidden" value="<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
"></td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">&#272;&#7883;a ch&#7881; nh&#7853;n sim: (*)</td>

						<td style="width: 50%" class="cl30">

						<input onkeyup="initTyper(this);" name="post[diachi]" type="text" style="width: 152px" id="c1" /><span id="diachia" style="display:none;font-family:Arial; font-size:10px; color:#999999">VD: 76 Quan Nhan, Thanh Xuan</span></td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">T&#7881;nh thành: (*)</td>

						<td style="width: 50%" class="cl30">

						<select name="post[city]" id="c2">

		<option value="" selected="">-- T&#7881;nh thành --</option>

		<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('cityn')->value,'output'=>$_smarty_tpl->getVariable('cityn')->value),$_smarty_tpl);?>


		</select></td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">Điện thoại: (*)</td>

						<td style="width: 50%" class="cl30">

						<input onkeyup="checkmobi2(this);" name="post[dienthoai]" type="text" style="width: 100px" id="c3" />&nbsp;</td>

					</tr>

					<tr>

						<td class="cl30" style="width: 50%">Email:</td>

						<td style="width: 50%" class="cl30">

						<input name="post[email]" class="style28" style="width: 152; height:21" id="tel" />&nbsp;</td>

					</tr>

					<tr>

						<td colspan="2" class="cl30">

						

							Ghi chú:</td>

					</tr>

					<tr>

						<td colspan="2" align="center">

						

							<textarea onkeyup="initTyper(this);" name="post[note]" style="width: 221px; height: 35px"></textarea>

						&nbsp;<br />

						</td>

					</tr>

					<tr>

						<td colspan="2">

						

							&nbsp;</td>

					</tr>

					

					<tr>

						<td colspan="2" class="dvc" style="text-align: center">

						<br/>

						

							<input name="submit" value="Đặt hàng" type="submit" class="sub">&nbsp;<input name="Reset1" type="reset" value="Làm lại" class="sub">

							

							<input onclick="add_sim('<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
','<?php echo $_smarty_tpl->getVariable('data')->value[0]['giaban'];?>
');alert('Đã thêm <?php echo $_smarty_tpl->getVariable('data')->value[0]['sim1'];?>
 vào giỏ hàng');add_sim('<?php echo $_smarty_tpl->getVariable('sosim')->value;?>
','<?php echo $_smarty_tpl->getVariable('data')->value[0]['giaban'];?>
')" name="chon" type="button" value="Thêm vào giỏ hàng" class="sub"><br />

						<br>

						<br>

						Vi&#7879;c &#273;&#7863;t hàng qua website g&#7863;p khó kh&#259;n quý khách hãy g&#7885;i

						<strong><?php echo $_smarty_tpl->getVariable('my_hl1')->value;?>
</strong> 

						ho&#7863;c <strong><?php echo $_smarty_tpl->getVariable('my_hl2')->value;?>
</strong> &#273;&#7875; &#273;&#7863;t mua sim qua &#273;i&#7879;n tho&#7841;i !<br /></td>

					</tr>

			

					<tr>

						<td colspan="2" class="dvc">

						

							</td>

					</tr>

					

					</table>

				</td>

			</tr>

			

			</table>

	

	</div>

</div>







</form>





<script type="text/javascript" language="javascript">setTypingMode(1);</script>

