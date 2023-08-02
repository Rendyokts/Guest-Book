<?php

function validateUser($username, $password) {
    // Baca data dari file users.json
    $data = file_get_contents('users.json');
    $users = json_decode($data, true);

    // Cari pengguna berdasarkan username
    foreach ($users['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return true;
        }
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];

    if (validateUser($usernameInput, $passwordInput)) {
        echo "Login berhasil!";
        header('Location: index.php');
    } else {
        echo "Username atau password salah.";
        header ('Location: login.php');
    }
}
?>