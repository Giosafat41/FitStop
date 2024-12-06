<?php
/* Smarty version 4.5.2, created on 2024-12-06 16:32:42
  from 'C:\xampp\htdocs\FitStop\View\smarty\templates\corsi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6753191a4ca5c2_54447601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e300472390c0e97bd956bab775bd83323382635' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FitStop\\View\\smarty\\templates\\corsi.tpl',
      1 => 1733499158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6753191a4ca5c2_54447601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12020100736753191a3d2f33_38135927';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsi FitStop</title>
</head>
<body>
    <h1>I nostri corsi</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['corsi']->value, 'corsocorso');
$_smarty_tpl->tpl_vars['corsocorso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['corsocorso']->value) {
$_smarty_tpl->tpl_vars['corsocorso']->do_else = false;
?>
            <li>
                <strong><?php echo $_smarty_tpl->tpl_vars['corsocorso']->value['nome'];?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['corsocorso']->value['descrizione'];?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html>
<?php }
}
