<?php /* Smarty version Smarty-3.0.7, created on 2013-07-01 14:09:05
         compiled from "./templates/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:196282590551d12b11992769-40747812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392c227f1c93bb5c160057a309217e6bb3639f8c' => 
    array (
      0 => './templates/header.htm',
      1 => 1372662543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196282590551d12b11992769-40747812',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="FWFZUBnCP-AIZqOxaKoDJ1laj5m-hJBgzUHrOhCwCPY" />
<meta name="description" content="Sim Số Đẹp - Sim Tứ Quý - Sim Vip" />
<meta name="y_key" content="<?php echo $_smarty_tpl->getVariable('my_ykey')->value;?>
" />
<meta name="msvalidate.01" content="B57481CA36A637BB0A11F598C931932B" />
<meta name="DISTRIBUTION" content="GLOBAL" />
<meta http-equiv="Content-language" content="vi" />
<meta name="keywords" content="Sim So Dep, <?php echo $_smarty_tpl->getVariable('my_title')->value;?>
" />
<meta name="copyright" content="Copyright (c)<?php echo $_smarty_tpl->getVariable('my_web_add')->value;?>
" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/iconco.ico" />
<link type="text/css" href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/ajax.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('my_domain')->value;?>
/style.css" />
	<!--[if IE]>
	<link rel="stylesheet" href="ie.css">
	<![endif]-->
	
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie6.css">
	<![endif]--> 
	<link href="sim_files/default.css" rel="stylesheet" type="text/css"> 
	<!-- Add this to have a specific theme--> 
	<link href="sim_files/lighting.css" rel="stylesheet" type="text/css"> 
	
	</head>

<body>
		<div id="dialog">
			<div id="viewopen">
			</div>

		</div>
<center>
<div class="wrap"> 

	<div class="header">	
			<div class="banner">
			<embed class="img" src="images/banners/sim468.swf" width="958px" height="161px" quality="High" wmode="Transparent" loop="true" play="true" menu="false" allowfullscreen="false" allowscriptaccess="sameDomain" scale="ExactFit" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed>
				<div class="menutop">
					<?php echo $_smarty_tpl->getVariable('nav')->value;?>

					</div>
			</div>

	</div>
	<div class="content">
	
	<table style="width: 100%" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top">
			<div class="bentrai"><div class="menucontent"><h2><center>Danh sách nhà mạng</center></h2><ul class="listmenu"><?php echo $_smarty_tpl->getVariable('menu')->value;?>

			  </ul></div><div class="menucontent"><h2><center>Số đẹp theo phân loại</center></h2><ul class="listmenu">
				
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('link')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<li><a title="<?php echo $_smarty_tpl->getVariable('linkname')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
" href="<?php echo $_smarty_tpl->getVariable('link')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
"><?php echo $_smarty_tpl->getVariable('linkname')->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']];?>
</a></li>
				<?php endfor; endif; ?>
				
				
				</ul></div><div class="menucontent"><h2><center>Sim đẹp theo giá</center></h2><ul class="listmenu"><?php echo $_smarty_tpl->getVariable('p_mucgia')->value;?>
</ul></div>		
				<!--<div class="menucontent">
			<h2><center>Đơn đặt hàng</center></h2>
			<marquee direction="UP" behavior="SCROLL" scrolldelay="1" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();" height="200">
			<?php echo $_smarty_tpl->getVariable('donhang')->value;?>

			</marquee>
		</div>-->
		<div class="menucontent"><h2><center>Thống kê</center></h2><div class="bannerx">
		<div class="ui-tabs-panel ui-widget-content">
											<div id="simcount" style="margin:0px;width:100%;display:block">
											</div>
											<div id="counter">
											<script>$('#counter').load('counter.php');</script>
											</div>
		  </div>

		</div></div>
		
		<div class="menucontent"><h2><center>Quảng cáo</center></h2><div class="bannerx">
		<?php echo $_smarty_tpl->getVariable('p_quangcao_left')->value;?>

		</div></div>
		
		
		</div></td>
		<td valign="top">
							<div class="bentrong">
