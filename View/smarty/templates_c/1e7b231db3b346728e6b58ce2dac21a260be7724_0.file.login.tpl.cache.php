<?php
/* Smarty version 4.5.2, created on 2024-12-06 17:13:35
  from 'C:\xampp\htdocs\FitStop\View\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_675322af6d17a0_46262062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7b231db3b346728e6b58ce2dac21a260be7724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FitStop\\View\\smarty\\templates\\login.tpl',
      1 => 1733501544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675322af6d17a0_46262062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1259781609675322af66ee28_83644101';
?>
<!DOCTYPE html>
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
