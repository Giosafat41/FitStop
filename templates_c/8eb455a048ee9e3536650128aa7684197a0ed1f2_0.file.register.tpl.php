<?php
/* Smarty version 4.5.2, created on 2024-12-09 16:01:48
  from 'C:\xampp\htdocs\FitStop\View\smarty\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6757065cceac06_53191419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb455a048ee9e3536650128aa7684197a0ed1f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FitStop\\View\\smarty\\templates\\register.tpl',
      1 => 1733504987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6757065cceac06_53191419 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione - FitStop</title>
</head>
<body>
    <h1>Registrati su FitStop</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['registration_error']->value))) {?>
        <p style="color:red;"><?php echo $_smarty_tpl->tpl_vars['registration_error']->value;?>
</p>  <!-- Mostra eventuali errori -->
    <?php }?>

    <form method="POST" action="register.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>

        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" required>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <label for="conf_password">Conferma Password</label>
        <input type="password" name="conf_password" id="conf_password" required>

        <button type="submit">Registrati</button>
    </form>
</body>
</html>
<?php }
}
