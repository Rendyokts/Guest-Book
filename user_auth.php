<?php
    function authenticateUser($username, $password) {
        $dbHost = "localhost";
        $dbUser = "";
        $dbPass = "";
        $dbName = "dbbukutamu";

        $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM tbuser WHERE id = '$username'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        

        if (password_verify($password, $row['password'])){
            return true;
        }
    }
    return false;

}

$username = $_POST['username'];
$password = $_POST['password'];

if (authenticateUser($username, $password)){
    echo "Authentication successful, $username!";
} else {
    echo "Authentication failed, Please try again.";
}
?>