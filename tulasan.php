<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Ulasan</title>
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
            <a href="tkuliner.php" class="button">Sebelumnya</a>
            <a href="treserv.php" class="button">Selanjutnya</a>
        </div>
        <a href="formulasan.php" class="button button-right">Create</a>
    </div>
    <h3>Data Ulasan</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Kuliner</th>
            <th>Komentar</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';

        $result = mysqli_query($mysqli, "SELECT ulasan_kuliner.idulasan, user.username, kuliner.nama_kuliner, ulasan_kuliner.komentar 
                                        FROM ulasan_kuliner 
                                        INNER JOIN user ON ulasan_kuliner.iduser = user.id 
                                        INNER JOIN kuliner ON ulasan_kuliner.idkulin = kuliner.idkuliner") or die(mysqli_error($mysqli));
        
        $no = 1; // Inisialisasi variabel nomor urut
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['nama_kuliner']; ?></td>
                <td><?php echo $data['komentar']; ?></td>
                <td><a href='deleteu.php?id=<?php echo $data["idulasan"];?>'>Hapus</a></td>
                <td><a href='updateu.php?id=<?php echo $data["idulasan"];?>'>Ubah</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
