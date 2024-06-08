<?php
include("koneksi.php");

//kalau tidak ada id di query string
if( !isset($_GET['id'])){
    header('location: tabel.php');
}
$id = $_GET['id'];

//Fetech user data based pn id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $role = $user_data['role'];
}
?>
<html>
    <head>
        <title>Update Data</title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        h3 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        
        header {
            color: white;
            padding: 20px;
            text-align: center;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 20px;
            float: left;
        }
        
        h3 {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3d66fb;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #3d66d0;
        }

        input[type="hidden"] {
            display: none;
        }
            </style>
    </head>
    <body>
        <header>
        <a href="tabel.php" class="back-button">Kembali</a>
            <h3>Formulir Edit User</h3>
            <form method="POST" action="prosesup.php">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <select name="role" id="role" required>
                            <option disabled selected> <?php echo $role?></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                        <td><input type="submit" name="simpan" value="simpan"></td>
                    </tr>
                    </table>
                    </form>
                    </body>
</html>