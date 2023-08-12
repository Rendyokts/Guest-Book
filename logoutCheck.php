<?php
if(isset($_POST['logout'])) {
    echo "<script>
            var result = confirm('Apakah Anda yakin ingin logout?');
            if (result) {
                window.location.href = 'login.php'; // Ganti dengan skrip logout yang sesuai
            }
        </script>";
}
?>