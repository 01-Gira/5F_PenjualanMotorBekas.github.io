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
				</div>
				<div></div>
			</div>
		</section>
		<section class="views">
			<div class="view-table">
				<div class="welcome">
					<h1>Daftar Barang</h1>
					<hr />
				</div>
				<div>
					<div class="galeri">
						<?php
						$data = mysqli_query($koneksi, "SELECT * FROM identitas_motor order by id_motor desc LIMIT 4");
						while ($row = mysqli_fetch_array($data)) {
						?>
							<div class="item-galeri">
								<div class="img-item">
									<img src="../gambarMotor/<?php echo "$row[gambar_motor]"; ?>">
								</div>
								<div class="nama-item">
									<h5><?php echo "$row[Merk]"; ?></h5>
									<h4><?php echo "$row[Model]"; ?></h4>
									<h5>Rp.<?php echo number_format($row['harga_jual']); ?></h5>
								</div>
							</div>
						<?php } ?>

					</div>
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