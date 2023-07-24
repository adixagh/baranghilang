<?php
session_start();
$page = "barang_temuan";
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "template/sidebart.php";
include "pages/barangtemuan.php";
include "template/footer.php";
