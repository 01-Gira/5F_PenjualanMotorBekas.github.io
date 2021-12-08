<?php 
include '../koneksi.php';
$id_user = $_GET['id_user'];
$sql=mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'") or die($conn);
if($sql){
    echo "
		<script>
		alert('Data Berhasil dihapus!');
		document.location.href='lihat-user.php';
		</script>
	";
}else{
    echo "
		<script>
		alert('Data gagal dihapus!');
		document.location.href='lihat-user.php';
		</script>
	";
}
