<?php
include '../koneksi.php';
error_reporting(0);

$id_cust = $_GET['id_cust'];
$sql = mysqli_query($koneksi, "SELECT * FROM costumer WHERE id_cust='$id_cust'");
$r = mysqli_fetch_array($sql);
if (isset($_POST['update'])) {
    $nama_cust = $_POST["nama_cust"];
    $alamat_cust = $_POST["alamat_cust"];
    $telp_cust = $_POST["telp_cust"];
    $nik_cust = $_POST["nik_cust"];
    $query = mysqli_query($koneksi, "UPDATE user SET nama_cust='$nama_cust', alamat_cust=MD5('$alamat_cust'), telp_cust='$telp_cust', nik_cust='$nik_cust' WHERE id_user='$id_user'") or die($koneksi);
    if ($query) {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('transaksi.php')</script>";
    } else {
        echo "<script>alert('Data Gagal diupdate!');
		window.location.replace('transaksi.php')</script>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
</head>

<body>
    <main class="content">
        <?php include 'menu-content.php'; ?>
        <section class="views">
            <div class="view-table">
                <div class="welcome">
                    <h1>Edit User</h1>
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