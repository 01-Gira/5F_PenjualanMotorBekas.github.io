<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $nama_cust = $_POST["nama_cust"];
    $alamat_cust = $_POST["alamat_cust"];
    $telp_cust = $_POST["telp_cust"];
    $nik_cust = $_POST["nik_cust"];
    $query = "INSERT INTO user VALUES ('','$nama_cust','$alamat_cust','$telp_cust','$nik_cust";
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
    <title>Buat User</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
    <main class="content">
        <?php include 'menu-content.php'; ?>
        <section class="views">
            <div class="view-table">
                <div class="welcome">
                    <h1>Buat User</h1>
                    <hr />
                </div>
                <div class="table">
                    <form class="form-input" method="POST">
                        <table class="table-input">
                            <tr>
                                <td class="nama-data">Nama Customer</td>
                                <td><input type="text" name="nama_cust" class="input-data" required></td>
                                <td class="nama-data">Alamat Customer</td>
                                <td><input type="text" name="alamat_cust" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Telepon Customer</td>
                                <td><input type="text" name="telp_cust" class="input-data" required></td>
                                <td class="nama-data">NIK Customer</td>
                                <td><input type="text" name="nik_cust" class="input-data" required></td>
                            </tr>

                        </table>
                        <button type="submit" name="tambah" class="btn" onclick="return confirm('Apakah anda yakin ingin membuat data costumer?')">Simpan</button>
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