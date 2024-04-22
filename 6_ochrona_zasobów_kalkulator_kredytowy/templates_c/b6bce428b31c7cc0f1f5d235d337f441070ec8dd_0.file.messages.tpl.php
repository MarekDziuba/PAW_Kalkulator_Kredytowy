<?php
/* Smarty version 4.5.1, created on 2024-04-22 18:39:30
  from 'C:\xampp\htdocs\6_ochrona_zasobów_kalkulator_kredytowy\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_662692c2deffb0_60524640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6bce428b31c7cc0f1f5d235d337f441070ec8dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6_ochrona_zasobów_kalkulator_kredytowy\\app\\views\\templates\\messages.tpl',
      1 => 1713803940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662692c2deffb0_60524640 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
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
<?php }
}
}
