<?php
session_start();
if (!empty($_SESSION['user_nama'])) {
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "pages/inputbarangtemuan.php";
include "template/footer.php";
} else {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=login.php>Klik disini untuk Login</a></center>";
   
}