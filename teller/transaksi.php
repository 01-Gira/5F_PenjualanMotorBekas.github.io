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
									<th>Detail  | Update | Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM transaksi t, identitas_motor im, customer c WHERE im.id_motor=t.Id_Kendaraan AND c.id_cust=t.Id_cust ORDER BY tgl_transaksi";
								$queryTransaksi = mysqli_query($koneksi, $sql);
								$no = 1;
								while ($r = mysqli_fetch_array($queryTransaksi)) {?>
										<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $r['id_transaksi']?></td>
										<td><?php echo $r['tgl_transaksi']?></td>
										<td><?php echo $r['Id_cust']?></td>
										<td><?php echo $r['Id_Kendaraan']?></td>
										<td>Rp.<?php echo number_format($r['harga_jual'], 0, ',', '.')?></td>
										<td>Rp.<?php echo number_format($r['harga_jual_real'], 0, ',', '.')?></td>
										<td style='text-align: center;'>
										<a href="aksi_liat_transaksi.php?id_transaksi=<?php echo $r['id_transaksi'] ?>"><button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-eye' style='color: blue'></i></button></a>
                                        <a href="aksi_edit_transaksi.php?id_transaksi=<?php echo $r['id_transaksi'] ?>"><button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button></a>
                                        <a href="aksi_hapus_transaksi.php?id_transaksi=<?php echo $r['id_transaksi'] ?>"><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button></a>
						            </td>
						            </tr>

									<?php $no++; ?>
								<?php } ?>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="table" style="margin-top: 50px">
					<h2 style="text-align: center; margin-bottom: 40px">Tabel Customer</h2>	
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>ID Customer</th>
								<th>Nama Customer</th>
								<th>Alamat Customer</th>
								<th>Telp Customer</th>
								<th>NIK Customer</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$data = mysqli_query($koneksi, "SELECT * FROM customer order by id_cust desc");
							$no = 1;
							while ($row = mysqli_fetch_array($data)) {?>

								 <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row['id_cust'] ?></td>
                                    <td><?php echo $row['nama_cust'] ?></td>
                                    <td><?php echo $row['alamat_cust'] ?></td>
                                    <td><?php echo $row['telp_cust'] ?></td>
                                    <td><?php echo $row['telp_cust'] ?></td>
                                    
                                    </tr>;
								<php $no++; ?>
							<?php } ?>
							
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