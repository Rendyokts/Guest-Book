    function confirmLogout() {
        var logoutConfirmed = confirm("Are you sure you want to log out?");
        if (logoutConfirmed) {
            window.location.href = "login.php"; // Redirect to the logout page
        }
    }
