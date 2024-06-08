<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lihat Tabel</title>
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
    </style>
</head> 
<body>
    <a href="admin.php" class="button">Kembali</a>
    <a href="twisata.php" class="button">Selanjutnya</a>
    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Peran</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $result = mysqli_query($mysqli, "SELECT * FROM user") or die (mysqli_error($mysqli));
        
        $no = 1; 
        while($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['role']; ?></td>
            <td><a href='delete.php?id=<?php echo $data["id"];?>'>Hapus</a></td>
            <td><a href='update.php?id=<?php echo $data["id"];?>'>Ubah</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
