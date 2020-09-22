  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nội Dung Bài Viết</title>
    <?php 
      require_once "view/public/header.php";
    ?>
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
                
                
                <li><a href="index.php?c=home&mod=client&act=index" class="">Trang Chủ</a></li>
                <li><a href="index.php?c=auth&mod=admin&act=login">Đăng Nhập</a></li>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>
    
    
    <div class="site-cover site-cover-sm same-height overlay single-page wow bounceInRight" style="background-image: url('<?php echo $category['file']?>');">
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
            <img src="<?php echo $category['file2']?>" alt="Image" class="img-fluid wow bounceInRight">
          </div>
          <div class="col-md-5 mr-auto order-md-1">
            <h2>Nội Dung Phim</h2>
            <p class="wow bounceInLeft"><?php echo $category['thumbnail']; ?></p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-5 text-center">           
            <h2>Ý Nghĩa Nhân Văn</h2>
            
            <p class="wow bounceInUp"><?php echo $category['ynghia1'] ?></p>
          </div>
        </div>
        <div class="row boicanh">
          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file3']?>" alt="Image" style="float: left" class="wow bounceInLeft">
            <h2 class="mb-3 h5">Bối Cảnh</h2>
            <p class="wow bounceInRight"><?php echo $category['ynghia2'] ?></p>
          </div>

          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file4']?>" alt="Image" style="float: right; padding-left: 5px;" class="wow bounceInRight">
            <h2 class="mb-3 h5">Diễn Biến</h2>
            <p class="wow bounceInLeft"><?php echo $category['ynghia3'] ?></p>
          </div>

          <div class="col-md-12 col-lg-12 mb-12 text-left">
            <img src="<?php echo $category['file5']?>" alt="Image" style="float: left;" class="wow bounceInLeft">
            <h2 class="mb-3 h5">Nhân Vật</h2>
            <p class="wow bounceInRight"><?php echo $category['ynghia4'] ?></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="<?php echo $category['file']?>" alt="Image" class="img-fluid wow bounceInLeft">
          </div>
          <div class="col-md-6 ml-auto  wow bounceInRight">
            <h2>Cái Kết</h2>
           
            <p class="mb-4"><?php echo $category['thumbnail2'] ?></p>
          </div>
        </div>
      </div>
    </div>
    
    <?php 
      require_once "view/public/footer.php";
    ?>
    
  </div> 
  </body>
</html>
