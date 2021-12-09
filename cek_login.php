<?php
    require 'koneksi.php';
// SIGN IN
    if (isset($_POST["masuk"])){
        $id_user = $_POST["id_user"];
        $pass = $_POST["password"];
        $signin = "SELECT * FROM user WHERE id_user='$id_user' AND password='$pass'";
        $result = mysqli_query($koneksi, $signin);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                // Set Session
				session_start();
				$_SESSION['id_user'] = $_POST["id_user"];
                if ($row["hak_akses"]=="Pemilik"){
                    $_SESSION["Pemilik"] = true;
                    echo"<script>alert('Login Berhasil!')
                    window.location.replace('pemilik/home.php')</script>";
                }
                else if ($row["hak_akses"]=="Teller"){
                    $_SESSION["Teller"] = true;
                    echo"<script>alert('Login Berhasil!')
                    window.location.replace('teller/home.php')</script>";
                }
                else if ($row["hak_akses"]=="Teknisi"){
                    $_SESSION["Teknisi"] = true;
                    echo"<script>alert('Login Berhasil!')
                    window.location.replace('teknisi/home.php')</script>";
                }
                else{
                    $_SESSION["Customer"] = true;
                    echo"<script>alert('Login Berhasil!')
                    window.location.replace('customer/home.php')</script>";
                }
                exit;
            }
        }
        $error = true;
        if (isset($error)){
            echo"<script>alert('Login Gagal Silahkan Cek Kembali ID dan Password Anda!')
            window.location.replace('index.php')</script>";
        }
    }
?>