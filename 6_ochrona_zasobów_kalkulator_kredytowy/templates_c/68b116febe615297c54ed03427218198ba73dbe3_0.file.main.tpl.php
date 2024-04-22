<?php
/* Smarty version 4.5.1, created on 2024-04-22 18:17:40
  from 'C:\xampp\htdocs\6_ochrona_zasobów_kalkulator_kredytowy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66268da4527022_96928997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b116febe615297c54ed03427218198ba73dbe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6_ochrona_zasobów_kalkulator_kredytowy\\app\\views\\templates\\main.tpl',
      1 => 1713802654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66268da4527022_96928997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
assets/css/noscript.css" /></noscript>
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187532730466268da45261c7_05737132', 'header');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25412680266268da4526653_02708115', 'banner');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64496878366268da45269d6_78649584', 'content');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167186460166268da4526d40_07999612', 'footer');
}
/* {block 'header'} */
class Block_187532730466268da45261c7_05737132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_187532730466268da45261c7_05737132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_25412680266268da4526653_02708115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_25412680266268da4526653_02708115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_64496878366268da45269d6_78649584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64496878366268da45269d6_78649584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_167186460166268da4526d40_07999612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_167186460166268da4526d40_07999612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
