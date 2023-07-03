<?php
 include "../../lib/config.php";
 include "../../lib/koneksi.php";
?>
<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Member
</h2>
</section>

    <section class="content">
        <div class="card">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">List Member</h3>
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
                                        
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>No Telp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_member");
                                    while ($row = mysqli_fetch_array($QueryKategori)) {
                                    ?>
                                        <tr>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['no_telp']; ?></td>
                                            <td><?= $row['alamat']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['status']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                <a href="<?= $admin_url; ?>asset/adminweb.php?module=edit_member&id_member=<?= $row['id_member']; ?>">
                                                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>