<?php 

// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "library13");

// ambil data dari tampilan
$id = $_GET['id'];
$judul = $_GET['judul'];

$update = "UPDATE buku SET id_buku = '$id',
			judul_buku = '$judul' WHERE id_buku = '$id' ";

$hasil = mysqli_query($conn, $update);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Diubah');
 			document.location.href = 'tables.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Diubah');
 			document.location.href = 'tables.php';
 		</script>";
}

 ?>
 