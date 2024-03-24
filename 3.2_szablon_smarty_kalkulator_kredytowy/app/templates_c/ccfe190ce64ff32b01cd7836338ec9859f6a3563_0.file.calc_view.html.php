<?php
/* Smarty version 4.5.1, created on 2024-03-24 16:16:23
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660043c7c67582_06515520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccfe190ce64ff32b01cd7836338ec9859f6a3563' => 
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
function content_660043c7c67582_06515520 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18117115660043c7c666f9_46467519', 'header_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_857347415660043c7c66e42_56770463', 'content_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808540366660043c7c67279_27592623', 'footer_kal');
}
/* {block 'header_kal'} */
class Block_18117115660043c7c666f9_46467519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_kal' => 
  array (
    0 => 'Block_18117115660043c7c666f9_46467519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_kal'} */
/* {block 'content_kal'} */
class Block_857347415660043c7c66e42_56770463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_kal' => 
  array (
    0 => 'Block_857347415660043c7c66e42_56770463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_kal'} */
/* {block 'footer_kal'} */
class Block_1808540366660043c7c67279_27592623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_kal' => 
  array (
    0 => 'Block_1808540366660043c7c67279_27592623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer_kal'} */
}
