<?php

include '../koneksi.php';
require 'function/session.php';
error_reporting(0);

?>

<section class="all-menu">
    <div class="profile">
        <div class="profile-img">
            <div class="img">
                <img src="../assets/brand/user.png">
            </div>
        </div>
        <div class="profile-user">
            <h2><?php echo $_SESSION['nama']; ?></h2>
            <h4><?php echo $_SESSION['hak_akses']; ?></h4>
        </div>
    </div>
    <a href="home.php">
        <div class="menu-item"><i class="fa fa-lg fa-home"></i>Dashboard</div>
    </a>
    <a href="identitas_motor.php">
        <div class="menu-item"><i class="fa fa-lg fa-motorcycle"></i>Lihat Identitas Motor</div>
    </a>
    <a href="#">
        <div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#transaksi" aria-controls="contents-collapse"><i class="fa fa-lg fa-dollar"></i>Transaksi</div>
    </a>
    <div>
        <ul class="collapse" id="transaksi">
            <a href="daftar_barang.php">
                <li class="menu-item rounded"><i class="fa fa-lg fa-plus"></i>Daftar Barang</li>
            </a>
            <a href="transaksi.php">
                <li class="menu-item rounded"><i class="fa fa-lg fa-list"></i>Transaksi Penjualan</li>
            </a>
        </ul>
    </div>
    <a href="../logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">
        <div class="menu-item logout"><i class="fa fa-lg fa-sign-out"></i>Keluar</div>
    </a>
</section>