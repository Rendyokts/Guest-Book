<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("users.json"), true);

    $loggedIn = false;
    foreach ($users as $user) {
        if ($user["username"] == $username && $user["password"] == $password) {
            $loggedIn = true;
            break;
        }
    }

    if ($loggedIn) {
        echo "<script>document.location='index.php'</script>";
    } else {
        echo "<script>alert('Login Failed, Please try again!')
                    document.location='login.php'</script>";
    }
}
?>