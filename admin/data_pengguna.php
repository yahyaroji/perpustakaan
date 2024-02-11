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

if(isset($_GET['cari'])) {
    $cari = $_GET['cari'];
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_js/siswa.css">
    <link rel="stylesheet" href="../css_js/fontawesome/css/all.css">
    <title>Data Pengguna</title>
</head>
<body>
    <nav>
        <div class="image">
            <i class="fa fa-user"></i>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="detail_peminjaman.php">Peminjaman</a></li>
            <li><a href="data_pengguna.php">Pengguna</a></li>
            <li><button type="submit" class="btn-login">Logout</button></li>
        </ul>
    </nav>
    <div class="konten">
        <h2>Hallo <?php $username ?> selamat datang di sistem perpustakaan SMKN 11 Malang</h2>
        <div class="cari">
            <form action="data_pengguna.php" method="GET">
                <input type="text" placeholder="ketik nama" name="cari">
                <button type="submit" value="Cari">Cari</button>
            </form>
        </div>
        <i><?= $message ?></i>
        <div class="tambahpengguna">
        <form action="data_pengguna.php" method="POST">
            <input type="text" placeholder="username" name="username">
            <input type="password" placeholder="password" name="password">
            <select id="roles" name="roles">
                <option value="admin">Admin</option>
                <option value="siswa">Siswa</option>
            </select>
            <button type="submit" name="register">Tambah Data</button>
        </form>
        </div>
        
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Roles</th>
                <th>Tgl Dibuat</th>
                <th>Action</th>
            </tr>
        <?php 
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi, "SELECT * FROM admin where username like '%".$cari."%'");
            } else {
                $data = mysqli_query($koneksi, "SELECT * FROM admin ");
            }
            $no = 1; 
            while ($d = mysqli_fetch_array($data)) {
        ?>
        
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['roles']; ?></td>
                <td><?php echo $d['created_at']; ?></td>
                <td>
                    <button><a href="delete.php?id_user=<?php echo $d['id_user']; ?>"> delete</a></button>
                </td>
            </tr>
    
            <?php } ?>
        </table>
    </div>
    <footer>
        <?php include "../layout/footer.html" ?>
    </footer>
</body>
</html>