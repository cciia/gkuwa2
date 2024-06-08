<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Kuliner</title>
    <style>
        .button {
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

        .button:hover {
            background-color: #3d66d0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .button-right {
            margin-left: auto;
        }
    </style>
</head> 
<body>
    <div class="button-container">
        <div>
            <a href="admin.php" class="button">Kembali</a>
            <a href="twisata.php" class="button">Sebelumnya</a>
            <a href="tulasan.php" class="button">Selanjutnya</a>
        </div>
        <a href="createk.php" class="button button-right">Create</a>
    </div>
    <h3> Data Kuliner </h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $result = mysqli_query($mysqli, "SELECT * FROM kuliner") or die (mysqli_error($mysqli));
        
        $no = 1;
        while($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_kuliner']; ?></td>
            <td><?php echo $data['deskripsi_kuliner']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><a href='deletek.php?idkuliner=<?php echo $data["idkuliner"];?>'>Hapus</a></td>
            <td><a href='updatek.php?idkuliner=<?php echo $data["idkuliner"];?>'>Ubah</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
