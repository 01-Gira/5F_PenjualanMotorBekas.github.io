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
    <title>Customer</title>
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
            <a href="#">
                <div class="menu-item active"><i class="fa fa-lg fa-home"></i>Dashboard</div>
            </a>
            <a href="#">
                <div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#user" aria-controls="contents-collapse"><i class="fa fa-lg fa-user"></i>User</div>
            </a>
            <a href="transaksi.html">
                <div class="menu-item"><i class="fa fa-lg fa-dollar"></i>Transaksi</div>
            </a>
            <a href="../index.php">
                <div class="menu-item logout"><i class="fa fa-lg fa-sign-out"></i>Keluar</div>
            </a>
        </section>
        <section class="views">
        <body>
    <main class="content">
        <?php include'menu-content.php';?>
        <section class="views">
            <div class="search">
                <input class="search-data" placeholder="Cari"></input>
            </div>
            <div class="view-table">
                <div class="welcome">
                    <h1>Lihat Identitas Motor</h1>
                    <hr />
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Registrasi</th>
                                <th>Nama Pemilik</th>
                                <th>Alamat</th>
                                <th>Nomor Rangka</th>
                                <th>Nomor Mesin</th>
                                <th>Plat Nomor</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Model</th>
                                <th>Tahun Pembuatan</th>
                                <th>Isi Silinder</th>
                                <th>Bahan Bakar</th>
                                <th>Warna TNKB</th>
                                <th>Tahun Registrasi</th>
                                <th>Nomor BPKB</th>
                                <th>Kode Lokasi</th>
                                <th>Masa Berlaku STNK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor order by NoRegistrasi desc");
                            $no = 1;
                            while ($r = mysqli_fetch_array($sql)) {
                                echo "<tr><td>$no</td>
									<td>$r[NoRegistrasi]</td>
									<td>$r[NamaPemilik]</td>
									<td>$r[Alamat]</td>
									<td>$r[NoRangka]</td>
									<td>$r[NoMesin]</td>
									<td>$r[PlatNO]</td>
									<td>$r[Merk]</td>
									<td>$r[Type_Motor]</td>
									<td>$r[Model]</td>
									<td>$r[TahunPembuatan]</td>
									<td>$r[IsiSilinder]</td>
									<td>$r[BahanBakar]</td>
									<td>$r[WarnaTNKB]</td>
									<td>$r[TahunRegistrasi]</td>
									<td>$r[NoBPKB]</td>
									<td>$r[KodeLokasi]</td>
									<td>$r[MasaBerlakuSTNK]</td>";
                                    
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