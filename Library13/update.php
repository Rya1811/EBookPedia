<?php 

$conn = mysqli_connect("localhost", "root", "", "library13");

$id = $_GET['id'];

$tampil = "SELECT * FROM admin WHERE id_buku = '$id' ";

$hasil = mysqli_query($conn, $tampil);

$data = mysqli_fetch_array($hasil);

$judul_buku = $data['judul_buku'];

 ?>



<form action="proses_update.php" method="GET">
	<label for="">Judul Buku</label> <br>
	<input type="text" name="judul" value="<?= $data['judul_buku']; ?>"> <br>

	<label for="">Jumlah_buku</label> <br>
	<input type="text" name="jumlah" id="" value="<?= $data['jumlah_buku'] ?>"> <br>

	<label for="">Peminjam</label> <br>
	<input type="text" name="peminjam" id="" value="<?= $data['peminjam'] ?>"> <br>

	 <input type="hidden" name="id" value="<?= $data['id_buku'] ?>">
	
	<input type="submit" value="Simpan">
	<br>
<a href="index.php">Batal</a>
</form>