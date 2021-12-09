<?php
include '../koneksi.php';
require '/function/session.php';
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
            <a href="#">
                <div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#motor" aria-controls="contents-collapse"><i class="fa fa-lg fa-motorcycle"></i>Identitas Motor</div>
            </a>
            <div>
                <ul class="collapse" id="motor">
                    <a href="buat-identitas-motor.php">
                        <li class="menu-item rounded"><i class="fa fa-lg fa-plus"></i>Buat Identitas Motor</li>
                    </a>
                    <a href="menu-utama.php">
                        <li class="menu-item rounded active"><i class="fa fa-lg fa-list"></i>Lihat Identitas Motor</li>
                    </a>
                </ul>
            </div>
            <a href="#">
                <div class="menu-item collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#user" aria-controls="contents-collapse"><i class="fa fa-lg fa-user"></i>User</div>
            </a>
            <div>
                <ul class="collapse" id="user">
                    <a href="buat-user.php">
                        <li class="menu-item rounded"><i class="fa fa-lg fa-user-plus"></i>Buat User</li>
                    </a>
                    <a href="lihat-user.php">
                        <li class="menu-item rounded"><i class="fa fa-lg fa-list"></i>Lihat User</li>
                    </a>
                </ul>
            </div>
            <a href="transaksi.php">
                <div class="menu-item"><i class="fa fa-lg fa-dollar"></i>Transaksi</div>
            </a>
            <a href="../logout.php">
                <div class="menu-item logout"><i class="fa fa-lg fa-sign-out"></i>Keluar</div>
            </a>
</section>