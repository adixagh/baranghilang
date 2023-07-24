<?php
session_start();
// if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
//     echo "<center>Anda harus login terlebih dahulu<br>";
//     echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
// } else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";
    $id_member = $_POST['id_member'];
    date_default_timezone_set('Asia/Jakarta');

    if ($_POST) {
        $namaGambar = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "../../../admin/upload/" . $namaGambar;

        $kategori = $_POST['kategori'];
        $namaBarang = $_POST['namaBarang'];
        $deskripsiBarang = $_POST['deskripsiBarang'];
        $tempatTerakhir = $_POST['tempatTerakhir'];
        $nomerTelepon = $_POST['nomerTelepon'];
        $tanggal = date('d/m/Y', time());
    

        if (empty($kategori)) {
            $error['kategori'] = 'Kategori kosong';
        }
        if (empty($namaBarang)) {
            $error['namaBarang'] = 'Nama barang kosong';
        } else {
            if (strlen($namaBarang) < 10) {
                $error['namaBarang'] = "Minimal 10 huruf";
            };
        }
        if (empty($namaGambar)) {
            $error['namaGambar'] = 'Gambar kosong';
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
                        $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_barangtemuan (id_kategori, nama, gambar, deskripsi, tempat_terakhir, no_telp, tanggal, id_member) VALUES ('$kategori','$namaBarang','$namaGambar','$deskripsiBarang','$tempatTerakhir','$nomerTelepon','$tanggal','$id_member')");
                        if ($QuerySimpan) {
                            echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = 'http://localhost/baranghilang/barangtemuan.php';
                    </script>";
                        } else {
                            echo "
                    <script>
                        alert('Data gagal disimpan');
                        window.location = 'http://localhost/baranghilang/inputbarangtemuan.php';
                    </script>";
                        }
                    } else {
                        echo "
                <script>
                    alert('Data gambar gagal');
                    window.location = 'http://localhost/baranghilang/inputbarangtemuan.php';
                </script>";
                    }
                } else {
                    echo "
            <script>
                alert('Data gambar terlalu besar');
                window.location = 'http://localhost/baranghilang/inputbarangtemuan.php';
            </script>";
                }
            } else {
                echo "
        <script>
            alert('Type gambar salah');
            window.location = 'http://localhost/baranghilang/inputbarangtemuan.php';
        </script>";
            }
        
     
}
