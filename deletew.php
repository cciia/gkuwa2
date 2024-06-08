<?php
include 'koneksi.php';
    $idwisataw=$_GET["idwisata"];

    $result= mysqli_query($mysqli, "DELETE FROM wisata WHERE idwisata='$idwisataw'");
    header("location:twisata.php");
?>