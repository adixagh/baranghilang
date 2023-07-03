<div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
        <?php echo isset($message['register']) ? $message['register'] : ''; ?>
          <h1 class="align-center">Input Barang Temuan</h1>
          <br>

          <form class="join" action="<?= $base_url ?>pages/aksi/register.php" method="post">
            <div class="container-fluid">
              <div class="row">
              <div class="col-sm-12">
                  <input type="text" name="username" value="" placeholder="Kategori" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="text" name="nama" value="" placeholder="Nama Barang" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="number" name="no_hp" value="" placeholder="Foto" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="text" name="alamat" value="" placeholder="Deskripsi Barang" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="email" name="email" value="" placeholder="Lokasi Terakhir" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="password" value="" placeholder="No Telp" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="password" value="" placeholder="Pertanyaan Keamanan" required="" class="form-control" /><br>
                </div>
              </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Sign Up</button>

            <br><br>
            <p>
            Already have an account? Login now! <a href="login.php"> Login > 
            </p>
          </form>

          <br class="hidden-sm hidden-md hidden-lg">
        </div>
      </div>
    </div>