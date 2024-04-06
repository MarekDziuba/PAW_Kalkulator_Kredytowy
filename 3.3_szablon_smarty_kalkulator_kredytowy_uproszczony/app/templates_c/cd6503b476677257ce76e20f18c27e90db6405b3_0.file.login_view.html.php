<?php
/* Smarty version 4.5.1, created on 2024-03-24 18:19:33
  from 'C:\xampp\htdocs\3.2_szablon_smarty_kalkulator_kredytowy\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660060a556aa96_47463855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6503b476677257ce76e20f18c27e90db6405b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\3.2_szablon_smarty_kalkulator_kredytowy\\app\\security\\login_view.html',
      1 => 1711300746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660060a556aa96_47463855 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Logownaie</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
assets/css/noscript.css" /></noscript>
</head>
<body>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078021705660060a5569b60_36627295', 'header_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169846589660060a556a315_25627552', 'content_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_916611094660060a556a727_36555057', 'error_msg');
?>


</body>
</html><?php }
/* {block 'header_log'} */
class Block_1078021705660060a5569b60_36627295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_1078021705660060a5569b60_36627295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_log'} */
/* {block 'content_log'} */
class Block_169846589660060a556a315_25627552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_169846589660060a556a315_25627552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_log'} */
/* {block 'error_msg'} */
class Block_916611094660060a556a727_36555057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_msg' => 
  array (
    0 => 'Block_916611094660060a556a727_36555057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error_msg'} */
}
