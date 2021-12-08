<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {

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
    $query = mysqli_query($koneksi, "INSERT INTO identitas_motor VALUES ('','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNO','$Merk','$Type_Motor','$Model','$TahunPembuatan','$IsiSilinder','$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK')") or die($koneksi);
    if ($query) {
        echo "<script>alert('Data Berhasil ditambahkan!');
		window.location.replace('menu-utama.php')</script>";
    } else {
        echo "<script>alert('Data Berhasil ditambahkan!');
		window.location.replace('menu-utama.php')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Identitas Motor</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

</head>

<body>
    <main class="content">
        <?php include'menu-content.php';?>
        <section class="views">
            <div class="welcome">
                <h1>Buat Identitas Motor</h1>
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
                                    <input type="text" value="ID AKAN DIBUAT SECARA AUTOMATIS" class="input-data" disabled>
                                </td>
                                <td class="nama-data">
                                    <label for="">Model</label>
                                </td>
                                <td>
                                    <input type="text" name="Model" class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">No Registrasi</label>
                                </td>
                                <td>
                                    <input type="text" name="NoRegistrasi" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Pembuatan</label>
                                </td>
                                <td>
                                    <input type="year" name="TahunPembuatan" class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Nama Pemilik</label>
                                </td>
                                <td>
                                    <input type="text" name="NamaPemilik" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Isi Silinder</label>
                                </td>
                                <td>
                                    <select name="IsiSilinder" class="input-data" required>
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
                                    <input type="text" name="Alamat" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Bahan Bakar</label>
                                </td>
                                <td>
                                    <select name="BahanBakar" class="input-data" required>
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
                                    <input type="text" name="NoRangka" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Warna TNKB</label>
                                </td>
                                <td>
                                    <select name="WarnaTNKB" class="input-data" required>
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
                                    <input type="text" name="NoMesin" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Tahun Registrasi</label>
                                </td>
                                <td>
                                    <input type="text" name="TahunRegistrasi" class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Plat Nomor</label>
                                </td>
                                <td>
                                    <input type="text" name="PlatNO" class="input-data" required> 
                                </td>
                                <td class="nama-data">
                                    <label for="">No BPKB</label>
                                </td>
                                <td>
                                    <input type="text" name="NoBPKB" class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Merk</label>
                                </td>
                                <td>
                                    <input type="text" name="Merk" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Kode Lokasi</label>
                                </td>
                                <td>
                                    <input type="text" name="KodeLokasi" class="input-data" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="nama-data">
                                    <label for="">Type</label>
                                </td>
                                <td>
                                    <input type="text" name="Type_Motor" class="input-data" required>
                                </td>
                                <td class="nama-data">
                                    <label for="">Masa Berlaku STNK</label>
                                </td>
                                <td>
                                    <input type="date" name="MasaBerlakuSTNK" class="input-data" required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn" name="tambah">Simpan</button>
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