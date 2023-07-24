<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idBaranghilang = $_GET['id_baranghilang'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_baranghilang WHERE id_baranghilang = '$idBaranghilang'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '$admin_url'+'asset/adminweb.php?module=baranghilang';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'asset/adminweb.php?module=baranghilang';
        </script>";
    }
}
