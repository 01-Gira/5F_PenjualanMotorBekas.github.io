<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $hak_akses = $_POST['hak_akses'];
    $create_date = $_POST['create_date'];
    $manager = $_POST['manager'];
	$query = mysqli_query($koneksi, "INSERT INTO user VALUES('','$id_user','$nama','$password','$hak_akses','$create_date','$manager')") or die($koneksi);
    if ($query) {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('lihat-user.php')</script>";
    } else {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('lihat-user.php')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Buat User</title>
	<link rel="stylesheet" type="text/css" href="../style.css">	
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>
<body>
	<main class="content">
		<?php include'menu-content.php';?>
		<section class="views">
			<div class="view-table">
				<div class="welcome">
					<h1>Buat User</h1>
					<hr/>
				</div>
				<div class="table">
					<form class="form-input" method="POST">
						<table class="table-input">
							<tr>
								<td class="nama-data">ID User</td>
								<td><input type="text" name="id_user" class="input-data" required></td>	
								<td class="nama-data">Tanggal Dibuat</td>
								<td><input type="date" name="create_date" class="input-data" required></td>					
							</tr>
							<tr> 
								<td class="nama-data">Nama </td>
								<td><input type="text" name="nama" class="input-data" required></td>	
								<td class="nama-data">Hak Akses</td>
								<td><select name="hak_akses" class="input-data">
									<option value="Teknisi">Teknisi</option>
									<option value="Teller">Teller</option>
									<option value="Customer">Customer</option>
									<option value="Pemilik">Pemilik</option>
									
								</select></td>						
							</tr>
							<tr>
								<td class="nama-data">Password</td>
								<td><input type="password" name="password" class="input-data" required></td>								
								<td class="nama-data">Manager</td>
								<td><input type="text" name="manager" class="input-data" required></td>							
							</tr>																						
						</table>
						<button type="submit" name="tambah" class="btn">Simpan</button>				
					</form>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="wrapper">
			<div class="copyright">
				<small></small>
			</div>
		</div>
	</footer>
		<script src="../bootstrap.bundle.min.js"></script>
</body>
</html>