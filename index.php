<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "layout/header.html"
    ?>

    <main>
        <p>Hallo selamat datang di sistem informasi perpustakaan SMKN 11 MALANG</p>
    </main>
    
    <?php
    include "layout/footer.html"
    ?>
</body>
</html>