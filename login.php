<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];  
    
    // echo $role;
    $cekuser = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $koneksi ->query($cekuser);

    //cari data
    if ($result > 0) {
        $ambildatarole = mysqli_fetch_array($result);
        $role = $ambildatarole['role'];

        if ($role == 'admin') {
            //user admin
            // $_SESSION ['log'] = 'Logged';
            $_SESSION ['role'] = 'admin';
            header('location:admin');
        } else {
            //user siswa
            // $_SESSION ['log'] = 'Logged';
            $_SESSION ['role'] = 'siswa';
            header('location:siswa');

        }
    }
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
        <h3>Masuk Akun</h3>
    </header>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <label for="role">role</label>
        <select id="role" name="role">
            <option value="siswa">siswa</option>
            <option value="admin" selected>admin</option>
        </select>
        <button type="submit" name="login">masuk sekarang</button>
    </form>
    <footer>
        <?php include "layout/footer.html" ?>
    </footer>
</body>

</html>