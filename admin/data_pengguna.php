<?php 
include "../koneksi.php";

$message = "";

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $roles = $_POST['roles'];

    try {
        //code...
        $sql = "INSERT INTO admin (username, password, roles) VALUES ('$username', '$password', '$roles')";
        if ($koneksi->query($sql)) {
            $message="daftar berhasil";
        } else {
            $message="daftar gagal, coba ulangi lagi";
        }
    } catch (mysqli_sql_exception) {
        //throw $th;
        $message="username sudah digunakan";
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
    <h3>Daftar Akun</h3>
    <i><?= $message ?></i>
    <form action="data_pengguna.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <label for="roles">role</label>
        <select id="roles" name="roles">
            <option value="siswa">siswa</option>
            <option value="admin" selected>admin</option>
        </select>
        <button type="submit" name="register">daftar</button>
    </form>

    <h3>Tabel Pengguna</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Roles</th>
            <th>Tgl Dibuat</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <footer>
        <?php include "../layout/footer.html" ?>
    </footer>
</body>
</html>