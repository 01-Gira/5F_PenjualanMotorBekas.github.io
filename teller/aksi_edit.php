<?php
include '../koneksi.php';
error_reporting(0);

$id_transaksi = $_GET['id_transaksi'];
$sql = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
$r = mysqli_fetch_array($sql);
if (isset($_POST['update'])) {
    $tgl_transaksi = $_POST["tgl_transaksi"];
    $id_motor = $_POST["id_motor"];
    $harga_jual = $_POST["harga_jual"];
    $harga_jual_real = $_POST["harga_jual_real"];
    $query = mysqli_query($koneksi, "UPDATE transaksi SET tgl_transaksi='$tgl_transaksi', id_motor='$id_motor', harga_jual='$harga_jual', harga_jual_real='$harga_jual_real' WHERE id_transaksi='$id_transaksi'") or die($koneksi);
    if ($query) {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('lihat-user.php')</script>";
    } else {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('lihat-user.php')</script>";
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
                                <td class="nama-data">ID User</td>
                                <td><input type="text" value=<?php echo $r['id_user']; ?> name="id_user" class="input-data" disabled></td>
                                <td class="nama-data">Hak Akses</td>
                                <td><select name="hak_akses" value=<?php echo $r['hak_akses']; ?> class="input-data" required>
                                        <option value="Teknisi">Teknisi</option>
                                        <option value="Teller">Teller</option>
                                        <option value="Customer">Customer</option>
                                        <option value="Pemilik">Pemilik</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Nama </td>
                                <td><input type="text" value=<?php echo $r['nama']; ?> name="nama" class="input-data" required></td>
                                <td class="nama-data">Manager</td>
                                <td><input type="text" value=<?php echo $r['manager']; ?> name="manager" class="input-data" required></td>
                            </tr>
                            <tr>
                                <td class="nama-data">Password</td>
                                <td><input type="password" value=<?php echo $r['password']; ?> name="password" class="input-data" required></td>

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