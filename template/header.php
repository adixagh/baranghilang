<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Barang Hilang & Temuan Jogja</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/carousel-recommendation.css" rel="stylesheet">
    <link href="assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <?php
	$page = "index";

 
  ?>



  <body>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <i class="ion-cube"></i> Find Thing</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li <?php if($page == "index") echo "class='active'";?>> <a href="index.php">Home</a></li>
            <li <?php if($page == "baranghilang") echo "class='active'";?>> <a href="baranghilang.php">Barang Hilang</a></li>
            <li <?php if($page == "Barang Temuan") echo "class='active'";?>> <a href="barangtemuan.php">Barang Temuan</a></li>
              <!-- <li class="active"><a href="index.php">Home</a></li>
              <li ><a href="baranghilang.php">Barang Hilang</a></li> -->
              <!-- <li><a href="barangtemuan.php">Barang Temuan</a></li> -->
              <li><a href="rules.php">Info</a></li>
              <li class="dropdown">
                <a href="./" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Input dan List Barang <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li class="dropdown-header">Input</li>
                  <li><a href="inputbaranghilang.php">Barang Hilang</a></li>
                  <li><a href="inputbarangtemuan.php">Barang Temuan</a></li>
                  <li class="dropdown-header">List</li>
                  <li><a href="listbaranghilang.php">List Barang Hilang</a></li>
                  <li><a href="listbarangtemuan.php">List Barang Temuan</a></li>
                
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php if (empty($_SESSION['user_nama'])) { ?>
              <li><a href="login.php"> <i class="ion-android-person"></i> Login </a></li>
              <li><a href="register.php"> Daftar</a></li>
              <?php } ?>

              <?php if (!empty($_SESSION['user_nama'])) { ?>
                <li><a href=""> <i class="ion-android-person"></i> <?= $_SESSION['user_nama']; ?> </a></li>
              <li><a href="logout.php"> Sign Out</a></li>
              <?php } ?>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    </body>
</html>