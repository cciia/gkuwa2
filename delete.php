<?php
include 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM user WHERE id = '$id'");

header("location:tabel.php");
?>