<?php 

$conn = mysqli_connect("localhost", "root", "", "library13");

$id = $_GET['id'];

$tampil = "SELECT * FROM buku WHERE id_buku = '$id' ";

$hasil = mysqli_query($conn, $tampil);

$data = mysqli_fetch_array($hasil);

$judul_buku = $data['judul_buku'];

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
		<h2>Edit Data Buku</h2>
		<form action="proses_update.php" method="GET">
			<label for="">Judul Buku</label> <br>
			<input type="text" name="judul" value="<?= $data['judul_buku']; ?>"> <br>

			<input type="hidden" name="id" value="<?= $data['id_buku'] ?>">
			
			<input type="submit" value="Simpan">
			<br>
				<a href="list_buku.php">Batal</a>
			</form>
		</form>
	</div>
</body>
</html>