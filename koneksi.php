<?php
// isi nama host, username mysql, dan password mysql
$databaseHost = "localhost";
$databaseName = "greskuwa";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect("localhost","root","");

if($mysqli){
    ("Koneksi Berhasil"  . mysqli_connect_error());
}else{
     "Koneksi Gagal";
}
?>