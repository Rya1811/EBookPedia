<?php 

$conn = mysqli_connect("localhost", "root", "", "library13");

$id = $_GET['id'];

$tampil = "SELECT * FROM peminjam WHERE id_pinjam = '$id' ";

$hasil = mysqli_query($conn, $tampil);

$data = mysqli_fetch_array($hasil);

$nama_siswa = $data['nama_siswa'];
$judul_buku = $data['judul_buku'];
$tgl_pinjam = $data['tgl_pinjam'];

 ?>
<?php
	
	$conn = mysqli_connect("localhost", "root", "", "library13");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Buku</title>
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
    			<a class="nav-link" href="#">List Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Peminjam</a>
  			</li>
		</ul>
		<h2>Edit Data Peminjam</h2>
		<form action="pu_peminjam.php" method="GET">
			<label for="">Nama Siswa</label> <br>
			<input type="text" name="siswa" value="<?= $data['nama_siswa']; ?>"> <br>

			<label for="">Judul Buku</label> <br>
			<input type="text" name="buku" value="<?= $data['judul_buku']; ?>"> <br>

			<label for="">Tanggal Pinjam</label> <br>
			<input type="date" name="pinjam" value="<?= $data['tgl_pinjam']; ?>"> <br>

			<input type="hidden" name="id" value="<?= $data['id_pinjam'] ?>">
			
			<input type="submit" value="Simpan">
			<br>
				<a href="list_buku.php">Batal</a>
			</form>
		</form>
	</div>
</body>
</html>