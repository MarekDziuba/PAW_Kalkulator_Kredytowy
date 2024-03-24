<?php
/* Smarty version 4.5.1, created on 2024-03-24 15:53:25
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\main\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66003e6558e3e5_19465839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b55b37e85d127570527b219e8751cb3cecb4dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\main\\main.html',
      1 => 1711284439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66003e6558e3e5_19465839 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50740996066003e6558d8c8_87989853', 'header');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153968288766003e6558dd76_11600108', 'content');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109204928366003e6558e111_60810513', 'footer');
}
/* {block 'header'} */
class Block_50740996066003e6558d8c8_87989853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_50740996066003e6558d8c8_87989853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_153968288766003e6558dd76_11600108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_153968288766003e6558dd76_11600108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_109204928366003e6558e111_60810513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_109204928366003e6558e111_60810513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
