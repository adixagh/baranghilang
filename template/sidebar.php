<hr class="offset-lg">

    <div class="container tags">
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ion-arrow-down-b"></i> Sorting by name
          </button>
          <ul class="dropdown-menu">
            <li class="active"><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
            <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
            <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
            <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
          </ul>
        </div>

        <p>Search by tags</p>
        <div class="btn-group" data-toggle="buttons">
        <?php
                $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                while ($show = mysqli_fetch_array($QueryKategori)) {
          ?>
          <label class="btn btn-default btn-xs active">
            <input type="radio" name="options" id="option1" checked> <a href="kategori.php?id=<?= $show['id_kategori']; ?>"><?= $show['nama_kategori']; ?></a>
          </label>

          <?php } ?>
          
        </div>
    </div>

<div class="container">
      <div class="row">
        <!-- Filter -->
        <div class="col-sm-3 filter">
          <div class="item">
              <div class="title">
                  <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                  <a href="baranghilang.php" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                  <h1 class="h4">Kategori</h1>
              </div>

              <div class="controls">
              <?php
                        $QueryKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                        while ($show = mysqli_fetch_array($QueryKategori)) {
              ?>
                <div class="checkbox-group" data-status="inactive">
                    <div class="checkbox"><i class="ion-android-done"></i></div>
                    <div class="label" data-value="Laptops"><a href="kategori.php?id=<?= $show['id_kategori']; ?>"><?= $show['nama_kategori']; ?></a></div>
                    <input type="textbox" name="textbox" value="">
                </div>

                <?php } ?>
              </div>
          </div>

          <br>

          <div class="item">
              <div class="title">
                  
              </div>

              
          </div>

          <br>

          

          
        </div>
        

        
        <!-- /// -->