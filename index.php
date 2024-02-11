// <?php 
//    if(isset($_GET['pesan'])){
//    if($_GET['pesan']=="gagal"){
//    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
//        }
//    }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_js/perpus.css">
    <link rel="stylesheet" href="css_js/fontawesome/css/all.css">
    <title>Perustakaan</title>
</head>
<body>
    <form action="login.php" method="POST">
        <div class="login">
            <div class="avatar">
                <i class="fa fa-user"></i>
            </div>
            <h2>SisFo Perpus</h2>
            <div class="box-login">
                <i class="fa fa-envelope"></i>
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="box-login">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="password" name="password">
            </div>
            <div class="box-login">
                <select name="roles" id="roles">
                <option>Pilih Role</option>
                    <option value="siswa">Siswa</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            
            <button type="submit" class="btn-login" name="login">Login</button>
        </div>
    </form>
    <?php
        include "layout/footer.html";
    ?>
</body>
</html>