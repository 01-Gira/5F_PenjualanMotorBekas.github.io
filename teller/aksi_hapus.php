<?php
include '../koneksi.php';

$id_cust = $_GET['id_cust'];
$sql = mysqli_query($koneksi, "DELETE FROM customer WHERE id_cust='$id_cust'");
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
