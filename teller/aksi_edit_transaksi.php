<?php
include '../koneksi.php';
error_reporting(0);

$id_transaksi = $_GET['id_transaksi'];
$sql = mysqli_query($koneksi, "SELECT * FROM transaksi where id_transaksi = '$id_transaksi'");
$r = mysqli_fetch_array($sql);
if (isset($_POST['update'])) {
    $id_transaksi = $_POST["id_transaksi"];
    $id_cust = $_POST["id_cust"];
    $nama_cust = $_POST["nama_cust"];
    $alamat_cust = $_POST["alamat_cust"];
    $telp_cust = $_POST["telp_cust"];
    $nik_cust = $_POST["nik_cust"];
    $harga_Jual = $_POST["harga_Jual"];
    $queryEditTrsk = mysqli_query($koneksi, "UPDATE transaksi SET harga_Jual='$harga_Jual' WHERE id_transaksi='$id_transaksi'") or die($koneksi);
    if($queryEditTrsk){
        $queryEditCust = mysqli_query($koneksi, "UPDATE customer SET nama_cust='$nama_cust', alamat_cust='$alamat_cust', telp_cust='$telp_cust', nik_cust='$nik_cust' WHERE id_cust='$id_cust'") or die($koneksi);
    if ($queryEditCust){
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('transaksi.php')</script>";
    } else {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('transaksi.php')</script>";
    }
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
    <main class="content">
        <?php include 'menu-content.php'; ?>
        <section class="views">
            <div class="view-table">
                <div class="welcome">
                    <h1>Edit Transaksi</h1>
                    <hr />
                </div>
                <div class="table">
                    <form class="form-input" method="POST">
                        <table class="table-input">
                        <tr>
                                <td class="nama-data">ID Transaksi</td>
                                <td><input type="text" name="id_transaksi" class="input-data" value="<?php echo $r['id_transaksi'] ?>" readonly></td>
                                <td class="nama-data">ID Customer</td>
                                <td><input type="text" name="id_cust" class="input-data" value="<?php echo $r['Id_cust'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Id Motor</td>
                                <td><input type="text" name="id_motor" value="<?php echo($r['Id_Kendaraan']) ?>" class="input-data" readonly></td>
                                <td class="nama-data">Nama Customer</td>
                                <td><input type="text" name="nama_cust" value="<?php echo($r['nama_cust']) ?>"  class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Harga Jual Asli</td>
                                <td><input type="" name="harga_jual_real" value="<?php echo ($r['harga_jual_real']) ?>" class="input-data" readonly></td>
                                <td class="nama-data">Alamat Customer</td>
                                <td><input type="text" name="alamat_cust" value="<?php echo($r['alamat_cust']) ?>" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Harga Jual</td>
                                <td><input type="number" name="harga_jual" placeholder="Rp." value="<?php echo $r['harga_jual'] ?>" class="input-data" required></td>
                                <td class="nama-data">No. Telepon Customer</td>
                                <td><input type="number" name="telp_cust" value="<?php echo $r['telp_cust'] ?>" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-datas"></td>
                                <td input type="hidden"></td>
                                <td class="nama-data">NIK Customer</td>
                                <td><input type="varchar" name="nik_cust" value="<?php echo $r['nik_cust'] ?>" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-datas"></td>
                                <td input type="hidden"></td>
                                <td class="nama-data">Tanggal Transaksi</td>
                                <td><input type="date" name="tgl_transaksi" value="<?php echo $r['tgl_transaksi'] ?>" class="input-data" readonly></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn" name="update" onclick="return confirm('Apakah anda yakin ingin mengupdate data?')">Simpan</button>
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