<?php
include 'koneksi.php';
    $idkuliners=$_GET["idkuliner"];

    $result= mysqli_query($mysqli, "DELETE FROM kuliner WHERE idkuliner='$idkuliners'");
    header("location:tkuliner.php");
?>