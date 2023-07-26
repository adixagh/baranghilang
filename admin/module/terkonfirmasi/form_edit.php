<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    $_POST = $_SESSION['post'];
    unset($_SESSION['error']);
    unset($_SESSION['post']);
}

$idBaranghilang = $_GET['id_baranghilang'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang WHERE id_baranghilang = '$idBaranghilang'");
$row = mysqli_fetch_array($QueryEdit);
$id_baranghilang = $row['id_baranghilang'];
$id_kategori = $row['id_kategori'];
$nama = $row['nama'];
$deskripsi = $row['deskripsi'];
$tempat_terakhir = $row['tempat_terakhir'];
$no_telp = $row['no_telp'];
$gambar = $row['gambar'];
?>
<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Barang Hilang
</h2>
</section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Barang Hilang</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <form class="form-horizontal" action="../module/baranghilang/aksi_edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_baranghilang" value="<?= $idBaranghilang; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="kategori" class="col-sm-2 control-label">List Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <?php
                                        include "../../lib/koneksi.php";
                                        $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                                        while ($kategori = mysqli_fetch_array($kueriKategori)) {
                                        ?>
                                            <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['nama_kategori']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namaBarang" class="col-sm-2 control-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="namaBarang" value="<?= $nama; ?>">
                                    <p class="text-red"><?php echo isset($error['namaBarang']) ? $error['namaBarang'] : ''; ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsiBarang" class="col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="deskripsiBarang"><?= $deskripsi; ?></textarea>
                                    <p class="text-red"><?php echo isset($error['deskripsiBarang']) ? $error['deskripsiBarang'] : ''; ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempatTerakhir" class="col-sm-2 control-label">Lokasi Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempatTerakhir" placeholder="Lokasi Terakhir" value="<?= $tempat_terakhir; ?>">
                                    <p class="text-red"><?php echo isset($error['tempatTerakhir']) ? $error['tempat_terakhir'] : ''; ?></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nomerTelepon" class="col-sm-2 control-label">No Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomerTelepon" placeholder="Nomer Telepon" value="<?= $no_telp; ?>">
                                    <p class="text-red"><?php echo isset($error['nomerTelepon']) ? $error['no_telp'] : ''; ?></p>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>