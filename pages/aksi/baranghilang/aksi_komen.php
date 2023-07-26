<?php
session_start();
// if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
//     echo "<center>Anda harus login terlebih dahulu<br>";
//     echo "<a href=../login.php>Klik disini untuk Login</a></center>";
// } else {
include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_member = $_POST['id_member'];
$isiComment = $_POST['comment'];
$tanggal = $_POST['dateNow'];
$idBaranghilang = $_GET['id_baranghilang'];

date_default_timezone_set('Asia/Jakarta');

$ntanggal = date("d F Y H:i:s", strtotime($tanggal));
// var_dump($tanggal);

$QueryMember = mysqli_query($koneksi, "SELECT * FROM tbl_member WHERE id_member = $id_member");
$showMember = mysqli_fetch_array($QueryMember);
$namaMember = $showMember['nama'];

$QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_komen (id_baranghilang, id_member, nama_member, isi_komen,tanggal) VALUES ($idBaranghilang,$id_member,'$namaMember','$isiComment','$ntanggal')");

if ($QuerySimpan) {
    echo "
                    <script>
                        alert('Berhasil Comment');
                        window.location = '$base_url'+'detail.php?id_baranghilang=$idBaranghilang';
                    </script>";
} else {
    echo "
                    <script>
                        alert('Gagal Comment');
                        window.location = '$base_url'+'detail.php?id_baranghilang=$idBaranghilang';
                    </script>";
}
