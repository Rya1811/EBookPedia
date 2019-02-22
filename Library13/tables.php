<?php
	
	$conn = mysqli_connect("localhost", "root", "", "library13");

	$tampil = "SELECT * FROM buku";
	$tampil2 = "SELECT * FROM siswa";
	$tampil3 = "SELECT * FROM peminjam";
	$tampil4 = "SELECT * FROM pinjam";

	$hasil = mysqli_query($conn, $tampil);
	$hasil2 = mysqli_query($conn, $tampil2);
	$hasil3 = mysqli_query($conn, $tampil3);
	$hasil4 = mysqli_query($conn, $tampil4);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpus 13</title>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/tables.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="jumbotron" align="center">
  		
	</div>
	<div class="hero-image">
	  	<div class="hero-text">
	  		<h3 style="color: lime;">Input Data</h3>
	  		<a href="input_data.php"><button>Klik disini!</button></a>
			<h3 style="color: orange; color: rgba(0.4);">Pilih Tabel</h3>

			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'Buku')">Buku</button>
			  <button class="tablinks" onclick="openCity(event, 'Peminjam')">Peminjam</button>
			  <button class="tablinks" onclick="openCity(event, 'Siswa')">Siswa</button>
			  <button class="tablinks" onclick="openCity(event, 'Pinjam')">Pinjam</button>
			  
			</div>

			<div id="Buku" class="tabcontent" align="center">
			  <h3>List Buku</h3>
				<table class="table table-bordered table-hover table-dark" cellspacing="0" cellpadding="10">
					<tr>
						<th class="bg-primary" style="text-align: center;">ID Buku</th>
						<th class="bg-primary" style="text-align: center;">Judul Buku</th>
						<th class="bg-primary" style="text-align: center;">Pilihan</th>
					</tr>
					<?php while ($data = mysqli_fetch_array($hasil)): ?>
					<tr>
						<td style="text-align: center;"><?= $data['id_buku']; ?></td>
						<td><?= $data['judul_buku']; ?></td>
						<td style="text-align: center;">
							<a href="delete_buku.php?id=<?= $data['id_buku']; ?>">Hapus |</a>
							<a href="update_buku.php?id=<?= $data['id_buku']; ?>"> Update</a>
						</td>
					</tr>
					<?php endwhile; ?>
				</table>
			</div>

			<div id="Peminjam" class="tabcontent">
			  				<h3>List Peminjam</h3>
				<table class="table table-bordered table-hover table-dark" cellspacing="0" cellpadding="10">
				<tr>
					<th class="bg-primary" style="text-align: center;">ID Pinjam</th>
					<th class="bg-primary" style="text-align: center;">Nama Siswa</th>
					<th class="bg-primary" style="text-align: center;">Judul Buku</th>
					<th class="bg-primary" style="text-align: center;">Tanggal Pinjam</th>
					<th class="bg-primary" style="text-align: center;">Pilihan</th>
				</tr>
				<?php $i = 1; ?>
				<?php while ($data = mysqli_fetch_array($hasil3)): ?>
				<tr>
					<td style="text-align: center;"><?= $i; ?></td>
					<td><?= $data['nama_siswa']; ?></td>
					<td><?= $data['judul_buku']; ?></td>
					<td><?= $data['tgl_pinjam']; ?></td>
					<td>
						<a href="delete_peminjam.php?id=<?= $data['id_pinjam']; ?>">Hapus |</a>
						<a href="update_peminjam.php?id=<?= $data['id_pinjam']; ?>"> Update</a>
					</td>
				</tr>
				<?php $i++; ?>
				<?php endwhile; ?>
				</table>
			</div>

			<div id="Siswa" class="tabcontent">
				<table class="table table-bordered table-hover table-dark" cellspacing="0" cellpadding="10">
					<tr>
						<th class="bg-primary" style="text-align: center;">ID Siswa</th>
						<th class="bg-primary" style="text-align: center;">Nama Siswa</th>
						<th class="bg-primary" style="text-align: center;">Pilihan</th>
					</tr>
					<?php $i = 1; ?>
					<?php while ($data = mysqli_fetch_array($hasil2)): ?>
					<tr>
						<td style="text-align: center;"><?= $i; ?></td>
						<td><?= $data['nama_siswa']; ?></td>
						<td style="text-align: center;">
							<a href="delete_siswa.php?id=<?= $data['id_siswa']; ?>">Hapus |</a>
							<a href="update_siswa.php?id=<?= $data['id_siswa']; ?>"> Update</a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endwhile; ?>
				</table>
			</div>

			<div id="Pinjam" class="tabcontent">
				<table class="table table-bordered table-hover table-dark" cellspacing="0" cellpadding="10">
					<tr>
						<th class="bg-primary" style="text-align: center;">ID Pinjam</th>
						<th class="bg-primary" style="text-align: center;">Jumlah</th>
						<th class="bg-primary" style="text-align: center;">Tgl_kembali</th>
						<th class="bg-primary" style="text-align: center;">id_buku</th>
						<th class="bg-primary" style="text-align: center;">id_siswa</th>
						<th class="bg-primary" style="text-align: center;">no_pinjam</th>
						<th class="bg-primary" style="text-align: center;">Pilihan</th>
					</tr>
					<?php $i = 1; ?>
					<?php while ($data = mysqli_fetch_array($hasil4)): ?>
					<tr>
						<td style="text-align: center;"><?= $i; ?></td>
						<td><?= $data['jumlah']; ?></td>
						<td><?= $data['tgl_kembali']; ?></td>
						<td><?= $data['id_buku']; ?></td>
						<td><?= $data['id_siswa']; ?></td>
						<td><?= $data['no_pinjam']; ?></td>
						<td style="text-align: center;">
							<a href="delete_siswa.php?id=<?= $data['id_siswa']; ?>"> Hapus </a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endwhile; ?>
				</table>
			</div>
	  	</div>
	</div>
</body>
<footer>
	<div class="footer" align="center">
		&copy;BookPedia 13&hearts;
	</div>
</footer>
</html>