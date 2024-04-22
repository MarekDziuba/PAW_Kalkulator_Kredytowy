<?php
/* Smarty version 4.5.1, created on 2024-04-22 18:38:11
  from 'C:\xampp\htdocs\6_ochrona_zasobów_kalkulator_kredytowy\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_662692738c8440_81190695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec415c90509874b7ae62af737a0431c862598ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6_ochrona_zasobów_kalkulator_kredytowy\\app\\views\\login_view.tpl',
      1 => 1713803888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_662692738c8440_81190695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883438482662692738c3c47_64699925', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_412948054662692738c7ff7_55931117', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1883438482662692738c3c47_64699925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1883438482662692738c3c47_64699925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div style="width:90%; margin: 2em auto;">

				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
				<legend style="text-align: center; font-size: 25px;">Logowanie</legend>
					<fieldset>
						<label for="id_login">Login: </label>
						<input id="id_login" type="text" name="login" />
						<br/>
						<label for="id_pass">Pass: </label>
						<input id="id_pass" type="password" name="pass" />
					</fieldset>
					<br/>
					<input type="submit" value="zaloguj"/>
				</form>	
				
				<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_412948054662692738c7ff7_55931117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_412948054662692738c7ff7_55931117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
/* {/block 'footer'} */
}
