<?php /* Smarty version Smarty-3.0.7, created on 2013-03-09 14:21:30
         compiled from "./templates/pageedit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2053906860513ae2fa6d0b86-34176906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244f22e68e5d4ae9aa6a706a034535c4552b85f5' => 
    array (
      0 => './templates/pageedit.htm',
      1 => 1362801877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053906860513ae2fa6d0b86-34176906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿	<script type="text/javascript" src="../filemanager_in_ckeditor/js/ckeditor/ckeditor.js"></script>
	<script src="../filemanager_in_ckeditor/sample.js" type="text/javascript"></script>
	<link href="../filemanager_in_ckeditor/sample.css" rel="stylesheet" type="text/css" />

<head>
<form method="post" action="">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all">

	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">

		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-default">

		<a>Sửa trang</a></li>

	</ul>

	<div class="ui-tabs-panel ui-widget-content ui-corner-bottom">

<table style="width: 100%">
	<tr>
		<td style="text-align: left">Mã Trang: 
		<input name="post[pcode]" type="text" style="width: 9%" value="<?php echo $_smarty_tpl->getVariable('pcode')->value;?>
"></td>
	</tr>
	<tr>
		<td style="text-align: left">Tiêu đề: 
		<input name="post[ptitle]" type="text" style="width: 60%" value="<?php echo $_smarty_tpl->getVariable('ptitle')->value;?>
"></td>
	</tr>
	<tr>
		<td>	<textarea cols="80" id="editor1" name="post[pconment]" rows="10"><?php echo $_smarty_tpl->getVariable('pconment')->value;?>
</textarea>
			<script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'editor1',
                {
                    filebrowserBrowseUrl :'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/browser/default/browser.html?Connector=http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserImageBrowseUrl : 'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
                    filebrowserFlashBrowseUrl :'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/connector.php',
					filebrowserUploadUrl  :'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=File',
					filebrowserImageUploadUrl : 'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
					filebrowserFlashUploadUrl : 'http://'+document.domain+'/filemanager_in_ckeditor/js/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
				});

			//]]>
			</script>
</td>
</td>
	</tr>
	<tr>
		<td style="text-align: center">
		<input name="submit" type="submit" value="Sửa" class="go">&nbsp;<input name="Reset1" type="reset" value="Làm lại" class="go"></td>
	</tr>
</table>
			

</div></div>
