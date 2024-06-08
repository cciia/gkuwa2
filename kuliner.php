<?php
include 'koneksi.php';

$query_ulasan = "SELECT ulasan_kuliner.idulasan, kuliner.nama_kuliner, user.username, ulasan_kuliner.komentar FROM ulasan_kuliner INNER JOIN kuliner ON ulasan_kuliner.idkulin = kuliner.idkuliner INNER JOIN user ON ulasan_kuliner.iduser = user.id";
$result_ulasan = mysqli_query($mysqli, $query_ulasan);
if (!$result_ulasan) {
    die("Error: " . mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kuliner</title>
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
                transition:  0.3s;
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
                transition: 0.3s ease-in-out;
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
                margin-bottom: 20px;
            }

            .box .button {
                display: flex;
                justify-content: center;
                margin: 20px 0;
            }

            .butn {
                display: inline-block;
                text-align: center;
                background-color: #3d66fb;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                text-decoration: none;
                transition: 0.3s;
            }

            .butn:hover {
                background-color: #3d66d0;
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
                transition:  0.3s;
            }

            .btn:hover {
                background-color: #3d66d0;
            }
            .ulasan-container {
                margin-top: 50px;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-height: 300px;
                overflow-y: auto; 
            }

            .ulasan {
                border-bottom: 1px solid #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }

            .ulasan h3 {
                color: #333;
                margin-bottom: 10px;
            }

            .ulasan p {
                color: #555;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <a href="halamanuser.php" class="back-button">Kembali</a>
        <h1>Kuliner Kota Gresik</h1>
         <!-- pencarian -->
         <div class="search-container">
        <form action="" method="POST">
            <input type="text" placeholder="Cari kuliner / harga.." name="keyword">
            <button type="submit" name="cari">Cari</button>
        </form>
        <div class="row">
        <?php
        include 'koneksi.php';

        if(isset($_POST['cari'])) {
            $keyword = $_POST['keyword'];
            $query = "SELECT * FROM kuliner WHERE nama_kuliner LIKE '%$keyword%' OR harga LIKE '%$keyword%'";
            $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        } else {
            $result = mysqli_query($mysqli, "SELECT * FROM kuliner") or die (mysqli_error($mysqli));
        }

        while($data = mysqli_fetch_array($result)){
            ?>
                    <div class="box">
                        <img src="<?php echo $data['foto_kuliner'] ?>">
                        <h3><?php echo $data['nama_kuliner']; ?></h3>
                        <p><?php echo $data['deskripsi_kuliner']; ?></p>
                        <h3><?php echo $data['harga']; ?></h3>
                        <div class="button">
                        <a href="formulasan.php?id=<?php echo $data['idkuliner']; ?>" class="butn">Ulasan</a>
                     </div>
                    </div>
                <?php } ?>
        </div>
        <div class="ulasan-container">
        <h2>Ulasan</h2>
        <?php
        // Tampilkan ulasan
        while ($row_ulasan = mysqli_fetch_assoc($result_ulasan)) {
            ?>
            <div class="ulasan">
                <h3><?php echo $row_ulasan['nama_kuliner']; ?></h3>
                <p><?php echo $row_ulasan['username']; ?></p>
                <p><strong>Komentar:</strong> <?php echo $row_ulasan['komentar']; ?></p>
            </div>
            <?php
        }
        ?>
    </div>
    </div>
         <!-- kembali -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="kuliner.php" class="btn">Kembali ke Awal</a>
    </div>
    </body>
</html>