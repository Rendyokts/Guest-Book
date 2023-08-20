document.addEventListener('DOMContentLoaded', function() {
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');
    const showPasswordCheckbox = document.getElementById('show-password');

    showPasswordCheckbox.addEventListener('change', function() {
        if (showPasswordCheckbox.checked) {
            newPassword.type = 'text';
            confirmPassword.type = 'text';
        } else {
            newPassword.type = 'password';
            confirmPassword.type = 'password';
        }
    });
});
