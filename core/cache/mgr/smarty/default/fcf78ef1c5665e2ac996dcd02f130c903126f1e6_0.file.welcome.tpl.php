<?php /* Smarty version 3.1.27, created on 2016-08-15 14:02:43
         compiled from "D:\OpenServer\domains\doodles\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2637057b1a153505f23_74051642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf78ef1c5665e2ac996dcd02f130c903126f1e6' => 
    array (
      0 => 'D:\\OpenServer\\domains\\doodles\\manager\\templates\\default\\welcome.tpl',
      1 => 1461218622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2637057b1a153505f23_74051642',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57b1a15350dc24_80993838',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57b1a15350dc24_80993838')) {
function content_57b1a15350dc24_80993838 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2637057b1a153505f23_74051642';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>