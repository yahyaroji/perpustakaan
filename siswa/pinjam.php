
<?php 
	include('../koneksi.php');

	$no_pinjam = rand(1,99);
	$tgl_pinjam = date('Y-m-d');
	$jumlah_pinjam = "";
	$judul = $_POST['judul'];
	$tgl_kembali = $_POST['id_buku'];
	$id_user = date('Y-m-d');
	$id_buku = date('Y-m-d');

	$data = mysqli_query($koneksi, "INSERT INTO pinjam(no_pinjam, tanggal_pinjam, nim, id_buku) VALUES ('$no_pinjam', '$waktu', '$nim', '$id_buku')");
	if ($data) {
		header("location:pinjam.php?pesan=datatersimpan");
	}
	else{
		echo "<div class='alert alert-danger text-center mt-4' style='font-size:80px;' role='alert'>EROR 404<br><a href='tambahpinjam.php'><button class='btn btn-danger justify-content-center'>Kembali</button></a></div>";
	}

?>