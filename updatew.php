<?php
include("koneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['idwisata'])){
    header('location: twisata.php');
}
$idwisataw = $_GET['idwisata'];

//Fetech user data based pn id
$result = mysqli_query($mysqli, "SELECT * FROM wisata WHERE idwisata=$idwisataw");

while($wisata_data = mysqli_fetch_array($result))
{
    $namaw = $wisata_data['nama_wisata'];
    $deskw = $wisata_data['deskripsi_wisata'];
    $alamatw = $wisata_data['alamat_wisata'];
    $kapasitas = $wisata_data['kapasitas_harian'];
    $harga = $wisata_data['harga_tiket'];
    $foto = $wisata_data['foto'];
    $jam_buka = $wisata_data['jam_buka'];
    $jam_tutup = $wisata_data['jam_tutup'];
}
?>
<html>
    <head>
        <title>Update Data</title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        h3 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
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
        input[type="password"],
        select {
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
        <a href="twisata.php" class="back-button">Kembali</a>
            <h3>Formulir Edit Wisata</h3>
            <form method="POST" action="prosesupw.php">
                <table>
                    <tr>
                        <td>Nama Wisata</td>
                        <td><input type="text" name="nama_wisata" value="<?php echo $namaw; ?>"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><input type="text" name="deskripsi_wisata" value="<?php echo $deskw; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat_wisata" value="<?php echo $alamatw; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td><input type="text" name="kapasitas_harian" value="<?php echo $kapasitas; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Tiket</td>
                        <td><input type="text" name="harga_tiket" value="<?php echo $harga; ?>"></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td><input type="text" name="foto" value="<?php echo $foto; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Buka</td>
                        <td><input type="text" name="jam_buka" value="<?php echo $jam_buka; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Tutup</td>
                        <td><input type="text" name="jam_tutup" value="<?php echo $jam_tutup; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="idwisata" value=<?php echo $_GET['idwisata'];?>></td>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>
                    </table>
                    </form>
                    </body>
                    </html>