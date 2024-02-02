<?php
include "koneksi.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['roles'];  
    
    // echo $role;
    $cekuser = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $koneksi ->query($cekuser);

    //cari data
    if ($result->num_rows > 0) {
        // $ambildatarole = mysqli_fetch_array($result);
        // $role = $ambildatarole['roles'];
        $data = $result->fetch_assoc();
        if ($role == 'admin') {
            //user admin
            // $_SESSION ['log'] = 'Logged';
            
            $_SESSION ['roles'] = 'admin';
            $_SESSION ['username'] = $data ['username'];
            $_SESSION ['is_login'] = true;

            // $_SESSION [is_login] = true;
            header('location:admin');
            
        } else {
            //user siswa
            // $_SESSION ['log'] = 'Logged';
            $_SESSION ['roles'] = 'siswa';
            $_SESSION ['username'] = $data ['username'];
            $_SESSION ['is_login'] = true;
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
        <?php include "layout/header.html"?>
    </header>
    <br />
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <label for="roles">role</label>
        <select id="roles" name="roles">
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