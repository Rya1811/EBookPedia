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
			
			<h2>Masukan data buku</h2>
			<form action="proses_buku.php" method="GET">
			
			<label for=""><b>Nama Siswa :</b></label> <br>
			<input type="text" name="siswa"> <br>
			
			<input type="submit" value="kirim"><br><br>
			<a href="tables.php">Batal</a>
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