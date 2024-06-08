<?php
                 if(isset($_POST['register'])){
                    $name= $_POST['name'];
                    $username= $_POST['username'];
                    $password= $_POST['password'];
                    $email= $_POST['email'];
                    $role= $_POST['role'];

                    include_once("koneksi.php");
                    $result = mysqli_query($mysqli,
                    "INSERT INTO user(name,username,password,email,role)
                    VALUES ('$name','$username','$password', '$email', '$role')");
                  if ($result) {
                    header("Location: loginn.php");
                    exit(); // Pastikan skrip berhenti setelah header
                } else {
                    echo "Error: " . $mysqli->error;
                }
            }
            ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Register</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .Container {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
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
            background-color: #3d66d0;
            }

            h2 {
                text-align: center;
            }

            .content {
                margin-top: 20px;
            }

            .input-box {
                margin-bottom: 15px;
            }

            .input-box label {
                display: block;
                margin-bottom: 5px;
            }

            .input-box input,
            .role-category select {
                width: 100%;
                padding: 8px;
                border-radius: 4px;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            .button-container {
                text-align: center;
                margin-top: 20px;
            }

            .button-container button {
                padding: 10px 20px;
                background-color: #3d66fb;
                color: white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
            }

            .button-container button:hover {
                background-color: #3d66d0;
            }

            p {
                text-align: center;
                margin-top: 20px;
            }

            p a {
                color: #3d66fb;
                text-decoration: none;
            }

            p a:hover {
                text-decoration: underline;
            }

        </style>
    </head>
    <body>
    <a href="index.php" class="back-button">Kembali</a>
        <div class="Container">
            <form action="register.php" method="post">
                <h2>Register</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter your username" name="username" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your valid email" name="email" required>
                    <p>Sudah punya akun? <a href="loginn.php">Klik login</a></p>
                    <div class="button-container">
                        <button type="submit" name="register">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
