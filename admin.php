<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gkuwa</title>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.container {
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
}

header {
    background: #3d66fb;
    color: #fff;
    padding: 5px 0;
}

header h1 {
    float: left;
}

nav ul {
    float: right;
    margin-top: 25px;
}

nav ul li {
    display: inline;
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a.active,
nav ul li a:hover {
    color: #ffd700;
}

.hero {
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero h2 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.5em;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    background: #ffd700;
    color: #333;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background: #ffcc00;
}

.hero-content {
    float: left;
    width: 50%;
    padding-right: 20px;
    box-sizing: border-box;
}

.hero-image {
    float: right;
    width: 40%;
}
footer {
    background: #000000;
    color: #fff;
    text-align: center;
    padding: 1px 0;
    margin-top: 50px;
}

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Gkuwa</h1>
        <!-- Navbar  -->
            <nav>
                <ul>
                    <li><a href="admin.php" class="active">Beranda</a></li>
                    <li><a href="tabel.php">View User</a></li>
                    <li><a href="twisata.php">View Wisata</a></li>
                    <li><a href="tkuliner.php">View Kuliner</a></li>
                    <li><a href="tulasan.php">View Ulasan</a></li>
                    <li><a href="treserv.php">View Reservasi</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                    <li><a href="profil.php">Profil</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h2>Gkuwa</h2>
            <p>Selamat datang di halaman admin!</p>
        </div>
    </div>
    <img src="p.png" alt="Wisata" class="hero-image">
    </div>
    </section>
    <!-- Content Section -->
    <footer>
        <div class="container">
            <p>© 2024 Landing Page Wisata Kota Gresik.</p>
        </div>
    </footer>
</body>
</html>
