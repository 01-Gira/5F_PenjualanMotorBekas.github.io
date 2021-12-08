<?php
include '../koneksi.php';
require '/function/session.php';
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
		<section class="all-menu">			
			<div class="profile">
				<div class="profile-img">
					<div class="img">
						<img src="IMG20210222150136-removebg-preview.png">
					</div>	
				</div>
				<div class="profile-user">
					<h4><?php echo $_SESSION['nama']; ?></h4>
					
				</div>	
			</div>	
			<a href="home.html"><div class="menu-item"><i class="fa fa-lg fa-home"></i>Dashboard</div></a>
			<a href="#"><div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#motor" aria-controls="contents-collapse"><i class="fa fa-lg fa-motorcycle"></i>Identitas Motor</div></a>
			<div>
				<ul class="collapse" id="motor">		
					<a href="buat-identitas-motor.php"><li class="menu-item rounded"><i class="fa fa-lg fa-plus"></i>Buat Identitas Motor</li></a>
					<a href="index.php"><li class="menu-item rounded"><i class="fa fa-lg fa-list"></i>Lihat Identitas Motor</li></a>	
				</ul>
			</div>
			<a href="#"><div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#user" aria-controls="contents-collapse"><i class="fa fa-lg fa-user"></i>User</div></a>
			<div>
				<ul class="collapse" id="user">		
					<a href="buat-user.html"><li class="menu-item rounded"><i class="fa fa-lg fa-user-plus"></i>Buat User</li></a>
					<a href="lihat-user.html"><li class="menu-item rounded"><i class="fa fa-lg fa-list"></i>Lihat User</li></a>	
				</ul>
			</div>	
			<a href="#"><div class="menu-item active"><i class="fa fa-lg fa-dollar"></i>Transaksi</div></a>
			<a href="../index.php"><div class="menu-item logout"><i class="fa fa-lg fa-sign-out"></i>Keluar</div></a>	
		</section>
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