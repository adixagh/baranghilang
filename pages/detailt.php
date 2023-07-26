<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_barangtemuan = $_GET['id_barangtemuan'];


?>

<hr class="offset-lg">

<div class="product">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-md-7">
        <div class="carousel product" data-count="5" data-current="1">
          <!-- <button class="btn btn-control"></button> -->

          <div class="items">

            <?php

            $QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_barangtemuan p JOIN tbl_kategori k on p.id_kategori = k.id_kategori where id_barangtemuan = '$id_barangtemuan'");
            while ($show = mysqli_fetch_array($QueryBarang)) {
            ?>
              <div class="item active" data-marker="1">
                <br>
                <img src="admin/upload/<?= $show['gambar']; ?> " />
              </div>

          </div>

        </div>
      </div>
      <div class="col-sm-5 col-md-5">
        <h1><?= $show['nama']; ?></h1>
        <h3 style="font-family:'serif'">Di Posting Tanggal :</h3>
        <h3 style="color:#00A1B4"><?= $show['tanggal']; ?></h3>


        <br><br>


      </div>

    </div>
  <?php } ?>

  <br><br><br>




  <div class="row">
    <div class="col-sm-7">
      <?php

      $QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_barangtemuan p JOIN tbl_kategori k on p.id_kategori = k.id_kategori where id_barangtemuan = '$id_barangtemuan'");
      while ($show = mysqli_fetch_array($QueryBarang)) {
      ?>


        <br>



        <h2>Info Lengkap Barang</h2>
        <br>

        <div class="row specification">
          <div class="col-sm-6"> <label>Kategori</label> </div>
          <div class="col-sm-6">
            <p><?= $show['nama_kategori']; ?></p>
          </div>
        </div>

        <div class="row specification">
          <div class="col-sm-6"> <label>Deskripsi</label> </div>
          <div class="col-sm-6">
            <p><?= $show['deskripsi']; ?></p>
          </div>
        </div>

        <div class="row specification">
          <div class="col-sm-6"> <label>Lokasi Terakhir</label> </div>
          <div class="col-sm-6">
            <p><?= $show['tempat_terakhir']; ?></p>
          </div>
        </div>

        <div class="row specification">
          <div class="col-sm-6"> <label>No. Telp Pemilik Barang</label> </div>
          <div class="col-sm-6">
            <p><?= $show['no_telp']; ?></p>
          </div>
        </div>

      <?php } ?>
    </div>
    <?php

    $QueryBarang = mysqli_query($koneksi, "SELECT COUNT(id_komen) FROM tbl_komen  where id_barangtemuan = '$id_barangtemuan'");
    $count = mysqli_fetch_array($QueryBarang);
    ?>

    <!-- Comments -->
    <div class="col-sm-5">
      <div class="comments">
        <h2 class="h3">Komentar (#<?= $count[0]; ?>)</h2>
        <br>
      

        <?php

        $QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_komen  where id_barangtemuan = '$id_barangtemuan'");
        while ($show = mysqli_fetch_array($QueryBarang)) {
          // Menentukan zona waktu yang berbeda (misalnya 'Asia/Jakarta')
          $timezone = new DateTimeZone('Asia/Jakarta');

          // Membuat objek DateTime untuk waktu saat ini dengan zona waktu yang ditentukan
          $dateTimeNow = new DateTime('now', $timezone);

          // Format tanggal dan waktu dengan zona waktu yang telah ditentukan
          $formattedDateTime = $dateTimeNow->format('d-m-Y H:i:s');


          $finalDate = date("d F Y - H:i:s", strtotime($show['tanggal']));
        ?>


          <div class="wrapper">
            <div class="content">
              <h3><?= $show['nama_member']; ?></h3>
              <label><?= $finalDate; ?></label>
              <p>
                <?= $show['isi_komen']; ?>
              </p>
            <?php } ?>



            <br>
            <div class="mt-4 p-0">
              <form action="pages/aksi/barangtemuan/aksi_komen.php?id_barangtemuan=<?php echo $id_barangtemuan ?>" method="post">
                <div class="form-group row">
                  <label for="commentInput" class="col-sm-12 col-form-label">Your Comment:</label>
                  <div class="col-sm-9">
                    <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member']; ?>">
                    <input type="hidden" name="dateNow" value="<?php echo $formattedDateTime; ?>">
                    <input type="text" class="form-control" name="comment" id="commentInput" placeholder="Enter your comment">
                  </div>
                  <div class="col-sm-2 mr-0">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            </div>
          </div>

      </div>
      <br><br>


    </div>
  </div>

  </div>
</div>
<br><br>