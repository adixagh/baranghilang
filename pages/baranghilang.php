<!-- <div class="input-group input-group-sm">
             <input class="form-control" type="search" placeholder="Cari Kategori" aria-label="Search"
               name="cariKategori">
             <div class="input-group-append">
               <button class="btn btn-primary" type="submit">
                 <i class="fa fa-search"></i>
               </button>
             </div>
           </div> -->

           

<div class="col-sm-9 products">

          <div class="row">
          <div class="col-md-4 col-md-offset-8">
          <form action="baranghilang.php" method="get">
          <div class="input-group pull-right">
          <input class="form-control" type="search" placeholder="Cari Barang" aria-label="Search"
               name="caribarang">
               <div class="input-group-btn">
               <button class="btn btn-primary" type="submit">
                 <i class="ion-android-search"></i></button>
               </div>
        </div>
          </form>
          </div>
        
          <?php

          if(isset($_GET['caribarang'])){
            $ygdicari = $_GET['caribarang'];
						$QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang p 
            LEFT JOIN tbl_kategori k on p.id_kategori = k.id_kategori
            WHERE nama LIKE '%$ygdicari%'");

          } else {
						$QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang p LEFT JOIN tbl_kategori k on p.id_kategori = k.id_kategori");

          }
						while ($show = mysqli_fetch_array($QueryBarang)) {
						?>
            <div class="col-sm-6 col-md-4 product">
            
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href=""><img src="admin/upload/<?= $show['gambar']; ?>" /></a>

              <div class="content">
                <h1 class="h4"><?= $show['nama']; ?></h1>
                <p class="price"><?= $show['nama_kategori']; ?></p>
                <label><?= $show['tempat_terakhir']; ?></label>
                <label><b><?= $show['tanggal']; ?></b></label>

               
                <a href="detail.php?id_baranghilang=<?php echo $show['id_baranghilang']; ?>"> <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-android-open"></i> Details</button></a>
                
              </div>
            </div>
            <?php } ?>
            
            

          </div>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="disabled"><a href="#">..</a></li>
              <li><a href="#">10</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /// -->
      </div>
    </div>

          