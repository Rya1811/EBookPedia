<?php 
// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "library13");

$siswa = $_GET['siswa'];
$buku = $_GET['buku'];
$tanggal = $_GET['tanggal'];

$input = "INSERT INTO peminjam(nama_siswa, id_buku, tgl_pinjam) VALUES ('$siswa', '$buku', '$tanggal')";

$hasil = mysqli_query($conn, $input);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Ditambah');
 			document.location.href = 'list_peminjam.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Ditambah');
 			document.location.href = 'list_peminjam.php';
 		</script>";
}



 ?>