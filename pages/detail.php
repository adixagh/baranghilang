<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_baranghilang = $_GET['id_baranghilang'];

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
            
						$QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang p JOIN tbl_kategori k on p.id_kategori = k.id_kategori where id_baranghilang = '$id_baranghilang'");
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
          <h1 ><?= $show['nama']; ?></h1>
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
            
						$QueryBarang = mysqli_query($koneksi, "SELECT * FROM tbl_baranghilang p JOIN tbl_kategori k on p.id_kategori = k.id_kategori where id_baranghilang = '$id_baranghilang'");
						while ($show = mysqli_fetch_array($QueryBarang)) {
            ?>
            
	    		
		    		 <br>

		    		 

             <h2>Info Lengkap Barang</h2>
             <br>

             <div class="row specification">
                <div class="col-sm-6"> <label>Kategori</label> </div>
                <div class="col-sm-6"> <p><?= $show['nama_kategori']; ?></p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Deskripsi</label> </div>
                <div class="col-sm-6"> <p><?= $show['deskripsi']; ?></p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>Lokasi Terakhir</label> </div>
                <div class="col-sm-6"> <p><?= $show['tempat_terakhir']; ?></p> </div>
              </div>

              <div class="row specification">
                <div class="col-sm-6"> <label>No. Telp Pemilik Barang</label> </div>
                <div class="col-sm-6"> <p><?= $show['no_telp']; ?></p> </div>
              </div>
              
              <?php } ?>
          </div>
          
        

          <div class="col-sm-5">
            <div class="comments">
              <h2 class="h3">What do you think? (#3)</h2>
              <br>


              <div class="wrapper">
                <div class="content">
                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>


                  <h3>Chris Hemsworth</h3>
                  <label>Today</label>
                  <p>
                    Samsung's Galaxy S7 smartphone is getting serious hype. Here's what it does better than Apple's iPhone 6s.
                  </p>


                  <h3>Anne Hathaway</h3>
                  <label>2 years ago</label>
                  <p>
                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                  </p>
                </div>
              </div>
              <br>

              <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
            </div>
            <br><br>

            
	    		</div>
        </div>
        
    	</div>
    </div>
    <br><br>