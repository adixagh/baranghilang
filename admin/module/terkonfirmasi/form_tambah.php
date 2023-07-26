    <!-- Content Wrapper. Contains page content -->
    <div class="content-body">
    
    <div class="container-fluid mt-3">
    <div class="content-wrapper">
<section class="content-header">
<h2>
    Manajemen Barang Hilang
</h2>
</section>
      <section class="content">

        <form class="" action="../module/baranghilang/aksi_simpan.php" method="post" enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Barang Hilang</h3>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select class="form-control" name="kategori" id="">
                    <?php
                      include "../../lib/koneksi.php";
                      $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                      while ($kat = mysqli_fetch_array($kueriKategori)) {
                          ?>

                    <option
                      value="<?php echo $kat['id_kategori']; ?>">
                      <?php echo $kat['nama_kategori']; ?>
                    </option>

                    <?php
                      } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Nama Barang">
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input type="file" class="" id="gambar" name="gambar">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="deskripsiBarang" name="deskripsiBarang"
                    placeholder="Deskripsi barang">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi Terakhir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tempatTerakhir" name="tempatTerakhir"
                    placeholder="Lokasi Terakhir">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nomerTelepon" name="nomerTelepon"
                    placeholder="Nomer Telepon">
                </div>
              </div>
             

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
            </div>
          </div>
        </form>