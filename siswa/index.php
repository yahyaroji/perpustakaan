<?php  
session_start();

// if ($_SESSION['roles']=="") {
//     header("location:../index.php");
// }

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
    <link rel="stylesheet" href="../css_js/siswa.css">
    <link rel="stylesheet" href="../css_js/fontawesome/css/all.css">
    <title>Siswa</title>
</head>
<body>
    <nav>
        <div class="image">
            <i class="fa fa-user"></i>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="peminjaman.php">Peminjaman</a></li>
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
            <td>1</td>
            <td>5</td>
            <td>mikrotik pemula</td>
            <td>Teknologi</td>
            <td>Dr. Indro, S.T, M.T</td>
            <td>Airlangga Sby</td>
            <td>
                <button>pinjam</button>
                
            </td>
        </tr>
    </table>

    </div>
    <?php
        include "../layout/footer.html";
    ?>
</body>
</html>