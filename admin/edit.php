<?php

include_once("../koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$sampul = $_POST['sampul'];
    $stok = $_POST['stok'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE buku SET sampul='$sampul', stok='$stok', judul='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM buku WHERE id=$id");
 
while($d = mysqli_fetch_array($result))
{
	$sampul = $d['sampul'];
    $stok = $d['stok'];
	$judul = $d['judul'];
	$pengarang = $d['pengarang'];
	$penerbit = $d['penerbit'];
}
?>
<html>
<head>	
	<title>Edit Buku</title>
</head>
 
<body>	
	<form name="update" method="POST" action="edit.php">
    <table>
        <tr>
            <th>Sampul</th>
            <th>Stok</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Action</th>
        </tr>
        <tr>
            
            <td><input type="text" name="sampul" value = "<?php echo $sampul ?>"></td>
            <td><input type="text" name="stok" value = "<?php echo $stok ?>"></td>
            <td><input type="text" name="judul" value = "<?php echo $judul ?>"></td>
            <td><input type="text" name="pengarang" value = "<?php echo $pengarang ?>"></td>
            <td><input type="text" name="penerbit" value = "<?php echo $penerbit ?>"></td>
            
            <td>
                <button type="submit" name="update"> update</button>
            </td>
        </tr>
        </table>
	</form>
</body>
</html>