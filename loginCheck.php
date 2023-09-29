<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input (you may need to sanitize and validate the input)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Establish a MySQL database connection (you may need to adjust the connection parameters)
    $host = "localhost"; // Change to your database host
    $db_username = "root"; // Change to your database username
    $db_password = ""; // Change to your database password
    $database = "dbbukutamu"; // Change to your database name

    $connection = mysqli_connect($host, $db_username, $db_password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query the database to retrieve the hashed password for the provided username
    $query = "SELECT * FROM tbuser WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        // Authentication successful
        $row = mysqli_fetch_assoc($result);
        $hashedPasswordFromDatabase = $row["password"];

        // Verify the provided password against the hashed password from the database
        if (password_verify($password, $hashedPasswordFromDatabase)) {
            // Password is correct
            $_SESSION["user_id"] = $row["username"]; // Store username in the session
            $_SESSION["login_time"] = time(); // Store login time in the session
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect
            echo "<script>alert('Login Failed, Please try again!');
                    document.location='login.php'</script>";
        }
    } else {
        // Username not found in the database
        echo "<script>alert('Username not found, Please try again!');
                document.location='login.php'</script>";
    }

    // Close the database connection
    mysqli_close($connection);
}

?>
