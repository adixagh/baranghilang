<?php
session_start();

$page = "baranghilang";


// $id_member = $_SESSION['id_member'];
include "lib/koneksi.php";
include "lib/config.php";
include "template/header.php";
include "template/sidebar.php";
include "pages/baranghilang.php";
include "template/footer.php";
