<?php 
include "koneksi.php";

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <header>
        <?php include "layout/header.html" ?>
    </header>
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">daftar sekarang</button>
    </form>
    <footer>
        <?php include "layout/footer.html" ?>
    </footer>
</body>
</html>