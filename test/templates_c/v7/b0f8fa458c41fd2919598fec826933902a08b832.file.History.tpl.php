<?php /* Smarty version Smarty-3.1.7, created on 2021-10-08 19:00:50
         compiled from "E:\wamp64\www\redian\vtiger\vtigercrm70\includes\runtime/../../layouts/v7\modules\Vtiger\History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:915761609562d06bd5-17494206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f8fa458c41fd2919598fec826933902a08b832' => 
    array (
      0 => 'E:\\wamp64\\www\\redian\\vtiger\\vtigercrm70\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\History.tpl',
      1 => 1495532912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '915761609562d06bd5-17494206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61609562d5939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61609562d5939')) {function content_61609562d5939($_smarty_tpl) {?>
<div class="HistoryContainer"><div class="historyButtons btn-group" role="group" aria-label="..."><button type="button" class="btn btn-default" onclick='Vtiger_Detail_Js.showUpdates(this);'><?php echo vtranslate("LBL_UPDATES",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div><div class='data-body'></div></div><?php }} ?>