<?php
//include koneksi
include_once("../koneksi.php");
if ($id = $_GET['id_buku']) {
    $result = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
    header("Location:index.php");
} else if ($id = $_GET['id_user']) {
    $result = mysqli_query($koneksi, "DELETE FROM admin WHERE id_user=$id");
    header("Location:data_pengguna.php");
}

?>