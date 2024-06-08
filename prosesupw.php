<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    $idwisataw = $_POST['idwisata'];
    $namaw = $_POST['nama_wisata'];
    $deskw = $_POST['deskripsi_wisata'];
    $alamatw = $_POST['alamat_wisata'];
    $kapasitas = $_POST['kapasitas_harian'];
    $harga = $_POST['harga_tiket'];
    $foto = $_POST['foto'];
    $jam_buka = $_POST['jam_buka'];
    $jam_tutup = $_POST['jam_tutup'];
    // buat query update
    $result = mysqli_query($mysqli, "UPDATE wisata
    SET nama_wisata='$namaw', deskripsi_wisata='$deskw', alamat_wisata='$alamatw', kapasitas_harian='$kapasitas',
    harga_tiket='$harga', foto='$foto', jam_buka='$jam_buka', jam_tutup='$jam_tutup'
    WHERE idwisata=$idwisataw");
    header('location: updatew.php');
} else {
    die("Akses dilarang...");
}
?>