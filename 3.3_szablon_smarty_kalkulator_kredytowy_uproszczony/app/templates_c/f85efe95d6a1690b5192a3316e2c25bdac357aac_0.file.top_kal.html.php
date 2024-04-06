<?php
/* Smarty version 4.5.1, created on 2024-03-24 15:49:50
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy - Copy\templates\top_kal.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66003d8e3d58d3_05390449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85efe95d6a1690b5192a3316e2c25bdac357aac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy - Copy\\templates\\top_kal.html',
      1 => 1711290801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66003d8e3d58d3_05390449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



	
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75904774066003d8e3c7de3_15491858', 'header_kal');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111743447766003d8e3c89d2_81222028', 'content_kal');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161345106266003d8e3d41d5_64601997', 'footer_kal');
?>

			<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../app/calc_view.html");
}
/* {block 'header_kal'} */
class Block_75904774066003d8e3c7de3_15491858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_kal' => 
  array (
    0 => 'Block_75904774066003d8e3c7de3_15491858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Header -->
	<header id="header">
	<h1 id="logo"><a href="calc.php"><img src="../images/Logo.png" style="width: 100%;"></a></h1>
		<nav id="nav">
			<ul>
				<li>
				<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="button primary">Logout</a>
				</li>
			</ul>
		</nav>
	</header>
<?php
}
}
/* {/block 'header_kal'} */
/* {block 'content_kal'} */
class Block_111743447766003d8e3c89d2_81222028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_kal' => 
  array (
    0 => 'Block_111743447766003d8e3c89d2_81222028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy-Copy\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<!-- One -->
<section class="spotlight style1 bottom" style="height: 70px;"></section>
<section style="padding-top: 50px;">	
	<div class="content">
		<div class="container">
			<div class="row">	
				<div class="col-4 col-12-medium" style="float: left">
					
				<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
				<label for="id_x">Kwota kredytu (10 000zl - 300 000zl): </label>
				<input id="id_x" type="text" name="kredyt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kredyt'];?>
" /><br />
				<label for="id_y">Ile lat (5-20): </label>
				<input id="id_y" type="text" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lat'];?>
" /><br />
				<label for="id_z">
					
					<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>
					echo 'Oprocentowanie (1%-99%):';
					<?php } else { ?>
					echo 'Oprocentowanie (5%-20%):';
					<?php }?>
					
					
				</label>
				<input id="id_z" type="text" name="oproc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oproc'];?>
" /><br />
				<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
			</form>	
			</div>
			<div style="padding-left: 5%; padding-top: 1em; text-align: center;">
			
						
			<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
					echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; color:black; font-size:30px; min-width:25em;">';
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg', false, 'key');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						echo '<li>'.$msg.'</li>';
					echo '</ol>';
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			<?php }?>
			
				
			<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
				<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff9966; color:black; font-size:30px; width:25em;">
				echo 'Twoja miesięczna rata wynosi: <br>'.$result.' zl'; 
				echo '';
			</div>
			<?php }?>
			</div>

		</div>
				
			
	</div>
</div>
</section>
<?php
}
}
/* {/block 'content_kal'} */
/* {block 'footer_kal'} */
class Block_161345106266003d8e3d41d5_64601997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_kal' => 
  array (
    0 => 'Block_161345106266003d8e3d41d5_64601997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
<footer id="footer">
	<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_footer']->value ?? null)===null||$tmp==='' ? "Stópka" ?? null : $tmp);?>
</p>
	<ul class="copyright">
		<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	</ul>
</footer>

</div>

<!-- Scripts -->
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

</body>
</html>
<?php
}
}
/* {/block 'footer_kal'} */
}
