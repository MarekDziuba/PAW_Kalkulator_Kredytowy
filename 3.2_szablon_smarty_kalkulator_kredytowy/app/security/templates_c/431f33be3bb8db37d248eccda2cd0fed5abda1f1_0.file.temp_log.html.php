<?php
/* Smarty version 4.5.1, created on 2024-03-24 17:56:02
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy\templates\temp_log.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66005b225114f1_36505268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '431f33be3bb8db37d248eccda2cd0fed5abda1f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\templates\\temp_log.html',
      1 => 1711299012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66005b225114f1_36505268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168485575966005b22506b46_46889053', 'header_log');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92308182166005b22508d00_93194448', 'content_log');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1771696566005b22509692_26384294', 'error_msg');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../app/security/login_view.html");
}
/* {block 'header_log'} */
class Block_168485575966005b22506b46_46889053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_log' => 
  array (
    0 => 'Block_168485575966005b22506b46_46889053',
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
class Block_92308182166005b22508d00_93194448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_log' => 
  array (
    0 => 'Block_92308182166005b22508d00_93194448',
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
class Block_1771696566005b22509692_26384294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_msg' => 
  array (
    0 => 'Block_1771696566005b22509692_26384294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
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
