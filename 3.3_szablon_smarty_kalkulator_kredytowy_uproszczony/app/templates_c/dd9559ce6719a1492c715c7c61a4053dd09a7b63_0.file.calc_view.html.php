<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:59:02
  from 'C:\xampp\htdocs\3.2_szablon_smarty_kalkulator_kredytowy\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66005bd6197801_97671263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd9559ce6719a1492c715c7c61a4053dd09a7b63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\3.2_szablon_smarty_kalkulator_kredytowy\\app\\calc_view.html',
      1 => 1711293383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66005bd6197801_97671263 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>

<body>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86134028466005bd6196d17_68387949', 'header_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128864309566005bd6197190_08859886', 'content_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138213512766005bd6197541_74517787', 'footer_kal');
}
/* {block 'header_kal'} */
class Block_86134028466005bd6196d17_68387949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_kal' => 
  array (
    0 => 'Block_86134028466005bd6196d17_68387949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_kal'} */
/* {block 'content_kal'} */
class Block_128864309566005bd6197190_08859886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_kal' => 
  array (
    0 => 'Block_128864309566005bd6197190_08859886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_kal'} */
/* {block 'footer_kal'} */
class Block_138213512766005bd6197541_74517787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_kal' => 
  array (
    0 => 'Block_138213512766005bd6197541_74517787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer_kal'} */
}
