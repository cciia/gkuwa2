<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: loginn.php");
    exit;
}

$username = $_SESSION['username'];

// Include file koneksi
include 'koneksi.php';

// Query untuk mendapatkan data user berdasarkan username
$result_user = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($mysqli));
$user_data = mysqli_fetch_assoc($result_user);

// Jika data user tidak ditemukan, berhenti dan tampilkan pesan
if (!$user_data) {
    die("Data user tidak ditemukan.");
}

// Ambil id user dari data yang ditemukan
$id_user = $user_data['id'];

// Query untuk mendapatkan riwayat reservasi pengguna
$result_reservasi = mysqli_query($mysqli, "SELECT reservasi.idreservasi, wisata.nama_wisata, reservasi.tanggal_pemesanan, reservasi.tanggal_kunjungan, reservasi.jumlah_tiket, reservasi.no_telp, reservasi.alamat, SUM(reservasi.jumlah_tiket * wisata.harga_tiket) AS total_harga FROM reservasi INNER JOIN wisata ON reservasi.idwisata = wisata.idwisata WHERE user_id='$id_user' GROUP BY reservasi.idreservasi") or die(mysqli_error($mysqli));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3d66fb;
            color: white;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back:hover {
            background-color: #3d66d0;
        }
    </style>
</head>
<body>
    <a href="halamanuser.php" class="btn-back">Kembali</a>
    <a href="wisataw.php" class="btn-back">Pesan Lagi</a>
    <div class="container">
        <h2>Riwayat Reservasi</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Wisata</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jumlah Tiket</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result_reservasi)) {
                    echo "<tr>";
                    echo "<td>" . $row['nama_wisata'] . "</td>";
                    echo "<td>" . $row['tanggal_pemesanan'] . "</td>";
                    echo "<td>" . $row['tanggal_kunjungan'] . "</td>";
                    echo "<td>" . $row['jumlah_tiket'] . "</td>";
                    echo "<td>" . $row['no_telp'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['total_harga'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
