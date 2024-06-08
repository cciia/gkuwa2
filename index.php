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

        header .logo-container {
            display: flex;
            align-items: center;
            float: left;
        }

        header .logo-container img {
            height: 100px; 
            width: auto; 
            margin-right: 10px; 
        }

        header .logo-container h1 {
            margin: 0;
            color: #fff;
            font-size: 1.5em; 
            line-height: 50px; 
        }

        nav {
            float: right;
            line-height: 60px;
        }

        nav ul li {
            display: inline-block; 
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
            padding: 20px 0;
        }

        .footer-info {
            display: flex;
            justify-content: space-around;
        }

        .contact-info,
        .follow-us {
            flex: 1;
            margin: 0 10px;
        }

        .contact-info h3,
        .follow-us h3 {
            color: #ffd700;
        }

        .contact-info p,
        .follow-us a {
            color: #fff;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .follow-us a {
            display: block;
            margin-top: 5px;
            text-decoration: none;
        }

        .follow-us a:hover {
            color: #ffd700;
        }

        .footer-info h3 {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <header>
    <div class="container">
        <div class="logo-container">
            <img src="logo.png" alt="Gkuwa Logo">
            <h1>Gkuwa</h1>
        </div>
        <!-- Navbar  -->
            <nav>
                 <ul>
                    <li><a href="index.php" class="active">Beranda</a></li>
                    <li><a href="loginn.php">Masuk</a></li>
                    <li><a href="register.php">Daftar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h2>Gresik Kuliner dan Wisata</h2>
            <p>Temukan destinasi wisata dan kuliner di kota Gresik.</p>
        </div>
    </div>
    <img src="p.png" alt="Wisata" class="hero-image">
    </div>
    </section>
        <!-- Footer Section -->
    <footer>
    <div class="container">
        <div class="footer-info">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>+62009876543</p>
                <p>agustinafransisca912@email.com</p>
                <p>Gresik, Jawa Timur, Indonesia</p>
            </div>
            <div class="follow-us">
                <h3>Follow Us</h3>
                <a href="https://www.instagram.com/cc.ciia" target="_blank">Instagram</a>
            </div>
        </div>
        <p class="copyright">
            &copy; 2024 Landing Page Wisata & Kuliner Kota Gresik. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>
