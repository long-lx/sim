<?php /* Smarty version Smarty-3.0.7, created on 2013-03-05 22:06:32
         compiled from ".\templates\baogia.htm" */ ?>
<?php /*%%SmartyHeaderCode:20319513609f821c935-69056119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e164db5d1b8a951cadd6d2f9cf8f194009598700' => 
    array (
      0 => '.\\templates\\baogia.htm',
      1 => 1362495992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20319513609f821c935-69056119',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\Program Files\VertrigoServ\www\sim\\libs\plugins\function.html_options.php';
?>﻿<script>
function select(a) {
    var theForm = document.fr;
    for (i=0; i<theForm.elements.length; i++) {
        if (theForm.elements[i].name=='check[]')
            theForm.elements[i].checked = a;
    }
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Quản lý sim</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">
<form method="get" action="index.php">
<input type="hidden" name="act" value="baogia">
	<table style="width: 100%">
		<tr>
			<td><select name="post[dauso]" style="height: 22px">
			<option value="0" selected="selected">Đầu số</option>
			<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('dauso')->value,'output'=>$_smarty_tpl->getVariable('dauso')->value),$_smarty_tpl);?>
</select><select name="post[loaisim]" style="height: 22px">
			<option value="0" selected="selected">Loại sim</option>
			<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('loaisim')->value,'output'=>$_smarty_tpl->getVariable('loaisim')->value),$_smarty_tpl);?>
</select>
			<select name="post[daily]">
			<option value="0" selected="selected">Đại lý</option>
			<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('id')->value,'output'=>$_smarty_tpl->getVariable('hovaten')->value),$_smarty_tpl);?>
</select>
			<select name="post[oder]" style="width: 122px">
			<option value="order by giaban desc">Giảm</option>
			<option value="order by giaban asc">Tăng</option>
			</select>
			<input name="post[search]" type="text" style="width: 250px;">
			<input name="submit" type="submit" value="Tìm kiếm" class="go"><span style="color:#FF0000; font-size:16px; font-weight:bold;"> <?php echo $_smarty_tpl->getVariable('demsim')->value;?>
</span>
			<a href="<?php echo $_smarty_tpl->getVariable('my_link')->value;?>
&delsearch=yes">Xóa Tất Cả</a></td>
		</tr>
	</table>
	</form>
	<form method="post" name="fr">
	<table  style="width: 100%; font-weight:bold;" border="1" bgcolor="#FFFFFF";>
		<tr class="ui-widget-header" style="height:40px">
			<td style="text-align: center; width: 39px"><strong>STT</strong></td>
			<td style="width: 129px"><strong>Số Sim</strong></td>
			<td style="width: 107px"><strong>Giá bán</strong></td>
			<td style="width: 91px"><strong>Giá đại lý</strong></td>
			<td style="width: 50px;"><strong>%</strong></td>
			<td style="width: 206px"><strong>Đại lý</strong></td>
			<td style="width: 100px; text-align: center;"><strong>Sửa</strong></td>
			<td style="width: 100px; text-align: center;"><strong>Xóa</strong></td>
			<td style="width: 100px; text-align: center"><strong><a href="javascript:select(1)">Check</a> |<a href="javascript:select(0)">Uncheck</a></strong></td>
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
		
		<tr id="s<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
">
			<td style="width: 39px; color:#FF0000; font-weight:normal;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
			<td style="width: 129px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
</td>
			<td style="width: 107px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
</td>
			<td style="width: 91px; color:#009900;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['gianhap'];?>
</td>
			<td style="width: 50px; color:#FF0000;"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['pt'];?>
%</td>
			<td style="width: 206px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['daily'];?>
</td>
			<td style="width: 100px;  font-weight:normal;">
			<a style="color:#FF0000;" onclick="$('#<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
').show();$('#s<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
').hide();" href="javascript:void(0)">Sửa</a></td>
			<td style="width: 100px;  font-weight:normal;"><a style="color:#FF0000;" onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
 khỏi website')" href="<?php echo $_smarty_tpl->getVariable('my_link')->value;?>
&del=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
">Xóa</a></td>
			<td style="text-align: center;">
			<input name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
"></td>
		</tr>
		
		<tr id="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
" style="display:none">
			<td style="width: 39px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['stt'];?>
</td>
			<td style="width: 129px">
			<input name="p[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
][sim1]" type="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
"></td>
			<td style="width: 107px">
			<input name="p[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
][giaban]" type="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['giaban'];?>
"></td>
			<td style="width: 91px">
			<input name="p[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
][gianhap]" type="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['gianhap'];?>
"></td>
			<td style="width: 206px"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['daily'];?>
</td>
			<td style="width: 100px">
			<input name="sua[<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
]" type="submit" value="Sửa" class="go"></td>
			<td style="width: 100px"><a onclick="return conf('<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['sim1'];?>
 khỏi website')" href="<?php echo $_smarty_tpl->getVariable('my_link')->value;?>
&del=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
">Xóa</a></td>
			<td style="text-align: center;">
			<input name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['simid'];?>
"></td>
		</tr>
		
		<?php endfor; endif; ?>
		<tr>
			<td style="width: 39px"></td>
			<td style="width: 129px"></td>
			<td style="width: 107px"></td>
			<td style="width: 91px"></td>
			<td style="text-align: right;" colspan="4"><a target="_blank" href="aindex.php<?php echo $_smarty_tpl->getVariable('my_link')->value;?>
&taive=1" class="go">Tải về</a>
			<a href="#" class="go">Sửa nhiều</a><input name="xoaall" type="submit" value="Xóa" class="go"></td>
		</tr>
	</table>
	</form>
	<br>
	<?php echo $_smarty_tpl->getVariable('paging')->value;?>

</div></div>

