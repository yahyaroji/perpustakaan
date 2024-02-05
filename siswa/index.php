<?php  
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
    <h2>Hallo <?php echo $_SESSION["username"] ?> selamat datang di sistem perpustakaan SMKN 11 Malang</h2>
    <form action="index.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>
    <hr />
    <h3>Detail peminjaman buku</h3>
    
    <input type="text" placeholder="cari">
    <button>Cari</button>

    <table>
        <tr>
            <th>No</th>
            <th>Stok</th>
            <th>Judul Buku</th>
            <th>Kategori</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Action</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>pinjam</button>
                
            </td>
        </tr>
    </table>
    <br />
    <h3>Detail peminjaman buku</h3>
    <h2></h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Terlambat</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>