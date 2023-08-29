<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnRegister'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Baca data pengguna yang ada pada file JSON
    $users = json_decode(file_get_contents('users.json'), true);

    // Periksa apakah username sudah ada
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists')
                    document.location='register.php'</script>";
            exit();
        }
    }

    // Periksa apakah password sesuai dengan konfirmasi password
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!')
                    document.location='register.php'</script>";
        exit();
    }

    // Periksa apakah password memiliki setidaknya 8 karakter dan berisi huruf dan angka
    if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password)) {
        echo "<script>alert('Password must be at least 8 characters and contain both letters and numbers!')
                    document.location='register.php'</script>";
        exit();
    }

    // Tambahkan data pengguna baru ke dalam array $users
    $newUser = array(
        'username' => $username,
        'password' => $password
    );
    $users[] = $newUser;

    // Simpan data pengguna kembali ke dalam file JSON
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    echo "<script>alert('Register Success, Thanks!')
                    document.location='login.php'</script>";
    exit();
}

?>
