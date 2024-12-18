// Funzione per mostrare o nascondere la password
function togglePassword() {
    var passwordField = document.getElementById('password');
    var toggleButton = document.querySelector('.toggle-password img');
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleButton.src = "eye-open-icon.png"; // Icona per la password visibile
    } else {
        passwordField.type = "password";
        toggleButton.src = "eye-closed-icon.png"; // Icona per la password nascosta
    }
}
