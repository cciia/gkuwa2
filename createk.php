<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Create Kuliner</title>
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
    <a href="tkuliner.php" class="back-button">Kembali</a>
        <div class="Container">
            <form action="createk.php" method="post">
                <h2>Tambah Data Kuliner</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="name">Nama Kuliner</label>
                        <input type="text" name="nama_kuliner" required>
                    </div>
                    <div class="input-box">
                        <label for="username">Deskripsi</label>
                        <input type="text" name="deskripsi_kuliner" required>
                    </div>
                    <div class="input-box">
                        <label for="addres">Harga</label>
                        <input type="text" name="harga" required>
                    </div>
                    <div class="input-box">
                        <label for="photo">Foto</label>
                        <input type="text" name="foto_kuliner" required>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="save">Simpan</button>
                    </div>
                </div>
                <?php
                 if(isset($_POST['save'])){
                    $name= $_POST['nama_kuliner'];
                    $deskripsik= $_POST['deskripsi_kuliner'];
                    $hargak= $_POST['harga'];
                    $fotok= $_POST['foto_kuliner'];

                    include_once("koneksi.php");
                    $result = mysqli_query($mysqli,
                    "INSERT INTO kuliner(nama_kuliner,deskripsi_kuliner,harga,foto_kuliner)
                    VALUES ('$name','$deskripsik','$hargak', '$fotok')");
                    header("location:tkuliner.php");
                    }
                    ?>
            </form>
        </div>
    </body>
</html>
