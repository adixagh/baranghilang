
<hr class="offset-lg hidden-xs">
    <hr class="offset-md">

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
          <h1 class="align-center">Returning Member</h1>
          <br>

          <form class="signin" action="<?= $base_url ?>pages/aksi/login.php" method="post">
            <input type="text" name="username" value="" placeholder="Username" required="" class="form-control" />
            <br>
            <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
            <br>

            <button type="submit" class="btn btn-primary">Sign In</button>
            
            <br><br>

            <p>
              If you already have an account with us, please login.
            </p>
            <hr class="offset-xs">

            
            <hr class="offset-sm">

            <p>
              Don't have an account? Create one now! <a href="register.php"> Registration > </a>
            </p>

          </form>
        </div>
      </div>
    </div>

