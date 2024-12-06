<?php
/* Smarty version 4.5.2, created on 2024-12-06 16:41:56
  from 'C:\xampp\htdocs\FitStop\View\smarty\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_67531b444e10f7_95103600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed14577999af7655a034a6ab918672bf957308e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FitStop\\View\\smarty\\templates\\home.tpl',
      1 => 1733499714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67531b444e10f7_95103600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '143937703067531b4445d7f0_59607014';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> <!-- Assicurati che 'title' sia assegnata correttamente -->
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"> <!-- Assicurati che 'description' sia assegnata correttamente -->
</head>
<body>
    <h1>Benvenuto a FitStop</h1>
    <p>Ciao, <?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
!</p>
    <p>Il tuo ruolo è: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php }
}
