<?php
/* Smarty version 4.5.1, created on 2024-04-22 19:09:27
  from 'C:\xampp\htdocs\6_ochrona_zasobów_kalkulator_kredytowy\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_662699c7cb7692_31438874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e5eae0a8b739fba1eb3a91147d785e361b3edf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6_ochrona_zasobów_kalkulator_kredytowy\\app\\views\\calc.tpl',
      1 => 1713805761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662699c7cb7692_31438874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1063365162662699c7ca7329_02505158', 'header');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1244029836662699c7caa200_37034817', 'banner');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830573505662699c7cad6c5_98050523', 'content');
?>

		

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1969606943662699c7cb6d73_26121584', 'footer');
?>

			<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_1063365162662699c7ca7329_02505158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1063365162662699c7ca7329_02505158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Header -->
				<header id="header">
				<h1 id="logo""><a href="ctrl.php"><img src="images/Logo.png" style="width: 75px;"></a></h1>
					<nav id="nav">
						<ul>
							<li>
							<a id="role">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</a>
							</li>
							<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button primary">Wyloguj</a>
							</li>
						</ul>
					</nav>
				</header>
		<?php
}
}
/* {/block 'header'} */
/* {block 'banner'} */
class Block_1244029836662699c7caa200_37034817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1244029836662699c7caa200_37034817',
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
class Block_830573505662699c7cad6c5_98050523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_830573505662699c7cad6c5_98050523',
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
					<label for="id_z">
					<?php if ($_smarty_tpl->tpl_vars['user']->value->role == "admin") {?>
					Oprocentowanie (1%-99%):
					<?php } else { ?>
					Oprocentowanie (5%-20%):
					<?php }?>
					</label>
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
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1969606943662699c7cb6d73_26121584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1969606943662699c7cb6d73_26121584',
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
