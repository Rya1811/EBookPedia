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
	<div class="jumbotron" align="left">
  		<h1>BookPedia</h1>
  		<b>Booksite web online</b> <br>
  		<b>Book is world's nearest window</b>
	</div>
	
	<div class="container" align="center">
		<ul class="nav justify-content-center">
  			<li class="nav-item">
    			<a class="nav-link active" href="index.php">Home</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="list_buku.php">List Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Peminjam</a>
  			</li>
		</ul>
		<h2>Input Data Peminjam</h2>
		<form action="proses_peminjam.php" method="GET">
		
		<label for=""><b>Nama Siswa :</b></label> <br>
		<input type="text" name="siswa"> <br>

		<label for=""><b>Judul Buku :</b></label> <br>
		<input type="text" name="buku"> <br>

		<label for=""><b>Tanggal Pinjam :</b></label> <br>
		<input type="date" name="tanggal"> <br>
		
		<input type="submit" value="kirim"><br><br>
		<a href="index.php">Batal</a>
		</form>
	</div>
</body>
</html>