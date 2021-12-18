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
                    <h2 style="text-align: center; margin-bottom: 40px">Tabel Identitas Motor</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nomor Registrasi</th>
                                <th>Gambar Motor</th>
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
                                <th>Tanggal Beli</th>
                                <th>Harga Beli</th>
                                <th>Tanggal Jual</th>
                                <th>Harga Jual</th>
                                <th>Update - Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor order by NoRegistrasi desc");
                            $no = 1;
                            while ($r = mysqli_fetch_array($sql)) {
                                echo "<tr><td>$no</td>
									<td>$r[NoRegistrasi]</td>
                                    <td>$r[gambarmotor]</td>
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
									<td>$r[masaberlakuSTNK]</td>
                                    <td>$r[tgl_beli]</td>
                                    <td>Rp.$r[harga_beli]</td>
                                    <td>$r[tgl_jual]</td>
                                    <td>Rp.$r[harga_jual]</td>
									<td style='text-align: center;'>
                                        <a href='aksi_edit.php?id_motor=$r[id_motor]'><button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button></a>
                                        <a href='aksi_hapus.php?id_motor=$r[id_motor]'><button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button></a>
						            </td>";

                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
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
                                        <button style='background-color: transparent; outline: none; border: none;display: inline'><i class='fa fa-2x fa-pencil' style='color: blue'></i></button>
                                        <button style='background-color: transparent; outline: none; border: none; display: inline'><i class='fa fa-2x fa-trash-o' style='color: red'></i></button>
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
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>