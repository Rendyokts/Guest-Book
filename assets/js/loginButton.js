document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.getElementById("loginButton");

    loginButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent form submission

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Perform AJAX request to retrieve user data from users.json
        fetch('users.json')
            .then(response => response.json())
            .then(users => {
                const loggedInUser = users.find(user => user.username === username && user.password === password);

                if (loggedInUser) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Success',
                        text: 'Thanks!',
                    }).then(function() {
                        document.location = 'dashboard.php';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'Please try again!',
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching users:', error);
            });
    });
});