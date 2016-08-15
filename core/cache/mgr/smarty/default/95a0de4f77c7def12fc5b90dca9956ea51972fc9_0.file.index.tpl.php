<?php /* Smarty version 3.1.27, created on 2016-08-15 14:49:01
         compiled from "D:\OpenServer\domains\doodles\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2408557b1ac2d42eac8_73082427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a0de4f77c7def12fc5b90dca9956ea51972fc9' => 
    array (
      0 => 'D:\\OpenServer\\domains\\doodles\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1461218622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2408557b1ac2d42eac8_73082427',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57b1ac2d43e4c8_23330390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57b1ac2d43e4c8_23330390')) {
function content_57b1ac2d43e4c8_23330390 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2408557b1ac2d42eac8_73082427';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>