<?php
/* Smarty version 4.5.1, created on 2024-03-24 18:19:35
  from 'C:\xampp\htdocs\3.2_szablon_smarty_kalkulator_kredytowy\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660060a7dc17b9_27203533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50818143d9a86379a61d56499696d2663f2c8b7d' => 
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
function content_660060a7dc17b9_27203533 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1665968610660060a7dc0383_79976985', 'header_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284908586660060a7dc0e41_39263653', 'content_log');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1013734179660060a7dc1277_56327358', 'error_msg');
?>


</body>
</html><?php }
/* {block 'header_log'} */
class Block_1665968610660060a7dc0383_79976985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_1665968610660060a7dc0383_79976985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_log'} */
/* {block 'content_log'} */
class Block_1284908586660060a7dc0e41_39263653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_1284908586660060a7dc0e41_39263653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content_log'} */
/* {block 'error_msg'} */
class Block_1013734179660060a7dc1277_56327358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_msg' => 
  array (
    0 => 'Block_1013734179660060a7dc1277_56327358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error_msg'} */
}
