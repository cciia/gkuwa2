<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Table</title>
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
<div class="button-container">
        <div>
            <a href="admin.php" class="button">Kembali</a>
            <a href="tulasan.php" class="button">Sebelumnya</a>
            <a href="formres.php" class="button">Create</a>
        </div>
<h3>Data Reservasi</h3>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>Username</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include 'koneksi.php';
    $result = mysqli_query($mysqli, "SELECT reservasi.idreservasi, wisata.nama_wisata AS nama_wisata, user.username, user.name AS nama_user, user.email, reservasi.no_telp, reservasi.alamat FROM reservasi 
    INNER JOIN wisata ON reservasi.idwisata = wisata.idwisata
    INNER JOIN user ON reservasi.user_id = user.id") or die(mysqli_error($mysqli));
    
    $no = 1; 
    while ($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_wisata']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['nama_user']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href='deleter.php?id=<?php echo $data["idreservasi"];?>'>Hapus</a></td>
            <td><a href='updater.php?id=<?php echo $data["idreservasi"];?>'>Ubah</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
