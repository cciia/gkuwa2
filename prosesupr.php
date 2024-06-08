<?php
include("koneksi.php");

// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {
    $idreservasi = $_POST['idreservasi'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $tanggal_memesan = $_POST['tanggal_pemesanan'];
    
    // Buat query update
    $result = mysqli_query($mysqli, "UPDATE reservasi
                                     SET tanggal_kunjungan='$tanggal_kunjungan', jumlah_tiket='$jumlah_tiket', tanggal_pemesanan='$tanggal_memesan'
                                     WHERE idreservasi='$idreservasi'");
    if ($result) {
        header('Location: treserv.php');
    } else {
        echo "Gagal memperbarui data reservasi: " . mysqli_error($mysqli);
    }
} else {
    die("Akses dilarang...");
}
?>
