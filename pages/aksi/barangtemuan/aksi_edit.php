<?php
session_start();
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$namaGambar = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../../../admin/upload/" . $namaGambar;

$id_barangtemuan = $_POST['id_barangtemuan'];
$kategori = $_POST['kategori'];
$namaBarang = $_POST['namaBarang'];
$deskripsiBarang = $_POST['deskripsiBarang'];
$tempatTerakhir = $_POST['tempatTerakhir'];
$nomerTelepon = $_POST['nomerTelepon'];

if (empty($namaBarang)) {
    $error['namaBarang'] = 'Nama barang kosong';
} else {
    if (strlen($namaBarang) < 10) {
        $error['namaBarang'] = "Minimal 10 huruf";
    };
}
if (empty($deskripsiBarang)) {
    $error['deskripsiBarang'] = 'Deskripsi produk kosong';
} else {
    if (strlen($deskripsiBarang) < 20) {
        $error['deskripsiBarang'] = "Minimal 20 huruf";
    };
}
if (empty($tempatTerakhir)) {
    $error['tempatTerakhir'] = 'Tempat terakhir kosong';
} else {
    if (strlen($tempatTerakhir) < 10) {
        $error['tempatTerakhir'] = "Minimal 10 huruf";
    };
}
if (empty($nomerTelepon)) {
    $error['nomerTelepon'] = 'Nomer telepon kosong';
} else {
    if (strlen($nomerTelepon) < 10) {
        $error['nomerTelepon'] = "Minimal 12 angka";
    };
}


if ($tipe_file == "image/jpeg" || $tipe_file = "image/png" || $tipe_file = "image/jpg") {
    if ($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $path)) {
            $QueryEdit = mysqli_query($koneksi, "UPDATE tbl_barangtemuan SET 
                id_kategori = $kategori,
                nama = '$namaBarang',
                deskripsi = '$deskripsiBarang',
                gambar = '$namaGambar',
                tempat_terakhir = '$tempatTerakhir',
                no_telp = '$nomerTelepon'
                WHERE id_barangtemuan = $id_barangtemuan");
            if ($QueryEdit) {
                echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '$base_url'+'listbarangtemuan.php';
                    </script>";
            } else {
                echo "
                    <script>
                        alert('Data gagal dirubah');
                        window.location = 'http://localhost/barangtemuan/form_editbh.php'+'$id_barangtemuan';
                    </script>";
            }
        } else {
            echo "
                <script>
                    alert('Data gambar gagal');
                    window.location = 'http://localhost/barangtemuan/form_editbh.php';
                </script>";
        }
    } else {
        echo "
            <script>
                alert('Data gambar terlalu besar');
                window.location = 'http://localhost/barangtemuan/form_editbh.php';
            </script>";
    }
} else {
    echo "
        <script>
            alert('Type gambar salah');
            window.location = 'http://localhost/barangtemuan/form_editbh.php';
        </script>";
}
