<?php 

// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "library13");

// ambil data dari tampilan
$id = $_GET['id'];
$siswa = $_GET['siswa'];

$update = "UPDATE siswa SET id_siswa = '$id',
			nama_siswa = '$siswa' WHERE id_siswa = '$id' ";

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
 