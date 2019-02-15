<?php
	
	$conn = mysqli_connect("localhost", "root", "", "library13");

	$tampil = "SELECT * FROM buku";

	$hasil = mysqli_query($conn, $tampil);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpus 13</title>
	<script src="jsjquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="jumbotron" align="center">
  		<h1>BookPedia</h1>
  		<b>Booksite web online</b>
	</div>
	
	<div class="container" align="center">
		<ul class="nav justify-content-center">
			<li class="nav-item">
    			<a class="nav-link active" href="index.php">Home</a>
  			</li>  			
  			<li class="nav-item">
    			<a class="nav-link active" href="input_buku.php">Tambah Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="index.php">List Peminjam</a>
  			</li>
		</ul>
		<h1>List Buku</h1>
		<table border="3" cellspacing="0" cellpadding="10">
			<tr>
				<th>ID Buku</th>
				<th style="text-align: center;">Judul Buku</th>
				<th style="text-align: center;">Pilihan</th>
			</tr>
			<?php $i = 1; ?>
			<?php while ($data = mysqli_fetch_array($hasil)): ?>
			<tr>
				<td style="text-align: center;"><?= $i; ?></td>
				<td><?= $data['judul_buku']; ?></td>
				<td>
					<a href="delete_buku.php?id=<?= $data['id_buku']; ?>">Hapus |</a>
					<a href="update_buku.php?id=<?= $data['id_buku']; ?>"> Update</a>
				</td>
			</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
		</table>
	</div>
</body>
</html>