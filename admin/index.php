<?php  
include "../koneksi.php";
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th {
            border:1px solid black;
            }
    </style>
    
    <title>Document</title>
</head>
<body>
    <h2>Hallo Admin <?php echo $_SESSION["username"] ?> sistem informasi perpustakaan</h2>
    <form action="index.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>
    <hr />
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="data_pengguna.php">Data Pengguna</a></li>
            <li><a href="daftar_buku.php">Daftar Buku</a></li>
        </ul>
    </nav>
    
    <hr />


    
    
    <br />
    <h3>Detail Peminjam</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Terlambat</th>
            <th>Aksi</th>
            
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>delete</button>
            </td>
        </tr>
    </table>
</body>
</html>