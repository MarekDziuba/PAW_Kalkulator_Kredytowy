<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:31:01
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660055455b6f51_95236339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d363255a094f6dbefe7c5338ec04f119d1703da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\app\\security\\login_view.html',
      1 => 1711297859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660055455b6f51_95236339 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
assets/css/noscript.css" /></noscript>
</head>
<body>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180612995660055455b5f77_31629301', 'header_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265454342660055455b6771_17871312', 'content_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1016824803660055455b6ba1_97329822', 'error_msg');
?>


</body>
</html><?php }
/* {block 'header_log'} */
class Block_180612995660055455b5f77_31629301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_180612995660055455b5f77_31629301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_log'} */
/* {block 'content_log'} */
class Block_265454342660055455b6771_17871312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_265454342660055455b6771_17871312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_log'} */
/* {block 'error_msg'} */
class Block_1016824803660055455b6ba1_97329822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_msg' => 
  array (
    0 => 'Block_1016824803660055455b6ba1_97329822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error_msg'} */
}
