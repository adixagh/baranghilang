<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";
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
        <div class="card">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">List Barang Hilang</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Lokasi Terakhir</th>
                                        <th>No. Telp</th>
                                        <th>Tanggal</th>
                                        <th>Gambar</th>
                                        <th style="width: 110px;">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang p INNER JOIN tbl_kategori k on p.id_kategori = k.id_kategori");
                                while ($kat = mysqli_fetch_array($kueriKategori)) {
                                ?>
                                    <tr>
                                        <td><?= $kat['nama']; ?></td>
                                        <td><?= $kat['nama_kategori']; ?></td>
                                        <td><?= $kat['deskripsi']; ?></td>
                                        <td><?= $kat['tempat_terakhir']; ?></td>
                                        <td><?= $kat['no_telp']; ?></td>
                                        <td><?= $kat['tanggal']; ?></td>
                                        <td><img src="../upload/<?= $kat['gambar']; ?>" height="80" width="120"></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= $admin_url; ?>asset/adminweb.php?module=edit_baranghilang&id_baranghilang=<?= $kat['id_baranghilang']; ?>">
                                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="<?= $admin_url; ?>module/baranghilang/aksi_hapus.php?id_baranghilang=<?= $kat['id_baranghilang']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                                    <button class="btn btn-danger"><i class="fa fa-power-off"></i></button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer clearfix">
                        <a href="adminweb.php?module=tambah_baranghilang" class="btn btn-primary ml-1 btn-flat pull-left">Tambah Barang</a>
                        <a class="btn btn-sm btn-default btn-flat pull-right" data-toggle="modal" data-target="#laporan">Laporan</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="laporan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Laporan Data Barang</h4>
            </div>
            <form action="../module/baranghilang/aksi_laporan.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="mulai" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="selesai" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
