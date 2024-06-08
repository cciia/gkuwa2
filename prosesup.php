<<<<<<< HEAD
<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // buat query update
    $result = mysqli_query($mysqli, "UPDATE user
    SET name='$name', username='$username', password='$password', role='$role'
    WHERE id=$id");
    header('location: update.php');
} else {
    die("Akses dilarang...");
}
=======
<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    // buat query update
    $result = mysqli_query($mysqli, "UPDATE user
    SET name='$name', username='$username', password='$password', role='$role'
    WHERE id=$id");
    header('location: update.php');
} else {
    die("Akses dilarang...");
}
>>>>>>> 00fc709d6ef8b7319120b64371215276f1d7e17a
?>