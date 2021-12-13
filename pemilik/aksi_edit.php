<?php
include '../koneksi.php';
error_reporting(0);

$id_motor = $_GET['id_motor'];
$sql = mysqli_query($koneksi, "SELECT * FROM identitas_motor WHERE id_motor='$id_motor'");
$r = mysqli_fetch_array($sql);
if (isset($_POST['edit'])) {
    $NoRegistrasi = $_POST['NoRegistrasi'];
    $NamaPemilik = $_POST['NamaPemilik'];
    $Alamat = $_POST['Alamat'];
    $NoRangka = $_POST['NoRangka'];
    $NoMesin = $_POST['NoMesin'];
    $PlatNO = $_POST['PlatNO'];
    $Merk = $_POST['Merk'];
    $Type_Motor = $_POST['Type_Motor'];
    $Model = $_POST['Model'];
    $TahunPembuatan = $_POST['TahunPembuatan'];
    $IsiSilinder = $_POST['IsiSilinder'];
    $BahanBakar = $_POST['BahanBakar'];
    $WarnaTNKB = $_POST['WarnaTNKB'];
    $TahunRegistrasi = $_POST['TahunRegistrasi'];
    $NoBPKB = $_POST['NoBPKB'];
    $KodeLokasi = $_POST['KodeLokasi'];
    $MasaBerlakuSTNK = $_POST['MasaBerlakuSTNK'];
    $query = mysqli_query($koneksi, "UPDATE identitas_motor SET NoRegistrasi='$NoRegistrasi', NamaPemilik='$NamaPemilik', Alamat='$Alamat', NoRangka='$NoRangka', NoRangka='$NoMesin', PlatNO='$PlatNO', Merk='$Merk', Type_Motor='$Type_Motor', Model='$Model', TahunPembuatan='$TahunPembuatan', IsiSilinder='$IsiSilinder', BahanBakar='$BahanBakar', WarnaTNKB='$WarnaTNKB', TahunRegistrasi='$TahunRegistrasi', NoBPKB='$NoBPKB', KodeLokasi='$KodeLokasi', MasaBerlakuSTNK='$MasaBerlakuSTNK' WHERE id_motor='$id_motor'") or die($conn);
    if ($query) {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('menu-utama.php')</script>";
    } else {
        echo "<script>alert('Data Berhasil diupdate!');
		window.location.replace('menu-utama.php')</script>";
    }
}

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
                <h1>Edit Identitas Motor</h1>
                <hr />
            </div>
            <div class="view-table">
                <div class="table">
                    <form class="form-input" method="POST">
                        <table class="table-input">
                            <tr>
                                <td class="nama-data">
                                    <label for="">ID</label>
                                </td>
                                <td>
                                    <input type="text" value=<?php echo $r['id_motor']; ?> class="input-data" disabled>
                                </td>
                                <td class="nama-data">
                                    <label for="">Model</label>
                                </td>
                                <td>
                                    <input type="text" name="Model" value=<?php echo $r['Model']; ?> class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Registrasi</label>
                                </td>
                                <td>
                                    <input type="text" name="NoRegistrasi" value=<?php echo $r['NoRegistrasi']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Pembuatan</label>
                                </td>
                                <td>
                                    <input type="year" name="TahunPembuatan" value=<?php echo $r['TahunPembuatan']; ?> class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Nama Pemilik</label>
                                </td>
                                <td>
                                    <input type="text" name="NamaPemilik" value=<?php echo $r['NamaPemilik']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Isi Silinder</label>
                                </td>
                                <td>
                                    <select name="IsiSilinder" class="input-data" value=<?php echo $r['IsiSilinder']; ?> required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Alamat</label>
                                </td>
                                <td>
                                    <input type="text" name="Alamat" value="<?php echo $r['Alamat']; ?>" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Bahan Bakar</label>
                                </td>
                                <td>
                                    <select name="BahanBakar" value=<?php echo $r['BahanBakar']; ?> class="input-data" required>
                                        <option value="Premium">Premium</option>
                                        <option value="Pertalite">Pertalite</option>
                                        <option value="Shell Super">Shell Super</option>
                                        <option value="Shell V-Power">Shell V-Power</option>
                                        <option Value="Performance 92">Performance 92</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Rangka</label>
                                </td>
                                <td>
                                    <input type="text" name="NoRangka" value="<?php echo $r['NoRangka']; ?>" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Warna TNKB</label>
                                </td>
                                <td>
                                    <select name="WarnaTNKB" value=<?php echo $r['WarnaTNKB']; ?> class="input-data" required>
                                        <option value="Hitam">Hitam</option>
                                        <option value="Putih">Putih</option>
                                        <option value="Biru">Biru</option>
                                        <option value="Merah">Merah</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Mesin</label>
                                </td>
                                <td>
                                    <input type="text" name="NoMesin" value=<?php echo $r['NoMesin']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Registrasi</label>
                                </td>
                                <td>
                                    <input type="text" name="TahunRegistrasi" value=<?php echo $r['TahunRegistrasi']; ?> class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Plat Nomor</label>
                                </td>
                                <td>
                                    <input type="text" name="PlatNO" value=<?php echo $r['PlatNO']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">No BPKB</label>
                                </td>
                                <td>
                                    <input type="text" name="NoBPKB" value=<?php echo $r['NoBPKB']; ?> class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Merk</label>
                                </td>
                                <td>
                                    <input type="text" name="Merk" value=<?php echo $r['Merk']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Kode Lokasi</label>
                                </td>
                                <td>
                                    <input type="text" name="KodeLokasi" value=<?php echo $r['KodeLokasi']; ?> class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Type</label>
                                </td>
                                <td>
                                    <input type="text" name="Type_Motor" value=<?php echo $r['Type_Motor']; ?> class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Masa Berlaku STNK</label>
                                </td>
                                <td>
                                    <input type="date" name="MasaBerlakuSTNK" value=<?php echo $r['MasaBerlakuSTNK']; ?> class="input-data" required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn" name="edit" onclick="return confirm('Apakah anda yakin ingin mengupdate perubahan data?')">Simpan</button>
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