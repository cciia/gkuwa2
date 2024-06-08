<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Wisata</title>
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
            <a href="tabel.php" class="button">Sebelumnya</a>
            <a href="tkuliner.php" class="button">Selanjutnya</a>
        </div>
        <a href="createw.php" class="button button-right">Create</a>
    </div>
    <h3> Data Wisata </h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Alamat</th>
            <th>Kapasitas</th>
            <th>Harga Tiket</th>
            <th>Foto</th>
            <th>Jam Buka</th>
            <th>Jam Tutup</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';
        $result = mysqli_query($mysqli, "SELECT * FROM wisata") or die(mysqli_error($mysqli));
        
        $no = 1; 
        while($data = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_wisata']; ?></td>
            <td><?php echo $data['deskripsi_wisata']; ?></td>
            <td><?php echo $data['alamat_wisata']; ?></td>
            <td><?php echo $data['kapasitas_harian']; ?></td>
            <td><?php echo $data['harga_tiket']; ?></td>
            <td><?php echo $data['foto']; ?></td>
            <td><?php echo $data['jam_buka']; ?></td>
            <td><?php echo $data['jam_tutup']; ?></td>
            <td><a href='deletew.php?idwisata=<?php echo $data["idwisata"];?>'>Hapus</a></td>
            <td><a href='updatew.php?idwisata=<?php echo $data["idwisata"];?>'>Ubah</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
