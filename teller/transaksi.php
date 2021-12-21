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
					<a href="daftar_barang.php"><button type="button" class="btn btn-succes" onclick="return confirm('Silahkan Pilih Motornya Terlebih Dahulu')">Tambah Data Transaksi</button></a>
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
									<th>Harga Jual Asli</th>
									<th>Update | Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$data = mysqli_query($koneksi, "SELECT * FROM transaksi");
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
										<td>$r[harga_jual]</td>
										<td style='text-align: center;'>
                                        <a href='aksi_edit.php?id_transaksi=$r[id_transaksi]'><button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button></a>
                                        <a href='aksi_hapus.php?id_transaksi=$r[id_transaksi]'><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button></a>
						            </td>";

									$no++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="table" style="margin-top: 50px">
					<h2 style="text-align: center; margin-bottom: 40px">Tabel Customer</h2>
					<a href="buat_customer.php"><button type="button" class="btn btn-succes" onclick="return confirm('Apakah Anda Yakin Ingin Membuat Data Customer Baru?')">Tambah Data Customer</button></a>
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>ID Customer</th>
								<th>Nama Customer</th>
								<th>Alamat Customer</th>
								<th>Telp Customer</th>
								<th>NIK Customer</th>
								<th>Update - Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$data = mysqli_query($koneksi, "SELECT * FROM customer order by id_cust desc");
							$no = 1;
							while ($row = mysqli_fetch_array($data)) {

								echo "<tr>
                                    <td>$no</td>
                                    <td>$row[id_cust]</td>
                                    <td>$row[nama_cust]</td>
                                    <td>$row[alamat_cust]</td>
                                    <td>$row[telp_cust]</td>
                                    <td>$row[nik_cust]</td>
                                    <td style='text-align: center;'>
                                    <a href='aksi_edit.php?id_cust=$row[id_cust]'><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button></a>
									<a href='aksi_hapus.php?id_cust=$row[id_cust]'><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button></a>
                                    </td>";
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
				<div></div>
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