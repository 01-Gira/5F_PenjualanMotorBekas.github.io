<?php
include '../koneksi.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lihat User</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
	<main class="content">
		<?php include 'menu-content.php'; ?>
		<section class="views">
			<div class="search">
				<input class="search-data" placeholder="Cari"></input>
			</div>
			<div class="view-table">
				<div class="welcome">
					<h1>Lihat User</h1>
					<hr />
				</div>
				<div class="table">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>ID USER</th>
								<th>Nama</th>
								<th>Password</th>
								<th>Hak Akses</th>
								<th>Tanggal Dibuat</th>
								<th>Manager</th>
								<th>Update | Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = mysqli_query($koneksi, "SELECT * FROM user ");
							$no = 1;
							while ($r = mysqli_fetch_array($sql)) {
								echo "<tr>
										<td>$no</td>	
										<td>$r[id_user]</td>				
										<td>$r[nama]</td>				
										<td>$r[password]</td>				
										<td>$r[hak_akses]</td>				
										<td>$r[create_date]</td>
										<td>$r[manager]</td>								
										<td style='text-align: center;'>
                                        <a href='aksi_edit_user.php?id_user=$r[id_user]'><button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button></a>
                                        <a href='aksi_hapus_user.php?id_user=$r[id_user]'><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button></a>
						            </td>";
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
	<script src="../bootstrap.bundle.min.js"></script>
</body>

</html>