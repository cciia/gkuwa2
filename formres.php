<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: loginn.php");
    exit;
}

$username = $_SESSION['username'];

// Periksa apakah parameter id ada di URL
if (!isset($_GET['id'])) {
    header('Location: halamanuser.php'); // Mengarahkan pengguna kembali ke halaman utama jika tidak ada ID wisata
    exit();
}

$id_wisata = $_GET['id'];

include 'koneksi.php';

$result = mysqli_query($mysqli, "SELECT * FROM wisata WHERE idwisata='$id_wisata'") or die(mysqli_error($mysqli));
$wisata_data = mysqli_fetch_assoc($result);

if (!$wisata_data) {
    die("Data wisata tidak ditemukan.");
}

$nama = $wisata_data['nama_wisata'];
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Reservasi Tiket</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .Container {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
            }

            .back-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #3d66fb;
                color: white;
                text-align: center;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;
                border: none;
                border-radius: 8px;
                text-decoration: none;
            }

            .back-button:hover {
            background-color: #3d66d0;
            }

            h2 {
                text-align: center;
            }

            .content {
                margin-top: 20px;
            }

            .input-box {
                margin-bottom: 15px;
            }

            .input-box label {
                display: block;
                margin-bottom: 5px;
            }

            .input-box input {
                width: 100%;
                padding: 8px;
                border-radius: 4px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .button-container {
                text-align: center;
                margin-top: 20px;
            }

            .button-container button {
                padding: 10px 20px;
                background-color: #3d66fb;
                color: white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
            }

            .button-container button:hover {
                background-color: #3d66d0;
            }
            p {
                text-align: center;
                margin-top: 20px;
            }

            p a {
                color: #3d66fb;
                text-decoration: none;
            }

            p a:hover {
                text-decoration: underline;
            }

        </style>
    </head>
    <body>
    <a href="wisataw.php" class="back-button">Kembali</a>
        <div class="Container">
            <form action="koneksireserv.php" method="post">
                <h2>Reservasi Tiket</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" readonly>
                    </div>
                    <div class="input-box">
                        <label for="notelp">Nomor Telepon</label>
                        <input type="tel" name="no_telp" required>
                    </div>
                    <div class="input-box">
                        <label for="addres">Alamat</label>
                        <input type="addres" name="alamat" required>
                    </div>
                    <div class="input-box">
                        <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                        <input type="date" name="tanggal_pemesanan" required>
                    </div>
                    <div class="input-box">
                        <label for="tanggal">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" required>
                    </div>
                    <div class="input-box">
                        <label for="tiket">Jumlah Tiket</label>
                        <input type="text" name="jumlah_tiket" required>
                    </div>
                    <div class="input-box">
                        <label for="wisata">Nama Wisata</label>
                        <input type="hidden" name="idwisata" value="<?php echo $id_wisata ?>">
                        <input type="text" name="nama_wisata" value="<?php echo $nama; ?>" readonly>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="save">Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

