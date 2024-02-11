<?php
//include koneksi
include_once("../koneksi.php");
$id = $_GET['id'];
 
// Delete buku berdasakan id 
$result = mysqli_query($koneksi, "DELETE FROM buku WHERE id=$id");
header("Location:index.php");
?>