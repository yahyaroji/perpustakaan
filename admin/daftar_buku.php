<?php 
include "../koneksi.php";
$message = "";

if (isset($_POST['tambah'])) {
    $sampul = $_POST['sampul'];
    $stok = $_POST['stok'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
}
$sql = "INSERT INTO buku (sampul, stok, judul, pengarang, penerbit) VALUES ('$sampul','$stok','$judul','$pengarang','$penerbit')";

// if ($koneksi->query($sql)) {
//     $message="data berhasil ditambahkan";
// } else {
//     $message ="data gagal ditambahkan";
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h3>Tambah Buku</h3>
<form action="daftar_buku.php" method="POST">
    <input type="text" placeholder="sampul" name="sampul">
        <input type="text" placeholder="stok" name="stok">
        <input type="text" placeholder="judul buku" name="judul">
        <input type="text" placeholder="pengarang" name="pengarang">
        <input type="text" placeholder="penerbit" name="penerbit">
        
        <button type="submit" name="tambah">tambahkan</button>
    </form>
<h3>Daftar Buku</h3>
    
    <input type="text" placeholder="cari">
    <button>Cari</button>
    <table>
        <tr>
            <th>No</th>
            <th>Sampul</th>
            <th>Stok</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Aksi</th>
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
                <button>edit</button>
                <button>delete</button>
            </td>
        </tr>
        <?php }?>
    </table>
    
</body>
</html>