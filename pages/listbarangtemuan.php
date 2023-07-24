<?php

// $_SESSION['id_member']=$id_member;
// var_dump($_SESSION['id_member']);
?>

<div class="col-sm-9 products">
          <div class="row">

          <?php
						$QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_barangtemuan p LEFT JOIN tbl_kategori k on p.id_kategori = k.id_kategori where id_member='{$_SESSION['id_member']}'");
						while ($show = mysqli_fetch_array($QueryBarang)) {
						?>
            <div class="col-sm-6 col-md-4 product">
            
              <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
              <a href=""><img src="admin/upload/<?= $show['gambar']; ?>" /></a>

              <div class="content">
                <h1 class="h4"><?= $show['nama']; ?></h1>
                <p class="price"><?= $show['nama_kategori']; ?></p>
                <label><?= $show['tempat_terakhir']; ?></label>

                <a href="detailt.php?id_barangtemuan=<?php echo $show['id_barangtemuan']; ?>" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> Konfirmasi</button>
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