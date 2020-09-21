  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nội Dung Bài Viết</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="xuly/fonts/icomoon/style.css">
    <link rel="stylesheet" href="xuly/css/bootstrap.min.css">
    <link rel="stylesheet" href="xuly/css/magnific-popup.css">
    <link rel="stylesheet" href="xuly/css/jquery-ui.css">
    <link rel="stylesheet" href="xuly/css/owl.carousel.min.css">
    <link rel="stylesheet" href="xuly/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="xuly/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="xuly/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="xuly/css/aos.css">

    <link rel="stylesheet" href="xuly/css/style3.css">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Nội Dung Bài Viết</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                
                
                <li><a href="index.php?c=home&mod=client&act=index" class="">Home</a></li>
                <li><a href="index.php?c=auth&mod=admin&act=login">Login</a></li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?php echo $category['file']?>');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <h1 class=""><?php echo $category['name']; ?></h1>
              <p class="lead mb-4 text-white"><?php echo $category['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="<?php echo $category['file2']?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 mr-auto order-md-1">
            <h2>Nội Dung Phim</h2>
            <p><?php echo $category['thumbnail']; ?></p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-5 text-center">           
            <h2>Ý Nghĩa Nhân Văn</h2>
            
            <p><?php echo $category['ynghia1'] ?></p>
          </div>
        </div>
        <div class="row boicanh">
          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file3']?>" alt="Image" style="float: left;">
            <h2 class="mb-3 h5">Bối Cảnh</h2>
            <p><?php echo $category['ynghia2'] ?></p>
          </div>

          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file4']?>" alt="Image" style="float: right; padding-left: 5px;">
            <h2 class="mb-3 h5">Diễn Biến</h2>
            <p><?php echo $category['ynghia3'] ?></p>
          </div>

          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file5']?>" alt="Image" style="float: left;">
            <h2 class="mb-3 h5">Nhân Vật</h2>
            <p><?php echo $category['ynghia4'] ?></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $category['file']?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto">
            <h2>Cái Kết</h2>
            
            <p class="mb-4"><?php echo $category['thumbnail2'] ?></p>
          </div>
        </div>
      </div>
      <audio controls class="audio">

        <source src="xuly/audio/tudo.mp3" type="audio/mpeg" >

        </audio>
    </div>
    
    <?php 
      require_once "view/public/footer.php";
    ?>
    
  </div>

  <script src="xuly/js/jquery-3.3.1.min.js"></script>
  <script src="xuly/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="xuly/js/jquery-ui.js"></script>
  <script src="xuly/js/popper.min.js"></script>
  <script src="xuly/js/bootstrap.min.js"></script>
  <script src="xuly/js/owl.carousel.min.js"></script>
  <script src="xuly/js/jquery.stellar.min.js"></script>
  <script src="xuly/js/jquery.countdown.min.js"></script>
  <script src="xuly/js/jquery.magnific-popup.min.js"></script>
  <script src="xuly/js/bootstrap-datepicker.min.js"></script>
  <script src="xuly/js/aos.js"></script>

  <script src="xuly/js/main.js"></script>

 
  </body>
</html>
