<?php
/* Smarty version 4.5.1, created on 2024-04-22 17:18:39
  from 'C:\xampp\htdocs\5ab_kontroler_główny_kalkulator_kredytowy - Copy\app\views\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66267fcf804d68_20301364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd270647ed705e665312a170103899e746d2fb1f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\5ab_kontroler_główny_kalkulator_kredytowy - Copy\\app\\views\\calc.html',
      1 => 1713799048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66267fcf804d68_20301364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46011321466267fcf7f4379_68529745', 'header');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140110013866267fcf7f7139_94875046', 'banner');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100185278866267fcf7fab74_56278892', 'content');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168757921866267fcf803268_23553193', 'source');
?>

		

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214070347766267fcf804149_17404976', 'footer');
?>

			<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_46011321466267fcf7f4379_68529745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_46011321466267fcf7f4379_68529745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Header -->
				<header id="header">
				<h1 id="logo"><a href="ctrl.php"><img src="images/Logo.png" style="width: 75px;"></a></h1>
					<nav id="nav">
						<ul>
							<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php" class="button primary">Home</a>
							</li>
						</ul>
					</nav>
				</header>
		<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_140110013866267fcf7f7139_94875046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_140110013866267fcf7f7139_94875046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<section id="banner">
			<div class="content">
				<header>
					<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
					<p>Potrzebujesz kredytu/policzyć swoją zdolność kredytową?</p>
				</header>
				<span class="image"><img src="images/pic01.jpg" alt="" /></span>
			</div>
			<a href="#one" class="goto-next scrolly">Next</a>
		</section>
		<?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_100185278866267fcf7fab74_56278892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_100185278866267fcf7fab74_56278892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<!-- One -->
	<br/>
	<section style="padding-top: 50px;" id="two">	
		<div class="content">
			<div class="container">
				<div class="row">	
					<div class="col-4 col-12-medium" style="float: left;">
						
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute#res" method="post" id="res">
					<label for="id_x">Kwota kredytu (10 000zl - 300 000zl): </label>
					<input id="id_x" type="text" name="kredyt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kredyt;?>
" /><br />
					<label for="id_y">Ile lat (5-20): </label>
					<input id="id_y" type="text" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
" /><br />
					<label for="id_z">Oprocentowanie (5%-20%): </label>
					<input id="id_z" type="text" name="oproc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oproc;?>
" /><br />
					<input type="submit" value="Oblicz"/>
				</form>	
				</div>
				<div style="padding-left: 5%; padding-top: 1em; text-align: center;" id="res">
			
								
					<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
						<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; color:black; font-size:30px; min-width:25em;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
								<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ol>
					<?php }?>
			
					<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
					<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff9966; color:black; font-size:30px; width:25em;">
					Twoja miesięczna rata wynosi: <br><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zl
				</div>
				<?php }?>
				</div>
			</div>	
		</div>
	</div>
</section>
<br/>
		<?php
}
}
/* {/block 'content'} */
/* {block 'source'} */
class Block_168757921866267fcf803268_23553193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'source' => 
  array (
    0 => 'Block_168757921866267fcf803268_23553193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<section class="wrapper style2 special fade">
			<div class="container">
				<header>
					<h2>Źródło</h2>
					<p>Widok oparty na stylach i szablonie <a href="https://html5up.net/landed" style="color: black">html5up.</a> (autor przykładu: <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_author']->value ?? null)===null||$tmp==='' ? "Nieznany" ?? null : $tmp);?>
)</p>
					<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Brak" ?? null : $tmp);?>
</p>
				</header>
			</div>
		</section>
		<?php
}
}
/* {/block 'source'} */
/* {block 'footer'} */
class Block_214070347766267fcf804149_17404976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_214070347766267fcf804149_17404976',
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

<?php echo '<script'; ?>
 src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php
}
}
/* {/block 'footer'} */
}
