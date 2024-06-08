<?php
include 'koneksi.php';
    $idul=$_GET["idulasan"];

    $result= mysqli_query($mysqli, "DELETE FROM ulasan_kuliner WHERE idulasan='$idul'");
    header("location:tulasan.php");
?>