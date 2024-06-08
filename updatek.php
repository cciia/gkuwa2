<?php
include("koneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['idkuliner'])){
    header('location: tkuliner.php');
}
$idkuliners = $_GET['idkuliner'];

//Fetech user data based pn id
$result = mysqli_query($mysqli, "SELECT * FROM kuliner WHERE idkuliner=$idkuliners");

while($kuliner_data = mysqli_fetch_array($result))
{
    $namak = $kuliner_data['nama_kuliner'];
    $deskk = $kuliner_data['deskripsi_kuliner'];
    $hargaw = $kuliner_data['harga'];
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
        <a href="tkuliner.php" class="back-button">Kembali</a>
            <h3>Formulir Edit Wisata</h3>
            <form method="POST" action="prosesupk.php">
                <table>
                    <tr>
                        <td>Nama Kuliner</td>
                        <td><input type="text" name="nama_kuliner" value="<?php echo $namak; ?>"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><input type="text" name="deskripsi_kuliner" value="<?php echo $deskk; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga" value="<?php echo $hargaw; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="idkuliner" value=<?php echo $_GET['idkuliner'];?>></td>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>
                    </table>
                    </form>
                    </body>
                    </html>