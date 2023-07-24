<?php
    
    include "../../lib/koneksi.php";
    $querybh = mysqli_query($koneksi, "SELECT COUNT(id_baranghilang) as jmlbaranghilang FROM tbl_baranghilang");
    $hasilbh = mysqli_fetch_array($querybh);

    $querybt = mysqli_query($koneksi, "SELECT COUNT(id_barangtemuan) as jmlbarangtemuan FROM tbl_barangtemuan");
    $hasilbt = mysqli_fetch_array($querybt);

    $querym = mysqli_query($koneksi, "SELECT COUNT(id_member) as jmlmember FROM tbl_member");
    $hasilm = mysqli_fetch_array($querym);

    ?>

    <div class="content-body">
    
            <div class="container-fluid mt-3">
            <div class="content-wrapper">
    <section class="content-header">
        <h2>
            Dashboard
        </h2>
    </section>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Barang Hilang</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$hasilbh['jmlbaranghilang'];?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Barang Temuan</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$hasilbt['jmlbarangtemuan'];?></h2>
                                  
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Konfirmasi Ulang</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Member</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$hasilm['jmlmember'];?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                 
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <!-- <h4 class="mb-1">Adixa Goulbudin Hekmatyar</h4>
                                            <p>18.12.0672</p> -->
                                            <h3 class="m-0"></h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#"></a></li>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#"></a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="chart_widget_2"></canvas>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                                                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>