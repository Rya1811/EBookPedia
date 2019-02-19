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
	<title>Perpus 13</title>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<!-- link Animation -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
    <!-- end link Anim -->
</head>
<body>
	<div class="jumbotron"></div>
	<div class="hero-image">
	  	<div class="hero-text">
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
					<a href="tables.php">Batal</a>
				</form>
			</form>
		
	  	</div>
	</div>
	<!-- Anim JS -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <!-- end Anim JS -->
</body>
<footer>
	<div class="footer" align="center">
		&copy;BookPedia 13&hearts;
	</div>
</footer>
</html>