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
    			<a class="nav-link" href="list_buku.php">List Buku</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">List Peminjam</a>
  			</li>
		</ul>
		<h2>Masukan data buku</h2>
		<form action="proses_buku.php" method="GET">
		
		<label for=""><b>Judul Buku :</b></label> <br>
		<input type="text" name="judul"> <br>
		
		<input type="submit" value="kirim"><br><br>
		<a href="index.php">Batal</a>
		</form>
	</div>
</body>
</html>