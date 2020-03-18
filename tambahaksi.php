<?php
	include 'koneksi.php';

	// menangkap data yang dikirim dari form
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$prodi = $_POST['prodi'];

	// menginput data ke database
	mysqli_query($koneksi, "insert into mahasiswa values('$nama','$nim','prodi')");

	// mengalihkan halaman kembali ke halaman yang diinginkan
	header("location:tugaspraktikum.php")
?>