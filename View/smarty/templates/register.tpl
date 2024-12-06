<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione - FitStop</title>
</head>
<body>
    <h1>Registrati su FitStop</h1>

    {if isset($registration_error)}
        <p style="color:red;">{$registration_error}</p>  <!-- Mostra eventuali errori -->
    {/if}

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
