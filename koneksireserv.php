<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginn.php");
    exit;
}

$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id_wisata = $_POST['idwisata'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $jumlah_tiket = $_POST['jumlah_tiket'];

    include 'koneksi.php';

    // mendapatkan data user berdasarkan username
    $result_user = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($mysqli));
    $user_data = mysqli_fetch_assoc($result_user);

    // Jika data user tidak ditemukan, berhenti dan tampilkan pesan
    if (!$user_data) {
        die("Data user tidak ditemukan.");
    }

    // id user dari data yang ditemukan
    $id_user = $user_data['id'];

    // mendapatkan kapasitas harian dan harga tiket dari wisata
    $result_wisata = mysqli_query($mysqli, "SELECT kapasitas_harian, harga_tiket, nama_wisata FROM wisata WHERE idwisata='$id_wisata'") or die(mysqli_error($mysqli));
    $wisata_data = mysqli_fetch_assoc($result_wisata);
    
    if (!$wisata_data) {
        die("Data wisata tidak ditemukan.");
    }

    $kapasitas_harian = $wisata_data['kapasitas_harian'];
    $harga_tiket = $wisata_data['harga_tiket'];
    $nama_wisata = $wisata_data['nama_wisata'];

    // Query untuk menghitung total tiket yang telah dipesan untuk tanggal kunjungan tersebut
    $result_total_tiket_harian = mysqli_query($mysqli, "SELECT SUM(jumlah_tiket) AS total_tiket_harian FROM reservasi WHERE idwisata='$id_wisata' AND tanggal_kunjungan='$tanggal_kunjungan'") or die(mysqli_error($mysqli));
    $data_total_tiket_harian = mysqli_fetch_assoc($result_total_tiket_harian);
    $total_tiket_harian = $data_total_tiket_harian['total_tiket_harian'] ? $data_total_tiket_harian['total_tiket_harian'] : 0;

    // Cek apakah kapasitas harian sudah terpenuhi
    if ($total_tiket_harian + $jumlah_tiket > $kapasitas_harian) {
        echo "<style>
                .alert {
                    padding: 20px;
                    background-color: #f44336;
                    color: white;
                    border-radius: 5px;
                    text-align: center;
                    margin-bottom: 15px;
                }
            </style>";
        echo "<div class='alert'>Maaf, kapasitas harian untuk tanggal $tanggal_kunjungan di $nama_wisata sudah penuh.d.</div>";
    } else {
        //untuk memasukkan data reservasi ke dalam tabel reservasi
        $query = "INSERT INTO reservasi (user_id, idwisata, tanggal_pemesanan, tanggal_kunjungan, jumlah_tiket, no_telp, alamat)
                  VALUES ('$id_user', '$id_wisata', '$tanggal_pemesanan', '$tanggal_kunjungan', '$jumlah_tiket', '$no_telp', '$alamat')";

        if (mysqli_query($mysqli, $query)) {
            // menampilkan pesan sukses menggunakan alert
            echo "<style>
                    .alert {
                        padding: 20px;
                        background-color: #4CAF50;
                        color: white;
                        border-radius: 5px;
                        text-align: center;
                        margin-bottom: 15px;
                    }
                </style>";
            echo "<div class='alert'>Terima kasih! $username telah memesan tiket pada tanggal $tanggal_pemesanan 
            ke $nama_wisata dengan jumlah $jumlah_tiket tiket dan akan berkunjung pada $tanggal_kunjungan.</div>";
            echo "<a href='riwayat.php' class='button'>Cek Riwayat</a>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
        }
    }
    mysqli_close($mysqli);
} else {
    header("Location: halamanuser.php");
    exit();
}
?>
