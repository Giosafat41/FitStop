<?php
/* Smarty version 5.4.2, created on 2024-12-15 14:52:35
  from 'file:View/templates/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_675edf235a5302_54353135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96eecd2fdc526cc1aa8b8374c9735cc8681a3dfb' => 
    array (
      0 => 'View/templates/login.tpl',
      1 => 1734270750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675edf235a5302_54353135 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\FitStop\\View\\templates';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | FitStop</title>
    <link rel="stylesheet" href="View/templates/styleLogin.css">
</head>
<body>
    <div class="login-container">
        <h2>Benvenuto su FitStop</h2>
        
        <form action="login_action.php" method="POST" class="login-form">
            <div class="form-group">
                <label for="username">Utente</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group password-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="button" class="toggle-password" onclick="togglePassword()">
                    <img src="eye-icon.png" alt="Toggle password visibility">
                </button>
            </div>

            <button type="submit" class="login-btn">Accedi</button>
        </form>

        <p><a href="registrazione.php" class="register-link">Non hai un account? Registrati!</a></p>
    </div>

    <?php echo '<script'; ?>
 src="scripts.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
