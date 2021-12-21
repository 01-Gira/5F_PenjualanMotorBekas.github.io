<?php
include '../koneksi.php';


$data = mysqli_query($koneksi, "SELECT * FROM identitas_motor");
$id_motor = $_GET['id_motor'];
$row = mysqli_fetch_array($data);
if (isset($_POST['tambah'])) {

    $tgl_transaksi = $_POST["tgl_transaksi"];
    $id_motor = $_POST["id_motor"];
    $harga_jual = $_POST["harga_jual"];
    $harga_jual_real = $_POST["harga_jual_real"];
    $query = "INSERT INTO transaksi VALUES ('','$tgl_transaksi','$id_motor','$harga_jual','$harga_jual_real')";
    $simpan = mysqli_query($koneksi, $query) or die($koneksi);
    if ($simpan) {
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
                                <td class="nama-data">Tanggal Transaksi</td>
                                <td><input type="date" name="tgl_transaksi" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Id Motor</td>
                                <td><input type="text" name="id_motor" value=<?php echo $row['id_motor'] ?> class="input-data" readonly></td>
                                <td class="nama-data">Id Customer</td>
                                <td><select name="id_cust" class="input-data">
                                        <?php
                                        $tampil = mysqli_query($koneksi, " SELECT * FROM customer order by id_cust");
                                        if ($r['id_cust'] == 0) {
                                            echo "<option value=0 selected>- Pilih Nama Costumer -</option>";
                                        }
                                        while ($w = mysqli_fetch_array($tampil)) {
                                            if ($r['id_cust'] == $w['id_cust']) {
                                                echo "<option value=$w[id_cust] selected>$w[nama_cust]</option>";
                                            } else {
                                                echo "<option value=$w[id_cust]>$w[nama_cust]</option>";
                                            }
                                        }

                                        ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Harga Jual</td>
                                <td><input type="text" name="harga_jual" placeholder="Rp." class="input-data" required></td>
                                <td class="nama-data">Harga Jual Asli</td>
                                <td><input type="text" name="harga_jual_real" value=Rp.<?php echo number_format($row['harga_jual']) ?> class="input-data" readonly></td>
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