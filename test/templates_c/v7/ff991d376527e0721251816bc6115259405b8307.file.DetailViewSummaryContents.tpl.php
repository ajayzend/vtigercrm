<?php /* Smarty version Smarty-3.1.7, created on 2021-10-09 10:56:37
         compiled from "E:\wamp64\www\redian\vtiger\vtigercrm70\includes\runtime/../../layouts/v7\modules\PurchaseOrder\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:770616175650d68b3-96084629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff991d376527e0721251816bc6115259405b8307' => 
    array (
      0 => 'E:\\wamp64\\www\\redian\\vtiger\\vtigercrm70\\includes\\runtime/../../layouts/v7\\modules\\PurchaseOrder\\DetailViewSummaryContents.tpl',
      1 => 1495532912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770616175650d68b3-96084629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_616175650f259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616175650f259')) {function content_616175650f259($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>