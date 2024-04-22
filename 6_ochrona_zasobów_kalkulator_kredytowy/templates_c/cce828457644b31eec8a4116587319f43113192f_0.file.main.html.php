<?php
/* Smarty version 4.5.1, created on 2024-04-22 17:18:39
  from 'C:\xampp\htdocs\5ab_kontroler_główny_kalkulator_kredytowy - Copy\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66267fcf811436_64658970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cce828457644b31eec8a4116587319f43113192f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\5ab_kontroler_główny_kalkulator_kredytowy - Copy\\app\\views\\templates\\main.html',
      1 => 1712482535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66267fcf811436_64658970 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44853896566267fcf80ea96_53968273', 'header');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54589877566267fcf80ef30_48915815', 'banner');
?>


			<section id="one" class="spotlight style1 bottom">
				<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">
								<header>
									<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
								</header>
							</div>
							<div class="col-4 col-12-medium">
								<p>Planujesz wziąć kredyt <?php echo (($tmp = $_smarty_tpl->tpl_vars['common_word_1']->value ?? null)===null||$tmp==='' ? "hip1" ?? null : $tmp);?>
 i szukasz odpowiedzi na pytanie 
								jak wybrać najkorzystniejszą ofertę? A może interesuje Cię kalkulator nadpłat <?php echo (($tmp = $_smarty_tpl->tpl_vars['common_word_2']->value ?? null)===null||$tmp==='' ? "hip2" ?? null : $tmp);?>
? 
								Nasz kalkulator kredytowy może Ci w tym pomóc!</p>
							</div>
							<div class="col-4 col-12-medium">
								<p>Kalkulator <?php echo (($tmp = $_smarty_tpl->tpl_vars['common_word_1']->value ?? null)===null||$tmp==='' ? "hip1" ?? null : $tmp);?>
 pozwoli Ci zaoszczędzić czas i pieniądze, 
								uniknąć frustracji przy podejmowaniu ważnych decyzji finansowych oraz znaleźć najlepszą ofertę <?php echo (($tmp = $_smarty_tpl->tpl_vars['common_word_2']->value ?? null)===null||$tmp==='' ? "hip2" ?? null : $tmp);?>
 dla Ciebie. </p>
							</div>
						</div>
					</div>
				</div>
				<a href="#two" class="goto-next scrolly">Next</a>
			</section>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112357421466267fcf8109d5_55391791', 'content');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113404959966267fcf810d89_90964526', 'source');
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68468046066267fcf8110e0_62075467', 'footer');
}
/* {block 'header'} */
class Block_44853896566267fcf80ea96_53968273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_44853896566267fcf80ea96_53968273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_54589877566267fcf80ef30_48915815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_54589877566267fcf80ef30_48915815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_112357421466267fcf8109d5_55391791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_112357421466267fcf8109d5_55391791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'source'} */
class Block_113404959966267fcf810d89_90964526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'source' => 
  array (
    0 => 'Block_113404959966267fcf810d89_90964526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'source'} */
/* {block 'footer'} */
class Block_68468046066267fcf8110e0_62075467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_68468046066267fcf8110e0_62075467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
