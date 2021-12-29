<?php
include '../koneksi.php';

if(isset($_POST['hapusTRSK'])){
$id_transaksi = $_POST['id_transaksi'];
$id_cust = $_POST['id_cust'];
$query = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($koneksi));
$queryCust = mysqli_query($koneksi, "DELETE FROM customer WHERE id_cust='$id_cust'") or die(mysqli_error($koneksi));
if ($query) {
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
}