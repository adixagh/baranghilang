<?php
include "lib/config.php";
include "lib/koneksi.php";
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

// var_dump($gambar);
?>

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">

      <h1 class="align-center">Edit Barang Hilang</h1>
      <br>

      <form class="join" action="pages/aksi/baranghilang/aksi_edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id_baranghilang" value="<?= $idBaranghilang; ?>">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <label for="inputEmail3">Pilih Kategori</label>
              <select class="form-control" name="kategori" id="">

                <?php
                include "../../lib/koneksi.php";
                $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                while ($kat = mysqli_fetch_array($kueriKategori)) {
                ?>

                  <option value="<?php echo $kat['id_kategori']; ?>">
                    <?php echo $kat['nama_kategori']; ?>
                  </option>

                <?php
                } ?>
              </select>
              <br>
            </div>
            <div class="col-sm-12">
              <label for="inputEmail3">Masukkan Nama Barang</label>
              <input type="text" name="namaBarang" value="<?= $nama; ?>" placeholder="" required="" class="form-control" /><br>
              <p class="text-red"><?php echo isset($error['namaBarang']) ? $error['namaBarang'] : ''; ?></p>
            </div>
            <div class="col-sm-12">
              <label for="inputEmail3">Foto Gambar</label>
              <input type="file" class="" id="gambar" name="gambar">
              <?php if (!empty($gambar)) : ?>
                <small>Foto-Terakhir :<u> <b><?= $gambar; ?></b></u></small>
              <?php endif; ?>
              <br>
              <br>
            </div>

            <div class="col-sm-12">
              <label for="inputEmail3">Masukkan Deskripsi Barang</label>
              <input type="text" name="deskripsiBarang" value="<?= $deskripsi; ?>" placeholder="" required="" class="form-control" /><br>
              <p class="text-red"><?php echo isset($error['deskripsiBarang']) ? $error['deskripsiBarang'] : ''; ?></p>
            </div>
            <div class="col-sm-12">
              <label for="inputEmail3">Masukkan Lokasi Terakhir</label>
              <input type="text" name="tempatTerakhir" value="<?= $tempat_terakhir; ?>" placeholder="" required="" class="form-control" /><br>
              <p class="text-red"><?php echo isset($error['tempatTerakhir']) ? $error['tempat_terakhir'] : ''; ?></p>
            </div>
            <div class="col-sm-12">
              <label for="inputEmail3">Masukkan Nomer Telepon Anda</label>
              <input type="text" name="nomerTelepon" value="<?= $no_telp; ?>" placeholder="" required="" class="form-control" /><br>
              <p class="text-red"><?php echo isset($error['nomerTelepon']) ? $error['no_telp'] : ''; ?></p>
            </div>
            <!-- <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member']; ?>"> -->
          </div>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Simpan</button>

        <br><br>
        <p>

        </p>
      </form>

      <br class="hidden-sm hidden-md hidden-lg">
    </div>
  </div>
</div>