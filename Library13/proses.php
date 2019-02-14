<?php 
// koneksi ke db
$conn = mysqli_connect("localhost", "arya", "181102", "library");

$judul_buku = $_GET['judul'];
$jumlah_buku = $_GET['jumlah'];
$peminjam = $_GET['peminjam'];

$input = "INSERT INTO admin(judul_buku, jumlah_buku, peminjam) VALUES ('$judul', '$jumlah', 'peminjam')";

$hasil = mysqli_query($conn, $input);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Ditambah');
 			document.location.href = 'index.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Ditambah');
 			document.location.href = 'index.php';
 		</script>";
}



 ?>