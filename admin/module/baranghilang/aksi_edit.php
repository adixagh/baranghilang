<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {

    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $namaGambar = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../../upload/" . $namaGambar;

    $id_baranghilang = $_POST['id_baranghilang'];
    $kategori = $_POST['kategori'];
    $namaBarang = $_POST['namaBarang'];
    $deskripsiBarang = $_POST['deskripsiBarang'];
    $tempatTerakhir = $_POST['tempatTerakhir'];
    $nomerTelepon = $_POST['nomerTelepon'];
    $status = $_POST['status'];


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
                $QueryEdit = mysqli_query($koneksi, "UPDATE tbl_baranghilang SET 
                id_kategori = $kategori,
                nama = '$namaBarang',
                deskripsi = '$deskripsiBarang',
                gambar = '$namaGambar',
                tempat_terakhir = '$tempatTerakhir',
                no_telp = '$nomerTelepon',
                status = '$status'
                WHERE id_baranghilang = $id_baranghilang");
                if ($QueryEdit) {
                    echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '$admin_url'+'asset/adminweb.php?module=baranghilang';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal dirubah');
                        window.location = '$admin_url'+'asset/adminweb.php?module=edit_baranghilang&id_baranghilang='+'$id_baranghilang';
                    </script>";
                }
            } else {
                echo "
                <script>
                    alert('Data gambar gagal');
                    window.location = '$admin_url'+'asset/adminweb.php?module=tambah_baranghilang';
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Data gambar terlalu besar');
                window.location = '$admin_url'+'asset/adminweb.php?module=tambah_baranghilang';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Type gambar salah');
            window.location = '$admin_url'+'asset/adminweb.php?module=tambah_baranghilang';
        </script>";
    }
}
