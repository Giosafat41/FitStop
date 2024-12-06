<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FitStop</title>
</head>
<body>
    <h1>Accedi a FitStop</h1>

    {if isset($login_error)}
        <p style="color:red;">{$login_error}</p>  <!-- Mostra il messaggio di errore -->
    {/if}

    <form method="POST" action="login.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Accedi</button>
    </form>
</body>
</html>
