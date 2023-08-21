document.addEventListener('DOMContentLoaded', function() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('confirm_password');
    const showPasswordCheckbox = document.getElementById('show-password');

    showPasswordCheckbox.addEventListener('change', function() {
        if (showPasswordCheckbox.checked) {
            passwordField.type = 'text';
            confirmPasswordField.type = 'text';
        } else {
            passwordField.type = 'password';
            confirmPasswordField.type = 'password';
        }
    });
});