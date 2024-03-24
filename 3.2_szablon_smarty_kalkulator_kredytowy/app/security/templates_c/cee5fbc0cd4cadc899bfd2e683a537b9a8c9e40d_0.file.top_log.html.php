<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:50:09
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\templates\top_log.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660059c1bf0ae1_13282914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee5fbc0cd4cadc899bfd2e683a537b9a8c9e40d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\templates\\top_log.html',
      1 => 1711299008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660059c1bf0ae1_13282914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332563107660059c1bedd59_68501957', 'header_log');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998661476660059c1bf0151_23181488', 'content_log');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../app/security/login_view.html");
}
/* {block 'header_log'} */
class Block_332563107660059c1bedd59_68501957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_332563107660059c1bedd59_68501957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Header -->
				<br/>
				<header id="header">
				<h1 id="logo"><a href="calc.php"><img src="../images/Logo.png"></a></h1>
					<nav id="nav">
						<ul>
							<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php">Home</a>
							</li>
						</ul>
					</nav>
				</header>
				<br/>
<?php
}
}
/* {/block 'header_log'} */
/* {block 'content_log'} */
class Block_1998661476660059c1bf0151_23181488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_1998661476660059c1bf0151_23181488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div style="width:90%; margin: 2em auto;">

				<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
				<legend style="text-align: center; font-size: 25px;">Logowanie</legend>
					<fieldset>
						<label for="id_login">Login: </label>
						<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
						<br/>
						<label for="id_pass">Pass: </label>
						<input id="id_pass" type="password" name="pass" />
					</fieldset>
					<br/>
					<input type="submit" value="zaloguj"/>
				</form>	
<?php
}
}
/* {/block 'content_log'} */
}
