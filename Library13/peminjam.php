<?php 

$conn = mysqli_connect("localhost", "arya", "181102", "library");

$tampil = "SELECT * FROM peminjam";

$hasil = mysqli_query($conn, $tampil);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Peminjam</title>
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
    			<a class="nav-link active" href="index.php">SignUp!</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Peminjam</a>
  			</li>
		</ul>
<h1>Library 13</h1>
<table border="3" cellspacing="0" cellpadding="10">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Judul Buku</th>
		<th>Tanggal Peminjaman</th>
		<th>Decision</th>
	</tr>
	<?php $i = 1; ?>
	<?php while ($data = mysqli_fetch_array($hasil)): ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $data['nama']; ?></td>
		<td><?= $data['judul_buku']; ?></td>
		<td><?= $data['tgl_pinjam'] ?></td>
		<td>
			<a href="delete.php?id=<?= $data['id_buku']; ?>">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>
<br>
<a href="index.php">List Buku</a>
</div>
</body>
</html>