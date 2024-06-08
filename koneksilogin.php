<?php
// Mengaktifkan session pada PHP
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = ($_POST['password']);

$login = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if (empty($data['role'])) {
        $data['role'] = "user";
    }

    // Cek jika user login sebagai admin
    if ($data['role'] == "admin") {
        // Buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // Alihkan ke halaman dashboard admin
        header("location:admin.php");
    // Cek jika user login sebagai user
    } else if ($data['role'] == "user") {
        // Buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        // Alihkan ke halaman dashboard user
        header("location:halamanuser.php");
    } else {
        // Alihkan ke halaman login kembali jika role tidak dikenal
        header("location:loginn.php");
    }
} else {
    echo "<script>
    alert('You are not registered yet');
    document.location = 'loginn.php';
    </script>";
}
?>
