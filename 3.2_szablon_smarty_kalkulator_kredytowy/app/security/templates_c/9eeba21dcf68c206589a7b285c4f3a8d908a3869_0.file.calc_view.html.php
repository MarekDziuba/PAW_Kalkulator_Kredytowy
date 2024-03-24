<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:00:37
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66004e256a0272_88798312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eeba21dcf68c206589a7b285c4f3a8d908a3869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\app\\calc_view.html',
      1 => 1711293383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66004e256a0272_88798312 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19598179066004e2569f709_57003868', 'header_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16168559366004e2569fbe6_79001156', 'content_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18383937066004e2569ffa8_06349806', 'footer_kal');
}
/* {block 'header_kal'} */
class Block_19598179066004e2569f709_57003868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_kal' => 
  array (
    0 => 'Block_19598179066004e2569f709_57003868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_kal'} */
/* {block 'content_kal'} */
class Block_16168559366004e2569fbe6_79001156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_kal' => 
  array (
    0 => 'Block_16168559366004e2569fbe6_79001156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_kal'} */
/* {block 'footer_kal'} */
class Block_18383937066004e2569ffa8_06349806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_kal' => 
  array (
    0 => 'Block_18383937066004e2569ffa8_06349806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer_kal'} */
}
