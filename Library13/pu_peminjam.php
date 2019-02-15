<?php 

// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "library13");

// ambil data dari tampilan
$id = $_GET['id'];
$siswa = $_GET['siswa'];
$buku = $_GET['buku'];
$pinjam = $_GET['pinjam'];

$update = "UPDATE peminjam SET id_pinjam = '$id',
			 nama_siswa = '$siswa',
			 judul_buku = '$buku', 
			 tgl_pinjam ='$pinjam' 
	WHERE 	 id_pinjam = '$id' ";

$hasil = mysqli_query($conn, $update);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Diubah');
 			document.location.href = 'index.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Diubah');
 			document.location.href = 'index.php';
 		</script>";
}

 ?>