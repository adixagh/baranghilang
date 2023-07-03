<?php
session_start();
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$mulai = date('d/m/Y', strtotime($_POST['mulai']));
$selesai = date('d/m/Y', strtotime($_POST['selesai']));
?>

<?php
header("Content-type: application/octet-stream");
header("Pragma: no-cache");
header("Expires: 0");
header("Content-Disposition: attachment; filename=Laporan Pemesanan.xls");
?>

<h4>Laporan data barang hilang</h4>

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Tempat Terakhir</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id = 1;
        $QueryDate = mysqli_query(
            $koneksi,
            "SELECT DISTINCT id_baranghilang, nama, deskripsi, tempat_terakhir, tanggal FROM tbl_baranghilang bh INNER JOIN tbl_kategori k ON bh.id_kategori = bh.id_kategori WHERE bh.tanggal BETWEEN '$mulai' AND '$selesai'"
        );
        while ($row = mysqli_fetch_array($QueryDate)) { ?>
            <tr>
                <td><?= $id; ?></td>
                <td>No-<?= $row['id_baranghilang']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['deskripsi']; ?></td>
                <td><?= $row['tempat_terakhir']; ?></td>
                <td><?= $row['tanggal']; ?></td>
            </tr>
        <?php $id++;
        } ?>
    </tbody>
</table>