<?php
/* Smarty version 4.5.1, created on 2024-03-24 15:48:57
  from 'C:\xampp\htdocs\4.1_szablon_smarty_kredytowy - Copy\templates\top_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66003d59b3e016_78634180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2cd13589be90c42bd5b4989763a53da063d96d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\4.1_szablon_smarty_kredytowy - Copy\\templates\\top_main.html',
      1 => 1711289675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66003d59b3e016_78634180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80391722366003d59b363b4_21852182', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140003260666003d59b3afc4_77052058', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111447354066003d59b3d582_03242397', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../main/main.html");
}
/* {block 'header'} */
class Block_80391722366003d59b363b4_21852182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_80391722366003d59b363b4_21852182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php"><img src="images/Logo.png"></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="app/calc.php" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>
				<section class="spotlight style1 bottom" style="height: 70px;"></section>

			<!-- Banner -->
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
/* {/block 'header'} */
/* {block 'content'} */
class Block_140003260666003d59b3afc4_77052058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140003260666003d59b3afc4_77052058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- One -->
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


<!-- Five -->
<section id="two" class="wrapper style2 special fade">
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
class Block_111447354066003d59b3d582_03242397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_111447354066003d59b3d582_03242397',
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
/* {/block 'footer'} */
}
