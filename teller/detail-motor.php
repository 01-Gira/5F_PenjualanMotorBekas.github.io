<?php
include '../koneksi.php';
error_reporting(0);

$id_motor = $_GET['id_motor'];
$sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor WHERE id_motor='$id_motor'");
$r = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Identitas Motor</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

</head>

<body>
    <main class="content">
        <?php include 'menu-content.php'; ?>
        <section class="views">
            <div class="welcome">
                <h1>Detail Motor</h1>
                <hr />

            </div>
            <div class="view-table">
                <div class="table">
                    <form class="form-input" method="POST" enctype="multipart/form-data">
                        <table class="table-input">

                            <tr>
                                <div class="text-center mb-3">
                                    <img src="../gambarMotor/<?php echo $r['gambar_motor'] ?>" style="height: 500px;">
                                </div>
                                <td class="nama-data">
                                    <label for="">No Registrasi</label>
                                </td>
                                <td>
                                    <input type="text" value=<?php echo "$r[NoRegistrasi]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Model</label>
                                </td>
                                <td>
                                    <input type="text" name="Model" value=<?php echo "$r[Model]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Nama Pemilik</label>
                                </td>
                                <td>
                                    <input type="text" name="NamaPemilik" value=<?php echo "$r[NamaPemilik]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Pembuatan</label>
                                </td>
                                <td>
                                    <input type="number" name="TahunPembuatan" value=<?php echo "$r[TahunPembuatan]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Alamat</label>
                                </td>
                                <td>
                                    <input type="text" name="Alamat" value=<?php echo "$r[Alamat]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Isi Silinder</label>
                                </td>
                                <td>
                                    <input type="text" name="IsiSilinder" value=<?php echo "$r[IsiSilinder]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Rangka</label>
                                </td>
                                <td>
                                    <input type="text" name="NoRangka" value=<?php echo "$r[NoRangka]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Bahan Bakar</label>
                                </td>
                                <td>
                                    <input type="text" name="BahanBakar" value=<?php echo "$r[BahanBakar]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Mesin</label>
                                </td>
                                <td>
                                    <input type="text" name="NoMesin" value=<?php echo "$r[NoMesin]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Warna TNKB</label>
                                </td>
                                <td>
                                    <input type="text" name="WarnaTNKB" value=<?php echo "$r[WarnaTNKB]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Plat Nomor</label>
                                </td>
                                <td>
                                    <input type="text" name="PlatNO" value=<?php echo "$r[PlatNO]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Registrasi</label>
                                </td>
                                <td>
                                    <input type="number" name="TahunRegistrasi" value=<?php echo "$r[TahunRegistrasi]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Masa Berlaku STNK</label>
                                </td>
                                <td>
                                    <input type="date" name="masaberlakuSTNK" value=<?php echo "$r[masaberlakuSTNK]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">No BPKB</label>
                                </td>
                                <td>
                                    <input type="text" name="NoBPKB" value=<?php echo "$r[NoBPKB]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Merk</label>
                                </td>
                                <td>
                                    <input type="text" name="Merk" value=<?php echo "$r[Merk]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Kode Lokasi</label>
                                </td>
                                <td>
                                    <input type="text" name="KodeLokasi" value=<?php echo "$r[KodeLokasi]" ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Tanggal Beli</label>
                                </td>
                                <td>
                                    <input type="date" name="tgl_beli" value=<?php echo "$r[tgl_beli]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Harga Beli</label>
                                </td>
                                <td>
                                    <input type="text" value=Rp.<?php echo number_format($r['harga_beli']) ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Tanggal Jual</label>
                                </td>
                                <td>
                                    <input type="date" name="tgl_jual" value=<?php echo "$r[tgl_jual]" ?> class="input-data" readonly>
                                </td>
                                <td class="nama-data">
                                    <label for="">Harga Jual</label>
                                </td>
                                <td>
                                    <input type="text" value=Rp.<?php echo number_format($r['harga_jual']) ?> class="input-data" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Type</label>
                                </td>
                                <td>
                                    <input type="text" name="Type_Motor" value=<?php echo "$r[Type_Motor]" ?> class="input-data" readonly>
                                </td>

                            </tr>
                        </table>

                    </form>
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