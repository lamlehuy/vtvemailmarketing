<?php /* Smarty version Smarty-3.1.7, created on 2017-06-27 07:46:45
         compiled from "E:\PhpCode\LeGia\demo.quanlykhachhang.info\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1905559520d6523b7e5-65963442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c296432151d1574deabfecbaf4b01af5a966ddb' => 
    array (
      0 => 'E:\\PhpCode\\LeGia\\demo.quanlykhachhang.info\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardWidgetContents.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905559520d6523b7e5-65963442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59520d6525551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59520d6525551')) {function content_59520d6525551($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div style="margin:0px 10px;"><div><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>