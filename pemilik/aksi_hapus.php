<?php
include '../koneksi.php';
$id_motor = $_GET['id_motor'];

$sql = mysqli_query($koneksi, "DELETE FROM identitas_motor WHERE id_motor='$id_motor'") or die($conn);
if ($sql) {
	echo "
		<script>
		alert('Data Berhasil dihapus!');
		document.location.href='menu-utama.php';
		</script>
	";
} else {
	echo "
		<script>
		alert('Data gagal dihapus!');
		document.location.href='menu-utama.php';
		</script>
	";
}
