<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 10:18:36
         compiled from "./templates/taibangso.htm" */ ?>
<?php /*%%SmartyHeaderCode:558493086513aaa0c559ae0-82627699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04763ab91c4ce9a4b70864342339d0f15a8a9702' => 
    array (
      0 => './templates/taibangso.htm',
      1 => 1362711435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '558493086513aaa0c559ae0-82627699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Tải báo giá</a> </li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

								<form name="form_id" method="POST" action="download.php" onsubmit="return checktai();">

								

									<div class="dv">

<table style="width: 100%" cellspacing="1" class="bgmo">

	<tr>

		<td class="nentrang" align="left" colspan="3" style="height: 22px">

		<input onclick="((this.checked) ? select_all('c','1') : select_all('c','0'));" name="a" type="checkbox" style="height: 20px" value="0"> 

		<?php echo $_smarty_tpl->getVariable('tmenu')->value;?>
 <input name="sloai" value="<?php echo $_smarty_tpl->getVariable('gloai')->value;?>
" type="hidden"> </td>

	</tr>



<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('vlink')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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

	<?php if ($_smarty_tpl->getVariable('l')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]==0){?>

	<tr>

	<?php }?>

		<td class="nentrang" align="left" style="height: 22px">

		<input name="c[]" value="<?php echo $_smarty_tpl->getVariable('vlink')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
" type="checkbox" style="width: 20px" checked="checked"><?php echo $_smarty_tpl->getVariable('vloai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
</td>

	<?php if ($_smarty_tpl->getVariable('l')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]==3){?>

	</tr>

	<?php }?>

<?php endfor; endif; ?>

	<tr>

		<td class="nentrang" align="center" colspan="3" style="height: 22px">

		Giá từ:

		<input onkeyup="executeComma(event,document.form_id.gia1)" name="gia1" type="text" style="width: 81px" value="100.000" id="gia1">&nbsp; Đến:

		<input onkeyup="executeComma(event,document.form_id.gia2)" name="gia2" type="text" style="width: 81px" value="20.000.000" id="gia2"></td>

	</tr>

	<tr>

		<td class="nentrang" align="center" colspan="3" style="height: 22px">

		Định dạng file:

		<input name="r" type="radio" value="1" checked="checked">Excell (.xls)&nbsp;

		<input name="r" type="radio" value="2">Word (.doc)&nbsp;

		<input name="r" type="radio" value="3" style="height: 20px">Website 

		(.html) 

		</td>

	</tr>

	<tr>

		<td class="nentrang" align="center" colspan="3" style="height: 22px">

		<input name="submit" type="submit" value="Tải xuống bảng giá" class="sub">&nbsp;</td>

	</tr>

	</table>

</div>	

</div>
</form>
