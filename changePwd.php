<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnchange'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Establish a MySQL database connection (modify these parameters)
    $host = 'localhost'; // Ganti dengan host database Anda
    $db_username = 'root'; // Ganti dengan username database Anda
    $db_password = ''; // Ganti dengan password database Anda
    $database = 'dbbukutamu'; // Ganti dengan nama database Anda

    $connection = mysqli_connect($host, $db_username, $db_password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Hash the new password
    $hashedNewPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Query database untuk memperbarui kata sandi pengguna
    $updateQuery = "UPDATE tbuser SET password = '$hashedNewPassword' WHERE username = '$username'";
    if (mysqli_query($connection, $updateQuery)) {
        // Periksa apakah password sesuai dengan konfirmasi password
        if ($newPassword !== $confirmPassword) {
            echo '<script>
                alert("Password do not match!");
                window.location.href = "adminPage.php"; 
                </script>';
            exit();
        }

        // Menampilkan pop-up JavaScript setelah perubahan kata sandi berhasil
        echo '<script>
                alert("Password changed successfully!");
                window.location.href = "adminPage.php"; 
            </script>';
        exit();
    } else {
        // Jika terjadi kesalahan dalam perubahan kata sandi
        echo "Error: " . $updateQuery . "<br>" . mysqli_error($connection);
    }

    // Tutup koneksi database
    mysqli_close($connection);
}
?>
