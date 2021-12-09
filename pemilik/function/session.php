<?php
    require '../koneksi.php';
    require '../cek_login.php';
// Ambil Session
    session_start();
    $id_user = $_SESSION['id_user'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $rowSession = mysqli_fetch_array($query);
    $_SESSION['nama'] = $rowSession['nama'];
    $_SESSION['hak_akses'] = $rowSession['hak_akses'];
// Cek Session
    if (!isset($_SESSION["Pemilik"])){
        echo"<script>alert('Silahkan Login Terlebih Dahulu')
                    window.location.replace('../index.php')</script>";
        exit;
    }
    else{
    }
?>