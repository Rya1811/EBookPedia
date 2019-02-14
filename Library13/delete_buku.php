<?php 

$conn = mysqli_connect("localhost", "root", "", "library13");

$id = $_GET['id'];

$delete = "DELETE FROM buku WHERE id_buku = '$id' ";

$hasil = mysqli_query($conn, $delete);

if ($hasil) {
	echo "<script>
 			alert('Data Berhasil Dihapus');
 			document.location.href = 'list_buku.php';
 		</script>";
}else{
	echo "<script>
 			alert('Data Gagal Dihapus');
 			document.location.href = 'list_buku.php';
 		</script>";
}



 ?>