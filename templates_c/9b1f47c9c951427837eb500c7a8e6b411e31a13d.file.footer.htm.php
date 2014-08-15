<?php /* Smarty version Smarty-3.0.7, created on 2013-06-18 09:48:30
         compiled from "./templates/footer.htm" */ ?>
<?php /*%%SmartyHeaderCode:185097398351bfca7e7dc9a8-21382243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1f47c9c951427837eb500c7a8e6b411e31a13d' => 
    array (
      0 => './templates/footer.htm',
      1 => 1371523644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185097398351bfca7e7dc9a8-21382243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿</div>

</td>

<td valign="top">

<div class="benphai"><div class="menucontent"><h2>Hỗ trợ mua sim</h2><div class="bannerx">

				<?php echo $_smarty_tpl->getVariable('p_hotline')->value;?>
</div></div>		<div class="cartcontent" id="cartcontent">

			<h2>Sim đẹp mới về</h2>

			<marquee direction="down" behavior="SCROLL" scrolldelay="1" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();" style="overflow: hide" height="168">

				<table id="slidee" style="border-collapse: collapse; background: none repeat scroll 0% 0% rgb(255, 255, 255);" width="100%" border="1" bordercolor="#C0C0C0" cellpadding="5">

<tbody>				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('simmoi')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>

					<tr>

						<td align="center"><b><?php echo $_smarty_tpl->getVariable('simmoi')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['sosim'];?>
</b><br>

						<a href="dat-mua-sim-so-dep-<?php echo $_smarty_tpl->getVariable('simmoi')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['sosim'];?>
.html" title="Mua sim này"><?php echo $_smarty_tpl->getVariable('simmoi')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['giatien'];?>
<sup>vnd</sup></a></td>

					</tr>

					<?php endfor; endif; ?>

					</tbody></table></marquee>

		</div>

		<div class="menucontent"><h2>Tải báo giá</h2><div class="bannerx"><div style="background: #FFFFFF; padding: 5px;">

<form method="post" action="sim-so-dep-taibangso.htm" onsubmit="return false">



			<br />



			<select name="Select1" style="width: 85%" onchange="window.location.href='taibangso-'+this.options[selectedIndex].value+'.html';">



			<option selected="selected" value="0">Chọn thể loại</option>



			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('linkf')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>



			<option value="<?php echo $_smarty_tpl->getVariable('linkf')->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']];?>
">- <?php echo $_smarty_tpl->getVariable('linknamef')->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']];?>
</option>



			<?php endfor; endif; ?></select><button class="sub">Tải báo giá</button><br />



		</form>



</div></div></div>

		

		<div class="menucontent"><h2>Tài khoản ngân hàng</h2><div class="bannerx"><div style="background: #FFFFFF; padding: 5px;">

<?php echo $_smarty_tpl->getVariable('p_taikhoan')->value;?>


</div></div></div><div class="menucontent"><h2>Quảng cáo</h2><div class="bannerx">			

	<?php echo $_smarty_tpl->getVariable('p_quangcao')->value;?>


	</div></div></div>

	</td>

	</tr>

</table>

			<div style="clear:both"> </div>

	

	</div>

	<div style="clear:both"> </div>

	<div class="footer">

				<div class="menubottom">

							</div>

		

			<div class="footercontent"><div class="footercontent">

<?php echo $_smarty_tpl->getVariable('p_banquyen')->value;?>


</div></div>

	</div>



</div>

</center>

<span style="padding-left:80px; display:none;">Design By: <a target="_blank" href="http://www.stv.vn">www.stv.vn</a></span>

</body></html>