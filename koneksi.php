<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "perpustakaan";

$koneksi = mysqli_connect ($servername, $username, $password, $db);
if (!$koneksi) {
    die ("koneksi gagal : ".mysqli_connect_error());
}