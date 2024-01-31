

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
    <h2>Hallo Admin <?php $username ?> sistem informasi perpustakaan</h2>
    <hr />
    <h3>Detail buku yang dipinjam</h3>
    
    <input type="text" placeholder="cari">
    <button>Cari</button>
    <table>
        <tr>
            <th>No</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Judul Buku</th>
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
                <button>edit</button>
                <button>delete</button>
            </td>
        </tr>
    </table>
    
    <br />
    <table>
        <tr>
            <th>No</th>
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
        </tr>
    </table>
</body>
</html>