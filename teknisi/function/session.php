<?php
    require '../koneksi.php';
    require '../cek_login.php';
// Ambil Session
    session_start();
    $id_user = $_SESSION['id_user'];
    $querySession = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $rowSession = mysqli_fetch_array($querySession);
    $_SESSION['nama'] = $rowSession['nama'];
// Cek Session
    if (!isset($_SESSION["Teknisi"])){
        echo"<script>alert('Silahkan Login Terlebih Dahulu')
                    window.location.replace('../index.php')</script>";
        exit;
    }
    else{
    }
?>