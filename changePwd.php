<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnchange'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];

    // Baca dan ubah data pengguna dalam file JSON
    $users = json_decode(file_get_contents('users.json'), true);

    foreach ($users as &$user) {
        if ($user['username'] === $username) {
            $user['password'] = $newPassword; // Menyimpan kata sandi dalam teks biasa
            break;
        }
    }

    // Simpan kembali data yang sudah diubah ke file JSON
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    // Menampilkan pop-up JavaScript setelah perubahan kata sandi berhasil
    echo '<script>
            alert("Password berhasil diubah!");
            window.location.href = "adminPage.php"; // Ganti dengan halaman yang sesuai
        </script>';
    exit();
}
?>
