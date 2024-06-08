<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $idkuliners = $_POST['idkuliner'];
    $namak = $_POST['nama_kuliner'];
    $deskk = $_POST['deskripsi_kuliner'];
    $hargaw = $_POST['harga'];
    // buat query update
    $result = mysqli_query($mysqli, "UPDATE kuliner
    SET nama_kuliner='$namak', deskripsi_kuliner='$deskk', harga='$hargaw'
    WHERE idkuliner=$idkuliners");
    header('location: updatek.php');
} else {
    die("Akses dilarang...");
}
?>