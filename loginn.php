<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Halaman Login</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            margin: 0;
            padding: 0;
        }
        .back-button {
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

        .back-button:hover {
            background-color: #3d66d0.;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: calc(100% - 40px);
            padding: 10px;
            background-color: #3d66fb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #3d66d0;
        }

        .forgot {
            text-align: center;
            margin-top: 20px;
        }

        .forgot p {
            margin: 0;
        }

        .forgot a {
            color: #3d66fb;
            text-decoration: none;
        }

        .forgot a:hover {
            text-decoration: underline;
        }
          </style>
      </head>
      <body>
      <a href="index.php" class="back-button">Kembali</a>
        <div class="container">
          <h1>Log-in</h1>
          <form action="koneksilogin.php" method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <div class="button-container">
            <div class="forgot">
          <p>Belum punya akun? <a href="register.php">Register</a></p>
            <button type="submit" name="login">Log-In</button>
          </form>
          <br>
          </div>
        </div>
      </body>
    </html>