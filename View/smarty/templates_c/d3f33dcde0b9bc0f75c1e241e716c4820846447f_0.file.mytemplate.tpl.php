<?php
/* Smarty version 4.5.2, created on 2024-05-08 13:23:55
  from 'C:\xampp\htdocs\test_fitstop\View\smarty\templates\mytemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_663b60cb57b819_89478980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f33dcde0b9bc0f75c1e241e716c4820846447f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test_fitstop\\View\\smarty\\templates\\mytemplate.tpl',
      1 => 1715167434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b60cb57b819_89478980 (Smarty_Internal_Template $_smarty_tpl) {
?><html> 
<body> 
<h2> Dati utente </h2>

<br> 
 
<b>Risultati per l'utente selezionato: </b> <br>

<select name="mys">
    <?php
$__section_nr_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['results']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_0_total = $__section_nr_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_0_total !== 0) {
for ($__section_nr_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_0_iteration <= $__section_nr_0_total; $__section_nr_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]->getUsername();?>
">
                   <?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]->getUsername();?>
 | <?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]->getNome();?>
 | <?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]->getNumTel();?>

        </option>
    <?php
}
}
?>
</select>
 
</body> 
</html> <?php }
}
