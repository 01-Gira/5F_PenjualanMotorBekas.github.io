<?php
include '../koneksi.php';

$id_motor = $_GET['id_motor'];
$sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor WHERE id_motor='$id_motor'");
$r = mysqli_fetch_array($sql);
if (isset($_POST['tambah'])) {
    $id_transaksi = $_POST["id_transaksi"];
    $id_cust = $_POST["id_cust"];
    $nama_cust = $_POST["nama_cust"];
    $nik_cust = $_POST["nik_cust"];
    $alamat_cust = $_POST["alamat_cust"];
    $telp_cust = $_POST["telp_cust"];
    $id_motor = $_POST["id_motor"];
    $harga_jual = $_POST["harga_jual"];
    $harga_jual_real = $_POST["harga_jual_real"];
    $querybuatCust = mysqli_query($koneksi, "INSERT INTO customer VALUES ('$id_cust','$nama_cust','$alamat_cust','$telp_cust','$nik_cust')") or die(mysqli_error($koneksi));
    $queryTsk = mysqli_query($koneksi, "INSERT INTO transaksi VALUES ('$id_transaksi',NOW(),'$id_cust','$id_motor','$harga_jual','$harga_jual_real')") or die(mysqli_error($koneksi));
    if ($queryTsk) {
        echo "<script>alert('Data Berhasil dimasukan!');
        window.location.replace('transaksi.php')</script>";
    } else {
        echo "<script>alert('Data Gagal dimasukan!');
        window.location.replace('transaksi.php')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Transaksi</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
    <main class="content">
        <?php include 'menu-content.php'; ?>
        <section class="views">
            <div class="view-table">
                <div class="welcome">
                    <h1>Buat Transaksi</h1>
                    <hr />
                </div>
                <div class="table">
                    <form class="form-input" method="POST">
                        <table class="table-input">
                            <tr>
                                <td class="nama-data">ID Transaksi</td>
                                <td><input type="text" name="id_transaksi" class="input-data" required></td>
                                <td class="nama-data">ID Customer</td>
                                <td><input type="text" name="id_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Id Motor</td>
                                <td><input type="text" name="id_motor" value="<?php echo($r['id_motor']) ?>" class="input-data" readonly></td>
                                <td class="nama-data">Nama Customer</td>
                                <td><input type="text" name="nama_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Harga Jual Asli</td>
                                <td><input type="" name="harga_jual_real" value="<?php echo ($r['harga_jual']) ?>" class="input-data" readonly></td>
                                <td class="nama-data">Alamat Customer</td>
                                <td><input type="text" name="alamat_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Harga Jual</td>
                                <td><input type="number" name="harga_jual" placeholder="Rp." class="input-data" required></td>
                                <td class="nama-data">No. Telepon Customer</td>
                                <td><input type="number" name="telp_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-datas"></td>
                                <td input type="hidden"></td>
                                <td class="nama-data">NIK Customer</td>
                                <td><input type="varchar" name="nik_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-datas"></td>
                                <td input type="hidden"></td>
                                <td class="nama-data">Tanggal Transaksi</td>
                                <td><input type="date" name="tgl_transaksi" class="input-data" required></td>
                            </tr>
                        </table>
                        <button type="submit" name="tambah" class="btn" onclick="return confirm('Apakah anda yakin ingin membuat data transaksi')">Simpan</button>
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