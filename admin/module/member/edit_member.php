<?php
include "../../lib/config.php";
include "../../lib/koneksi.php";

$idMember = $_GET['id_member'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_member WHERE id_member = '$idMember'");
$row = mysqli_fetch_array($QueryEdit);
?>
<<div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Member
</h2>
</section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Member</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <form class="form-horizontal" action="../module/member/aksi_edit.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Member</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="id_member" value="<?= $row['id_member']; ?>">
                                    <input type="text" class="form-control" name="nama_member" value="<?= $row['nama']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status Member</label>
                                <div class="col-md-10">
                                    <select name="status" class="form-control">
                                        <?php
                                        if ($row['status'] == 'Y') {
                                            $statusText = 'Aktif';
                                        } else {
                                            $statusText = 'Tidak Aktif';
                                        }
                                        ?>
                                       
                                        <option value="N">Tidak Aktif</option>
                                        <option value="Y">Aktif</option>
                                    </select>
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