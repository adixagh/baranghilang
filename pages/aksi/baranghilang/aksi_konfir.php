<?php
session_start();
// if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
//     echo "<center>Anda harus login terlebih dahulu<br>";
//     echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
// } else {

include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$idBaranghilang = $_GET['id_baranghilang'];

$QueryHapus = mysqli_query($koneksi, "UPDATE tbl_baranghilang SET 
status = 'Selesai' WHERE id_baranghilang = '$idBaranghilang'");
if ($QueryHapus) {
    echo "
        <script>
            alert('Data berhasil dikonfirmasi');
            window.location = '$base_url'+'listbaranghilang.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data gagal dikonfirmasi');
            window.location = '$base_url'+'listbaranghilang.php';
        </script>";
}
