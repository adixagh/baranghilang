<?php
include "../../lib/koneksi.php";
include "../../lib/config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$QueryLogin = mysqli_query($koneksi, "SELECT * FROM tbl_member WHERE username = '$username' AND password = '$password' AND status = 'Y'");
$checkLogin = mysqli_num_rows($QueryLogin);
$valueLogin = mysqli_fetch_array($QueryLogin);

if ($checkLogin > 0) {
    session_start();
    $_SESSION['username'] = $valueLogin['username'];
    $_SESSION['user_nama'] = $valueLogin['nama'];
    $_SESSION['id_member'] = $valueLogin['id_member'];

    echo "<script>alert('Login Berhasil'); window.location = '$base_url'+'index.php';</script>";
} else {
    echo "<script>alert('Login Tidak Berhasil'); window.location = '$base_url'+'login.php';</script>";
}

