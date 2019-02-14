<?php 
// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "library13");

$judul = $_GET['judul'];

$input = "INSERT INTO buku(judul_buku) VALUES ('$judul')";

$hasil = mysqli_query($conn, $input);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Ditambah');
 			document.location.href = 'list_buku.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Ditambah');
 			document.location.href = 'list_buku.php';
 		</script>";
}



 ?>