<?php
include '../koneksi.php';
require 'function/session.php';
error_reporting(0);
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
		<?php include'menu-content.php';?>
		<section class="views">
			<div class="view-table">
				<div class="welcome">
					<h1>Transaksi</h1>
					<hr/>
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