<?php
session_start();
$data = $_GET['id'];
if ($data == NULL) {
    header('Location: http://localhost/baranghilang/');
}
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "template/sidebar.php";
include "pages/kategori.php";
include "template/footer.php";