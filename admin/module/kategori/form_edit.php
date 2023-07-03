<?php
include "../../lib/config.php";
    include "../../lib/koneksi.php";

$idKategori = $_GET['id_kategori'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori = '$idKategori'");
$row = mysqli_fetch_array($QueryEdit);
$idKategori = $row['id_kategori'];
$namaKategori = $row['nama_kategori'];
?>
<div class="content-body">
    
            <div class="container-fluid mt-3">
            <div class="content-wrapper">
    <section class="content-header">
        <h2>
            Manajemen Kategori
        </h2>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Kategori</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <form class="form-horizontal" action="../module/kategori/aksi_edit.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="namaKategori" class="col-sm-2 control-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="id_kategori" value="<?= $idKategori; ?>">
                                    <input type="text" class="form-control" name="namaKategori" value="<?= $namaKategori; ?>">
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