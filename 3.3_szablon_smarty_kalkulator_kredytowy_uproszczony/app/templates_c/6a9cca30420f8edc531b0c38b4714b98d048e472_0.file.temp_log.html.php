<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:58:56
  from 'C:\xampp\htdocs\3.2_szablon_smarty_kalkulator_kredytowy\templates\temp_log.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66005bd0e53a24_45262630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a9cca30420f8edc531b0c38b4714b98d048e472' => 
    array (
      0 => 'C:\\xampp\\htdocs\\3.2_szablon_smarty_kalkulator_kredytowy\\templates\\temp_log.html',
      1 => 1711299012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66005bd0e53a24_45262630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81080592666005bd0e48615_31866948', 'header_log');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5939016266005bd0e4a7c2_85805365', 'content_log');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90019232166005bd0e4b173_63521480', 'error_msg');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../app/security/login_view.html");
}
/* {block 'header_log'} */
class Block_81080592666005bd0e48615_31866948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_81080592666005bd0e48615_31866948',
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
class Block_5939016266005bd0e4a7c2_85805365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_5939016266005bd0e4a7c2_85805365',
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
/* {block 'error_msg'} */
class Block_90019232166005bd0e4b173_63521480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_msg' => 
  array (
    0 => 'Block_90019232166005bd0e4b173_63521480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\3.2_szablon_smarty_kalkulator_kredytowy\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

								<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
						<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg', false, 'key');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li>'<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
'</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ol>
					<?php }?>
				<?php }?>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
				
<?php
}
}
/* {/block 'error_msg'} */
}
