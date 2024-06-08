<!DOCTYPE html>
<html>
    <head>
        <title>Wisata</title>
        <style>
             body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .back-button {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #333;
            border: 1px solid #333;
            border-radius: 4px;
            transition:  0.3s, color 0.3s;
        }

        .back-button:hover {
            background-color: #333;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type=text] {
            padding: 10px;
            width: 300px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #3d66fb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
        }

        .search-container button:hover {
            background-color: #3d66d0;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .box {
            width: 300px;
            margin: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease-in-out;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        .box img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ccc;
        }

        .box h3 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .box p {
            padding: 0 20px;
            text-align: justify;
            color: #555;
        }

        .btn {
            display: block;
            text-align: center;
            background-color: #3d66fb;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #3d66d0;
        }
       

     </style>
    </head>
    <body>
        <a href="halamanuser.php" class="back-button">Kembali</a>
        <h1>Wisata Kota</h1>
        <!-- pencarian -->
        <div class="search-container">
        <form action="" method="POST">
            <input type="text" placeholder="Cari wisata.." name="keyword">
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>
    <div class="row">
        <?php
        include 'koneksi.php';

        if(isset($_POST['cari'])) {
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM wisata WHERE nama_wisata LIKE '%$keyword%'";
            $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        } else {
            $result = mysqli_query($mysqli, "SELECT * FROM wisata") or die (mysqli_error($mysqli));
        }

        while($data = mysqli_fetch_array($result)){
            ?>
            <div class="box">
                <img src="<?php echo $data['foto'] ?>">
                <h3><?php echo $data['nama_wisata']; ?></h3>
                <p><?php echo $data['deskripsi_wisata']; ?></p>
                <p><strong>Alamat:</strong> <?php echo $data['alamat_wisata']; ?></p>
                <p><strong>Jam Buka:</strong> <?php echo $data['jam_buka']; ?></p>
                <p><strong>Jam Tutup:</strong> <?php echo $data['jam_tutup']; ?></p>
                <p><strong>Tiket:</strong> <?php echo $data['harga_tiket']; ?></p>
                <div class="button"></div>
                <a href="formres.php?id=<?php echo $data["idwisata"];?>" class="btn">Pesan Tiket</a>
            </div>
            <?php
        }
        ?>
    </div>
 <!-- kembali -->
 <div style="text-align: center; margin-top: 20px;">
        <a href="wisataw.php" class="btn">Kembali ke Awal</a>
    </div>
</body>
</html>