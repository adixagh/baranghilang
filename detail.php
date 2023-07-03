<?php
session_start();
if (!empty($_SESSION['user_nama'])) {
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "pages/detail.php";
include "template/footer.php";
} else {
    echo "<script>window.location='login.php'</script>";
}