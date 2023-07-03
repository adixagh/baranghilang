<?php
session_start();
$data = $_GET['id'];
if ($data == NULL) {
    header('Location: http://localhost/barangtemuan/');
}
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "template/sidebart.php";
include "pages/kategorit.php";
include "template/footer.php";