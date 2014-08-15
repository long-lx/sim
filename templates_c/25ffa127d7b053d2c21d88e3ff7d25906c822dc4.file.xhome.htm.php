<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 21:18:26
         compiled from ".\templates\xhome.htm" */ ?>
<?php /*%%SmartyHeaderCode:217305135fcd7c166b2-68621322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ffa127d7b053d2c21d88e3ff7d25906c822dc4' => 
    array (
      0 => '.\\templates\\xhome.htm',
      1 => 1362146798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217305135fcd7c166b2-68621322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿

<body style="margin-top: 0">

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-top:-18px;">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="" style="width: 120px">

		<a>Tìm Kiếm Sim</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

		<form name="timkiemsim" method="GET" action="index.php" onSubmit="return checksearch()">

			<input name="act" value="search" type="hidden">

		

				<table style="width: 100%" cellspacing="0" cellpadding="0">

					<tbody style="text-align: left; word-spacing: 2px; line-height: 150%;">

						<tr>

							<td style="height: 26px" valign="middle">

							<!--<div id="soption2" style="display: none; text-align: center;">-->
							<div id="soption2" style="text-align: center;">

								<br>

								<select name="smang" style="width: 93px">

								<option selected="" value="0">Các mạng</option>

								<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tenmang')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

								<option value="<?php echo $_smarty_tpl->getVariable('tenmang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('tenmang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>


								</option>

								<?php endfor; endif; ?></select> <strong>

								<span class="style12">&nbsp;Giá từ: </span>&nbsp;</strong><input onKeyUp="executeComma(event,document.timkiemsim.sgiatu)" onClick="this.value='';this.className='vienxanh'" name="sgiatu" type="text" style="width: 61px" id="g1" /><span class="style12"><strong>&nbsp; 

								Đến:&nbsp; </strong></span>

								<input onKeyUp="executeComma(event,document.timkiemsim.sgiaden)" onClick="this.value='';this.className='vienxanh'" name="sgiaden" type="text" style="width: 62px" id="g2" />

								<strong>Tổng điểm:</strong>

								<select name="tongnut" style="width: 46px">

								<option selected="" value="11">Tất</option>

								<option value="1">1</option>

								<option value="2">2</option>

								<option value="3">3</option>

								<option value="4">4</option>

								<option value="5">5</option>

								<option value="6">6</option>

								<option value="7">7</option>

								<option value="8">8</option>

								<option value="9">9</option>

								<option value="0">10</option>

								</select><br>

								Dãy số không bao gồm:

								<input name="n[]" type="checkbox" value="1">1<input name="n[]" type="checkbox" value="2">2<input name="n[]" type="checkbox" value="3">3<input name="n[]" type="checkbox" value="4">4<input name="n[]" type="checkbox" value="5">5<input name="n[]" type="checkbox" value="6">6<input name="n[]" type="checkbox" value="7">7<input name="n[]" type="checkbox" value="8">8<input name="n[]" type="checkbox" value="9">9</div>

							</td>

						</tr>

						<tr>

							<td style="height: 11px;" align="center">

							<table style="width: 306px" cellspacing="0" cellpadding="0">

								<tr>

									<td style="height: 26px; width: 282px;">

									<table style="width: 70%" cellspacing="0" cellpadding="0">

										<tr>
										<td>

																	<input onKeyUp="checkmobis(this);" onClick="this.className='vienxanh'; this.value='';" name="Textsim" type="text" value="0" style="width: 277px; height: 21px; color: #000000" id="csearch" /></td>
					<!--<td>

											<input onKeyUp="checkmobis(this);" onClick="this.className='vienxanh'; this.value='';" name="Textsim" type="text" value="<?php echo $_smarty_tpl->getVariable('thiskey')->value;?>
" style="width: 277px; height: 21px; color: #000000" id="csearch" /></td>-->

										</tr>

										</table>

									</td>

									<td style="height: 26px;padding-left:3px">

									<input value="Tìm sim" name="submit" type="submit" class="sub"></td>

								</tr>

							</table>

							</td>

						</tr>

				</table>

				<table style="width: 100%" cellspacing="0" cellpadding="0">

					<tr>

						<td style="height: 19px; text-align: center; font-size:11px">

						<span>VD: </span>

						<a onClick="document.timkiemsim.Textsim.value='*1986'" href="javascript:void(0)" rel="nofollow">

						<span class="style24">*</span>1986</a><span class="style21">,

						</span>

						<a onClick="document.timkiemsim.Textsim.value='09*6868'" href="javascript:void(0)" rel="nofollow">

						09*6868</a>,

						<a onClick="document.timkiemsim.Textsim.value='0913*'" href="javascript:void(0)" rel="nofollow">

						0913*</a>,

						<a onClick="document.timkiemsim.Textsim.value='01234*'" href="javascript:void(0)" rel="nofollow">

						01234*</a>,

						<a onClick="document.timkiemsim.Textsim.value='091xxxx678'" href="javascript:void(0)" rel="nofollow">

						091xxxx678</a>,

						<a onClick="document.timkiemsim.Textsim.value='09*99x99'" href="javascript:void(0)" rel="nofollow">

						09*99x99</a>&nbsp;

						<!--<span id="tnc">

						<a href="javascript:void(0)" rel="nofollow" onClick="oshow();">

						<strong><font color="#FF0000" size="-1">>>Tìm Nâng Cao</font></strong></a></span><span id="tbt" style="display: none"><a href="javascript:void(0)" rel="nofollow" onClick="ohide();"><strong><font color="#FF0000" size="-1">>>Tìm 

						nhanh</font></strong></a></span>--></td>

					</tr>

				</table>

				<table style="width: 100%" cellspacing="0" cellpadding="0">

					<tbody style="text-align: left; word-spacing: 2px; line-height: 150%;">

						<tr>

							<td class="style22" style="height: 19px; text-align: center;">

							<div id="soption" style="display: none">

								<br>

								<table style="width: 100%">

									<tr>

										<td>

										<div align="center">

										<!--	<table style="width: 90%;" cellspacing="0" cellpadding="0">

												<tr>

													<td style="border-style: solid; border-color: #F5F5F5">

													<p style="word-spacing: 2px; line-height: 150%; text-align: left; margin-top: 2px; margin-bottom: 2px">

													<span>

													<strong>Hướng dẫn kiếm nâng 

													cao:</strong><br>

													Để tìm sim đuôi tận cùng là 

													888 nhập *888<br>

													Để tìm đầu số 0169 và đuôi là 

													888 nhập 0169*888<br>

													Để tìm sim bắt đầu 09132 nhập 

													09132*<br>

&nbsp;+ Sử dụng dấu &quot;</span><span style="color: #FF0000">x</span><span>&quot; 

													đại điện cho 1 số và dấu &quot;</span><span style="color: #FF0000">*</span><span>&quot; 

													đại điện cho một chuỗi số.<br>

&nbsp; - Nếu tìm dạng 0912a33b44 nhập 0912x33x44<br>

&nbsp; - Nếu tìm dạng&nbsp; 09aa2b2c2d nhập 09*2x2x2x</span><br>

													<strong><a href="javascript:dialoga('aindex.php?act=page&pcode=huongdantimsim',0,0,'Hướng dẫn tìm sim')">

													Tìm hiểu thêm...</a></strong></p>

													</td>

												</tr>

											</table>-->

										</div>

										</td>

									</tr>

								</table>

							</div>

							</td>

						</tr>

				</table>

			

		</form>

		<!--<div class="ui-widget-content" style="text-align:left;line-height:21px;width:200px; padding-left:20px; float:left">

			<strong>Lựa chọn theo đầu số</strong></div>-->

		<table style="width: 100%;" cellspacing="0" cellpadding="0">

			<tr>

				<td style="height: 48px">

				<select name="sx" onChange="window.location.href='dau-so-'+this.options[selectedIndex].value+'.html';" style="height: 20px">

				<option>Vinaphone</option>

				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('dauvina')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<option value="<?php echo $_smarty_tpl->getVariable('dauvina')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('dauvina')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
 -</option>

				<?php endfor; endif; ?></select></td>

				<td style="height: 48px">

				<select name="sv" onChange="window.location.href='dau-so-'+this.options[selectedIndex].value+'.html';" style="height: 20px">

				<option>Mobifone</option>

				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('daumobi')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<option value="<?php echo $_smarty_tpl->getVariable('daumobi')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('daumobi')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
 -</option>

				<?php endfor; endif; ?></select></td>

				<td style="height: 48px">

				<select name="sa" onChange="window.location.href='dau-so-'+this.options[selectedIndex].value+'.html';" style="height: 20px">

				<option>Viettel</option>

				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('dauviettel')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<option value="<?php echo $_smarty_tpl->getVariable('dauviettel')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('dauviettel')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
 -</option>

				<?php endfor; endif; ?></select></td>

				<td style="height: 48px">

				<select name="sa0" onChange="window.location.href='dau-so-'+this.options[selectedIndex].value+'.html';" style="height: 20px">

				<option>VietNamobile</option>

				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('dauVietNamobile')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<option value="<?php echo $_smarty_tpl->getVariable('dauVietNamobile')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('dauVietNamobile')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
 -

				</option>

				<?php endfor; endif; ?></select></td>

				<td style="height: 48px">

				<select name="sa1" onChange="window.location.href='dau-so-'+this.options[selectedIndex].value+'.html';" style="height: 20px;">

				<option>Beeline</option>

				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('dauBeeline')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

				<option value="<?php echo $_smarty_tpl->getVariable('dauBeeline')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('dauBeeline')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
 -</option>

				<?php endfor; endif; ?></select></td>

			</tr>

		</table>

	</div>

</div>

<br />

<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="">

		<a><?php echo $_smarty_tpl->getVariable('muc')->value;?>
</a></li>

	</ul>

	

		<?php if ($_smarty_tpl->getVariable('loaisim')->value==1){?>

		<table style="width: 100%" class="bo2">

			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('vloai')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> <?php if ($_smarty_tpl->getVariable('l')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]==0){?>

			<tr>

				<?php }?>

				<td style="text-align: center" class="ui-state-default">

				<a title="<?php echo $_smarty_tpl->getVariable('my_keyword')->value;?>
 - <?php echo $_smarty_tpl->getVariable('vloai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']];?>
" href="<?php echo $_smarty_tpl->getVariable('vlink')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']];?>
">

				<span style="font-size: 12px; font-family:Tahoma;font-weight:bold">

				<?php echo $_smarty_tpl->getVariable('vloai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']];?>
</span></a></td>

				<?php if ($_smarty_tpl->getVariable('l')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]==4){?>

			</tr>

			<?php }?> <?php endfor; endif; ?>

		</table>

		<?php }?>

		<table style="width: 100%" cellspacing="1">

			<tr class="ui-widget-header" style="height:30px">

				<td style="width: 7%; height: 22px; text-align: center;"><strong>STT</strong></td>

				<td style="width: 18%; height: 22px; text-align: center;">

				<strong>Số Sim</strong></td>

				<td style="width: 18%; height: 22px; text-align: center;">

				<strong>Giá Tiền</strong></td>

				<td style="width: 6%; height: 22px; text-align: center;">

				<strong>Mạng</strong></td>

				<td style="width: 15%; height: 22px; text-align: center;">

				<strong>Đặt Mua</strong></td>

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
">

				<td style="width: 7%; text-align: center;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>

				<td style="width: 18%; font-size:13px">

				<a href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/dat-mua-sim-so-dep-<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim2'];?>
.html">

				<strong style="color:#003399; font-size:14px;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
</strong></a></td>

				<td style="width: 18%; padding-left:10px; color:#003399; font-size:14px;"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
</strong></td>

				<td style="width: 4%; text-align: center;"><strong><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['mang'];?>
</strong></td>

				<td style="width: 15%; text-align: center;">

				<a href="dat-mua-sim-so-dep-<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim2'];?>
.html" rel="nofollow">

				<span class="sub" style="font-size:11px;">Đặt mua</span></a>

				</td>

			</tr>
			
			<?php endfor; endif; ?>

			<tr>

				<td class="dvc" colspan="5" align="center">

				

					<?php echo $_smarty_tpl->getVariable('paging')->value;?>
	</td>

			</tr>

		</table>

	</div>
