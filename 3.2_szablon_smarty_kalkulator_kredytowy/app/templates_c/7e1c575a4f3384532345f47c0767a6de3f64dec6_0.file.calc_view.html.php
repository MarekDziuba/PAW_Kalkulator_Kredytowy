<?php
/* Smarty version 4.5.1, created on 2024-03-24 15:49:50
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy - Copy\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66003d8e3df785_85132074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e1c575a4f3384532345f47c0767a6de3f64dec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy - Copy\\app\\calc_view.html',
      1 => 1711291395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66003d8e3df785_85132074 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
assets/css/noscript.css" />
	</head>

<body>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76901053766003d8e3dec51_95747341', 'header_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54860590166003d8e3df120_45533009', 'content_kal');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165708156166003d8e3df4c2_73134298', 'footer_kal');
}
/* {block 'header_kal'} */
class Block_76901053766003d8e3dec51_95747341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_kal' => 
  array (
    0 => 'Block_76901053766003d8e3dec51_95747341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_kal'} */
/* {block 'content_kal'} */
class Block_54860590166003d8e3df120_45533009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_kal' => 
  array (
    0 => 'Block_54860590166003d8e3df120_45533009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_kal'} */
/* {block 'footer_kal'} */
class Block_165708156166003d8e3df4c2_73134298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_kal' => 
  array (
    0 => 'Block_165708156166003d8e3df4c2_73134298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer_kal'} */
}
