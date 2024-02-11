<?php 


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
            <li><button type="submit" class="btn-login">logout</button></li>        
        </ul>
    </nav>
    <div class="konten">
        <h2>Detail peminjaman buku</h2>
        <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Terlambat</th>
        </tr>
        <tr>
            <td>1</td>
            <td>mikrotik pemula</td>
            <td>24 maret 2024</td>
            <td>18 maret 2024</td>
            <td>-</td>
        </tr>
    </table>
    <?php
        include "../layout/footer.html";
    ?>
</body>
</html>