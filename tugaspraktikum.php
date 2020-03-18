<!DOCTYPE html>
<html>
	<head>
		<title> DATA MAHASISWA </title>
	</head>

	<body>
		<h1>Data Mahasiswa</h1>
		<h2>Tambah Data Mahasiswa</h2>
		<form method="post" action="tambahaksi.php">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim"></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td><input type="text" name="prodi"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>


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
	</body>
</html>