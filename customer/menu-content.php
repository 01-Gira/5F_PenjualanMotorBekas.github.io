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
        <div class="menu-item active"><i class="fa fa-lg fa-home"></i>Dashboard</div>
    </a>

    <a href="../logout.php" onclick="return confirm('Apakah anda yakin ingin keluar?')">
        <div class="menu-item logout"><i class="fa fa-lg fa-sign-out"></i>Keluar</div>
    </a>
</section>