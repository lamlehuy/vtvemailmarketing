<?php /* Smarty version Smarty-3.1.7, created on 2017-06-27 04:10:43
         compiled from "E:\PhpCode\LeGia\demo.quanlykhachhang.info\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204255951dac32cdc87-84429715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c9dbdf36759c097007326ae59013e31c27aeb2' => 
    array (
      0 => 'E:\\PhpCode\\LeGia\\demo.quanlykhachhang.info\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1498532862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204255951dac32cdc87-84429715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5951dac32d9e4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5951dac32d9e4')) {function content_5951dac32d9e4($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Cung cấp bởi <a href="http://quanlykhachhang.info" target="_blank">VTV-CRM</a> - 7.0&nbsp;&nbsp;© 2017 - <?php echo date('Y');?>

        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/faq" target="_blank">Câu hỏi thường gặp</a>
        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/video" target="_blank">Video hướng dẫn</a>
        &nbsp;|&nbsp;<a href="http://quanlykhachhang.info/contact" target="_blank">Liên hệ</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>