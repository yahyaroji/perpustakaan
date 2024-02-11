<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];

$cekuser = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = $koneksi ->query($cekuser);

if ($result -> num_rows >0) {
    # code...
    $data = $result ->fetch_assoc();
    if ($data['roles']=='admin') {
        # code...
        
        $_SESSION ['username'] = $data ['username'];
        $_SESSION ['is_login'] = true;
        header('location:admin');
    } else if($data['roles']== 'siswa') {
        
        $_SESSION ['username'] = $data ['username'];
        $_SESSION ['is_login'] = true;
        header('location:siswa');
    } else {
        header("location:../index.php?pesan=gagal");
    } 
} else {
    header("location:../index.php?pesan=gagal");
}
?>