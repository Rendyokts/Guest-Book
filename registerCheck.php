<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnRegister'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Establish a MySQL database connection (modify these parameters)
    $host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $database = 'dbbukutamu';

    $connection = mysqli_connect($host, $db_username, $db_password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the username already exists in the database
    $query = "SELECT * FROM tbuser WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already exists')
                document.location='register.php'</script>";
        mysqli_close($connection);
        exit();
    }

    // Check if the password meets certain criteria (e.g., length and complexity)
    if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password)) {
        echo "<script>alert('Password must be at least 8 characters and contain both letters and numbers!')
                document.location='register.php'</script>";
        mysqli_close($connection);
        exit();
    }

    // Hash the password for security (you should use a strong hashing library like password_hash)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert the new user's data into the database
    $insertQuery = "INSERT INTO tbuser (username, password) VALUES ('$username', '$hashedPassword')";
    if (mysqli_query($connection, $insertQuery)) {
        echo "<script>alert('Register Success, Thanks!')
              document.location='login.php'</script>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
    exit();
}

?>
