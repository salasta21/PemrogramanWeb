<!DOCTYPE html>
<html>
	<head>
		<title>Latihan 1</title>
	</head>

	<body>
		<h2>Menampilkan Data Mahasiswa</h2>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>Prodi</th>
			</tr>
			<?php
				include "koneksi.php";
				$no = 1;
				$data = mysqli_query($koneksi,"select * from mahasiswa");
				while($d = mysqli_fetch_array($data)){
			?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['nim']; ?></td>
						<td><?php echo $d['prodi']; ?></td>
					</tr>
				<?php
				}
				?>
		</table>
		<a href="tambah.php">Tambah Data Mahasiswa</a>
	</body>
</html>