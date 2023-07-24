<div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
        <?php echo isset($message['register']) ? $message['register'] : ''; ?>
          <h1 class="align-center">Daftar</h1>
          <br>

          <form class="join" action="<?= $base_url ?>pages/aksi/register.php" method="post">
            <div class="container-fluid">
              <div class="row">
              <div class="col-sm-12">
                  <input type="text" name="username" value="" placeholder="Username" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="text" name="nama" value="" placeholder="Nama Lengkap" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="number" name="no_hp" value="" placeholder="Nomer Telepon" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="text" name="alamat" value="" placeholder="Alamat" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" /><br>
                </div>
                <div class="col-sm-12">
                  <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" /><br>
                </div>
              </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Sign Up</button>

            <br><br>
            <p>
            Sudah punya akun? Silahkan login! <a href="login.php"> Login > 
            </p>
          </form>
          <br><br><br>

          <br class="hidden-sm hidden-md hidden-lg">
        </div>
      </div>
    </div>