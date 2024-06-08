<?php
include 'koneksi.php';
    $idreserv=$_GET["idreservasi"];

    $result= mysqli_query($mysqli, "DELETE FROM reservasi WHERE idreservasi='$idreserv'");
    header("location:treserv.php");
?>