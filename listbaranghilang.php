<?php
session_start();
// $id_member = $_SESSION['id_member'];
if (!empty($_SESSION['user_nama'])) {
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "template/sidebar.php";
include "pages/listbaranghilang.php";
include "template/footer.php";
} else {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=login.php>Klik disini untuk Login</a></center>";
   
}