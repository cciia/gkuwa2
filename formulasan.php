<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginn.php");
    exit;
}

$username = $_SESSION['username'];
$nama_kuliner = ""; 

include 'koneksi.php';

$id_kuliner = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM kuliner WHERE idkuliner='$id_kuliner'") or die(mysqli_error($mysqli));
$kuliner_data = mysqli_fetch_assoc($result);

if (!$kuliner_data) {
    die("Data kuliner tidak ditemukan.");
}

$nama_kuliner = $kuliner_data['nama_kuliner'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kuliner = $_POST['idkuliner'];
    $ulasan = $_POST['ulasan'];
    $username = $_POST['username'];

    // mendapatkan id user berdasarkan username
    $result_user = mysqli_query($mysqli, "SELECT id FROM user WHERE username='$username'") or die(mysqli_error($mysqli));
    $user_data = mysqli_fetch_assoc($result_user);

    if (!$user_data) {
        die("Data user tidak ditemukan.");
    }

    $id_user = $user_data['id'];

    // memasukkan ulasan ke dalam tabel ulasan
    $query = "INSERT INTO ulasan_kuliner (iduser, idkulin, komentar) VALUES ('$id_user', '$id_kuliner', '$ulasan')";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        // Jika berhasil disimpan, tampilkan pesan sukses
        echo "<script>alert('Ulasan berhasil ditambahkan. Terima kasih atas ulasannya!');</script>";
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ulasan Kuliner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-ulasan {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-ulasan textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        .form-ulasan input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-ulasan button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #3d66fb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-ulasan button:hover {
            background-color: #3d66d0;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #3d66fb;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #3d66d0;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="kuliner.php" class="back-button">Kembali</a>
    <h1>Ulasan Kuliner</h1>
    <div class="form-ulasan">
        <form action="" method="POST">
            <input type="hidden" name="idkuliner" value="<?php echo $id_kuliner ?>">
            <input type="hidden" name="username" value="<?php echo $username ?>">
            <input type="text" name="nama_kuliner" value="<?php echo $nama_kuliner ?>" readonly>
            <textarea name="ulasan" rows="4" placeholder="Tambahkan ulasanmu!..."></textarea>
            <button type="submit">Kirim Ulasan</button>
        </form>
    </div>
</div>
</body>
</html>
