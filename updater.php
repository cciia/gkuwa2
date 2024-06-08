<?php
include("koneksi.php");

if (!isset($_GET['idreservasi'])) {
    header('Location: treserv.php');
    exit();
}

$idreservasi = $_GET['idreservasi'];

// Ambil data reservasi
$result = mysqli_query($mysqli, "SELECT reservasi.idreservasi, pelanggan.idpelanggan, user.name, wisata.nama_wisata, reservasi.tanggal_kunjungan, reservasi.jumlah_tiket, reservasi.tanggal_pemesanan
                                 FROM reservasi
                                 INNER JOIN pelanggan ON reservasi.idpelanggan = pelanggan.idpelanggan
                                 INNER JOIN user ON pelanggan.id = user.id
                                 INNER JOIN wisata ON reservasi.idwisata = wisata.idwisata
                                 WHERE reservasi.idreservasi = $idreservasi");
$reservasi_data = mysqli_fetch_array($result);

// Memuat data ke variabel
$idpelanggan = $reservasi_data['idpelanggan'];
$username = $reservasi_data['name'];
$nama_wisata = $reservasi_data['nama_wisata'];
$tanggal_kunjungan = $reservasi_data['tanggal_kunjungan'];
$jumlah_tiket = $reservasi_data['jumlah_tiket'];
$tanggal_memesan = $reservasi_data['tanggal_pemesanan'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        h3 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }
        
        header {
            color: white;
            padding: 20px;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 20px;
            float: left;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        } 

        table td {
            padding: 8px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3d66fb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3d66d0;
        }

        input[type="hidden"] {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <a href="treserv.php" class="back-button">Kembali</a>
        <h3>Formulir Edit Reservasi</h3>
    </header>
    <form method="POST" action="prosesupr.php">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="name" value="<?php echo $username; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Wisata</td>
                <td><input type="text" name="nama_wisata" value="<?php echo $nama_wisata; ?>" readonly></td>
            </tr>
            <tr>
            <td>Tanggal Memesan</td>
                <td><input type="date" name="tanggal_pemesanan" value="<?php echo $tanggal_memesan; ?>"></td>
            </tr>
                <td>Tanggal Kunjungan</td>
                <td><input type="date" name="tanggal_kunjungan" value="<?php echo $tanggal_kunjungan; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td><input type="text" name="jumlah_tiket" value="<?php echo $jumlah_tiket; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idreservasi" value="<?php echo $_GET['idreservasi']; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
