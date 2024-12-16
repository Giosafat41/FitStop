<?php
/* Smarty version 4.5.2, created on 2024-12-09 15:59:02
  from 'C:\xampp\htdocs\FitStop\View\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_675705b6cd5255_87486860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50ea35759588c1f64513ce8907b71bb0bd69121' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FitStop\\View\\smarty\\templates\\login.tpl',
      1 => 1733504987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675705b6cd5255_87486860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitStop</title>
</head>
<body>
    <h1>Accedi a FitStop</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['login_error']->value))) {?>
        <p style="color:red;"><?php echo $_smarty_tpl->tpl_vars['login_error']->value;?>
</p>  <!-- Mostra il messaggio di errore -->
    <?php }?>

    <form method="POST" action="login.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Accedi</button>
    </form>
</body>
</html>
<?php }
}
