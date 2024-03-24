<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:58:49
  from 'C:\xampp\htdocs\3.2_szablon_smarty_kalkulator_kredytowy\main\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66005bc9c0ee46_60004462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e010229a763ea024d44e699ccc62a5fadd532b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\3.2_szablon_smarty_kalkulator_kredytowy\\main\\main.html',
      1 => 1711284439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66005bc9c0ee46_60004462 (Smarty_Internal_Template $_smarty_tpl) {
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
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208118375766005bc9c0e348_47575746', 'header');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12724638966005bc9c0e7d6_56118506', 'content');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74672210466005bc9c0eb47_68821741', 'footer');
}
/* {block 'header'} */
class Block_208118375766005bc9c0e348_47575746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_208118375766005bc9c0e348_47575746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_12724638966005bc9c0e7d6_56118506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12724638966005bc9c0e7d6_56118506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_74672210466005bc9c0eb47_68821741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_74672210466005bc9c0eb47_68821741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
