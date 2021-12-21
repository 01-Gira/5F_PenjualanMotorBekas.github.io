<?php
include '../koneksi.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Identitas Motor</title>
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
                    <h1>Lihat Identitas Motor</h1>
                    <hr />
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Model</th>
                                <th>Type</th>
                                <th>Merk</th>
                                <th>Nama Pemilik</th>
                                <th>Alamat</th>
                                <th>Tahun Pembuatan</th>
                                <th>Harga Jual</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor order by NoRegistrasi desc");
                            $no = 1;
                            while ($r = mysqli_fetch_array($sql)) {
                                echo "<tr><td>$no</td>
                                    <td>$r[Model]</td>
                                    <td>$r[Type_Motor]</td>
                                    <td>$r[Merk]</td>
                                	<td>$r[NamaPemilik]</td>
                                    <td>$r[Alamat]</td>
									<td>$r[TahunPembuatan]</td>
                                    <td>$r[harga_jual]</td>
                                    <td style='text-align: center;'>
                                        <a href='detail-motor.php?id_motor=$r[id_motor]'><button type='button' class='btn btn-primary'>Detail</button></a>
                                        
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