<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaksi</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

</head>

<body>
	<main class="content">
		<?php include 'menu-content.php'; ?>
		<section class="views">
			<div class="view-table">
				<div class="welcome">
					<h1>Transaksi</h1>
					<hr />
					<button type="button" class="btn btn-success">Tambah Data Transaksi</button>
				</div>
				<div>
					<div class="table">
						<table>
							<thead>
								<tr>
									<th>No</th>
									<th>ID Transaksi</th>
									<th>Tanggal Transaksi</th>
									<th>ID Customer</th>
									<th>ID Kendaraan</th>
									<th>Harga Jual</th>
									<th>Harga Jual Real</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$data = mysqli_query($koneksi, "SELECT * FROM transaksi order by tgl_transaksi desc");
								$no = 1;
								while ($r = mysqli_fetch_array($data)) {
									echo "
									<tr>
										<td>$no</td>
										<td>$r[id_transaksi]</td>
										<td>$r[tgl_transaksi]</td>
										<td>$r[id_cust]</td>
										<td>$r[id_motor]</td>
										<td>$r[harga_jual]</td>
										<td>$r[harga_jual_real]</td>
										";
									$no++;
								}
								?>
							</tbody>
						</table>
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
	<script src="bootstrap.bundle.min.js"></script>
</body>

</html>