<?php
include '../koneksi.php';

$id_transaksi = $_GET['id_transaksi'];
$sql = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'") or die($koneksi);
if ($sql) {
	echo "
		<script>
		alert('Data Berhasil dihapus!');
		document.location.href='transaksi.php';
		</script>
	";
} else {
	echo "
		<script>
		alert('Data gagal dihapus!');
		document.location.href='transaksi.php';
		</script>
	";
}
