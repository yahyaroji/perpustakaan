

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_js/siswa.css">
    <link rel="stylesheet" href="../css_js/fontawesome/css/all.css">
    
    <title>Document</title>
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
            <input type="text" placeholder="ketik judul buku">
            <button>Cari</button>
        </div>
        
        <table>
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Balik</th>
            <th>Terlambat</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td>andri</td>
            <td>mikrotik pemula</td>
            <td>1 Desember 2023</td>
            <td>7 Desember 2023</td>
            <td>--</td>
            <td>
                <button>delete</button>
            </td>
        </tr> 
    </table>

    </div>
    <?php
        include "../layout/footer.html";
    ?>
</body>
</html>