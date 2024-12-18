{* Template per il login di FitStop *}

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

    <script src="scripts.js"></script>
</body>
</html>
