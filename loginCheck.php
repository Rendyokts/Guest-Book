<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("users.json"), true);

    $loggedInUser = null;
    foreach ($users as $user) {
        if ($user["username"] == $username && $user["password"] == $password) {
            $loggedInUser = $user;
            break;
        }
    }

    if ($loggedInUser) {
        $_SESSION["user_id"] = $loggedInUser["username"]; // Simpan username dalam sesi
        $_SESSION["login_time"] = time(); // Simpan waktu login dalam sesi
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Login Failed, Please try again!');
                    document.location='login.php'</script>";
    }
}
?>
