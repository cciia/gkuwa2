<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Create Wisata</title>
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

            .input-box input,
            .role-category select {
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
    <a href="twisata.php" class="back-button">Kembali</a>
        <div class="Container">
            <form action="createw.php" method="post">
                <h2>Tambah Data Wisata</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="name">Nama Wisata</label>
                        <input type="text" name="nama_wisata" required>
                    </div>
                    <div class="input-box">
                        <label for="username">Deskripsi</label>
                        <input type="text" name="deskripsi_wisata" required>
                    </div>
                    <div class="input-box">
                        <label for="addres">Alamat Wisata</label>
                        <input type="text" name="alamat_wisata" required>
                    </div>
                    <div class="input-box">
                        <label for="kapasitas">Kapasitas Harian</label>
                        <input type="text" name="kapasitas_harian" required>
                    </div>
                    <div class="input-box">
                        <label for="harga">Harga tiket</label>
                        <input type="text" name="harga_tiket" required>
                    </div>
                    <div class="input-box">
                        <label for="photo">Foto</label>
                        <input type="text" name="foto" required>
                    </div>
                    <div class="input-box">
                        <label for="jam_buka">Jam Buka</label>
                        <input type="time" name="jam_buka" required>
                    </div>
                    <div class="input-box">
                        <label for="jam_tutup">Jam Tutup</label>
                        <input type="time" name="jam_tutup" required>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="save">Simpan</button>
                    </div>
                </div>
                <?php
                 if(isset($_POST['save'])){
                    $name= $_POST['nama_wisata'];
                    $deskripsiw= $_POST['deskripsi_wisata'];
                    $alamatw= $_POST['alamat_wisata'];
                    $kapasitas = $_POST['kapasitas_harian'];
                    $harga = $_POST['harga_tiket'];
                    $foto = $_POST['foto'];
                    $jam_buka = $_POST['jam_buka'];
                    $jam_tutup = $_POST['jam_tutup'];

                    // Tambahkan detik ke nilai waktu yang diambil dari input form
                    $jam_buka = $_POST['jam_buka'] . ':00';
                    $jam_tutup = $_POST['jam_tutup'] . ':00';

                    include_once("koneksi.php");
                    $result = mysqli_query($mysqli,
                    "INSERT INTO wisata(nama_wisata,deskripsi_wisata,alamat_wisata,kapasitas_harian,harga_tiket,foto,jam_buka,jam_tutup)
                    VALUES ('$name','$deskripsiw','$alamatw','$kapasitas','$harga','$foto','$jam_buka','$jam_tutup')");
                    header("location: twisata.php");
                    }
                    ?>
            </form>
        </div>
    </body>
</html>
