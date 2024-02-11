<?php  
include "../koneksi.php";
// session_start();
// if (isset($_POST['logout'])) {
//     session_unset();
//     session_destroy();
//     header('location:../index.php');
// }
$message = "";
if (isset($_POST['tambah'])) {
    $sampul = $_POST['sampul'];
    $stok = $_POST['stok'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql_buku = "INSERT INTO buku (sampul, stok, judul, pengarang, penerbit) VALUES ('$sampul','$stok','$judul','$pengarang','$penerbit')";
    $koneksi->query($sql_buku);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_js/siswa.css">
    <link rel="stylesheet" href="../css_js/fontawesome/css/all.css">
    <title>Admin</title>
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
            <li><form action="index.php" method="POST">
        <button type="submit" class="btn-login" name="logout">logout</button>
    </form></li>
        </ul>
    </nav>
    
 


    
    
    <div class="konten">
    <h2>Hallo <?php echo $_SESSION["username"] ?> selamat datang di sistem perpustakaan SMKN 11 Malang</h2>
            
            <div class="cari">
                <input type="text" placeholder="ketik judul buku">
                <button>Cari</button>
            </div>
            <div class="tambahbuku">
                <form action="index.php" method="POST">
                    <input type="text" placeholder="sampul" name="sampul">
                    <input type="text" placeholder="stok" name="stok">
                    <input type="text" placeholder="judul buku" name="judul">
                    <input type="text" placeholder="pengarang" name="pengarang">
                    <input type="text" placeholder="penerbit" name="penerbit">
                    <button type="submit" name="tambah">Tambah Buku</button>
                </form>
            </div>
        <table>
        <tr>
            <th>No</th>
            <th>Sampul</th>
            <th>Stok</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Action</th>
        </tr>
        <?php 
            $no = 1; 
            $data = mysqli_query($koneksi, "SELECT * FROM buku ");
            while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['sampul'] ?></td>
            <td><?php echo $d['stok'] ?></td>
            <td><?php echo $d['judul'] ?></td>
            <td><?php echo $d['pengarang'] ?></td>
            <td><?php echo $d['penerbit'] ?></td>
            
            <td>
                <button> <a href="edit.php?id=<?php echo $d['id']; ?>"> edit</a></button>
                <button> <a href="delete.php?id=<?php echo $d['id']; ?>"> delete</a></button>
            </td>
        </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>