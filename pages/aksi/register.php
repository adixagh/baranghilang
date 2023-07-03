<?php
session_start();
include "../../lib/koneksi.php";
include "../../lib/config.php";

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = ($_POST['password']);
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_member VALUES ('', '$nama', '$username', '$password', '$alamat', '$email', '$no_hp','Y')");
if ($QuerySimpan) {
    echo "<script>alert('Regis Berhasil'); window.location = '$base_url'+'index.php';</script>";
} else {
    echo "<script>alert('Regis Tidak Berhasil'); window.location = '$base_url'+'index.php';</script>";
}
