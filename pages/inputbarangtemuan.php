
<div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
        
          <h1 class="align-center">Input Barang Temuan</h1>
          <br>

          <form class="join" action="pages/aksi/barangtemuan/aksi_simpan.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
              <div class="row">
              <div class="col-sm-12">
              <label for="inputEmail3" >Pilih Kategori</label>
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
                  <br>
                </div>
                <div class="col-sm-12">
                <label for="inputEmail3" >Masukkan Nama Barang</label>
                  <input type="text" name="namaBarang" value="" placeholder="" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                <label for="inputEmail3" >Foto Gambar</label>
                <input type="file" class="" id="gambar" name="gambar">
                <br>
                </div>
                
                <div class="col-sm-12">
                <label for="inputEmail3" >Masukkan Deskripsi Barang</label>
                  <input type="text" name="deskripsiBarang" value="" placeholder="" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                <label for="inputEmail3" >Masukkan Lokasi Terakhir</label>
                  <input type="text" name="tempatTerakhir" value="" placeholder="" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                <label for="inputEmail3" >Masukkan Nomer Telepon Anda</label>
                  <input type="text" name="nomerTelepon" value="" placeholder="" required="" class="form-control" /><br>
                </div>
                <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member']; ?>">
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