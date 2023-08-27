
<?php
session_start();

if (!isset($_SESSION["user_id"]) || (time() - $_SESSION["login_time"]) > 3600) {
    // Jika sesi tidak ada atau waktu login lebih dari 1 jam (3600 detik), redirect ke halaman login
    header("Location: login.php");
    exit();
}

$loggedInUsername = $_SESSION["user_id"];
?>