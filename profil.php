<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilku</title>
    <style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.person-card {
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    max-width: 100%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.person-img-container {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
}

.person-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.person-info {
    text-align: center;
}

.person-name {
    font-size: 24px;
    margin-top: 0;
    margin-bottom: 5px;
    color: #333;
}

.person-detail {
    font-size: 18px;
    margin-bottom: 5px;
    color: #666;
}

.back-button {
    text-decoration: none;
    color: #fff;
    background-color: #333;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #555;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="person-card">
            <img src="cc.jpg" alt="Foto" class="person-img">
            <div class="person-info">
                <h2 class="person-name">Fransisca Agustina Cahyadi</h2>
                <p class="person-detail">Tanggal Lahir: 28 Agustus 2007</p>
                <p class="person-detail">Kelas: X SIJA 1</p>
                <p class="person-detail">Sekolah: SMK TELKOM SIDOARJO</p>
            </div>
            <a href="admin.php" class="back-button">Kembali</a>
        </div>
    </div>
</body>
</html>
